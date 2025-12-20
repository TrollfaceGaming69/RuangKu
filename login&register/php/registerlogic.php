<?php
session_start();

$host = "localhost";
$user = "root";
$db_password = "";
$database = "ruangku";

$connection = mysqli_connect($host, $user, $db_password, $database);

if (!$connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_admin = htmlspecialchars($_POST['name']);
    $username   = htmlspecialchars($_POST['username']);
    $password   = $_POST['password'];

    if (empty($nama_admin) || empty($username) || empty($password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: ../html/register.php");
        exit();
    }

    if (strlen($nama_admin) < 2) {
    $errors[] = "Name must be at least 2 characters long.";
    }

    if (!preg_match('/^[A-Za-z ]+$/', $nama_admin)) {
        $_SESSION['error'] = "Name cannot contain numbers or special characters.";
        header("Location: ../html/register.php");
        exit();
    }

    $confirm_password = $_POST['password-confirmation'];

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Password do not match.";
        header("Location: ../html/register.php");
        exit();
    }

    if (
        strlen($password) < 8 ||
        !preg_match('/[A-Z]/', $password) ||
        !preg_match('/[0-9]/', $password)
    ) {
       $_SESSION['error'] = "Wrong password format.";
        header("Location: ../html/register.php");
        exit();

    } else {

        $stmt = mysqli_prepare(
            $connection,
            "SELECT id_admin FROM admin WHERE username = ?"
        );
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            $_SESSION['error'] = "Username already taken.";
            header("Location: ../html/register.php");
            exit();

        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert = mysqli_prepare(
                $connection,
                "INSERT INTO admin (nama_admin, username, password)
                 VALUES (?, ?, ?)"
            );
            mysqli_stmt_bind_param(
                $insert,
                "sss",
                $nama_admin,
                $username,
                $hashed_password
            );

            if (mysqli_stmt_execute($insert)) {
                header("Location: ../html/login.php");
                exit();
            } else {
                $error = "Gagal mendaftarkan akun.";
            }
        }
    }
}


?>