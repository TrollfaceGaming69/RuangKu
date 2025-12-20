<?php
session_start();

$host = "localhost";
$user = "root";
$db_password = "";
$database = "ruangku";

$connection = mysqli_connect($host, $user, $db_password, $database);

$nama_admin = htmlspecialchars($_POST['name']);
$username   = htmlspecialchars($_POST['username']);
$password   = $_POST['password'];


if (empty($nama_admin) || empty($username) || empty($password)) {
    $_SESSION['error'] = "All fields are required.";
    header("Location: ../html/login.php");
    exit();
}

$query = "SELECT * FROM admin WHERE username = '$username' AND nama_admin = '$nama_admin'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {

        $_SESSION['admin_id'] = $row['id_admin'];
        $_SESSION['admin_name'] = $row['nama_admin'];
        $_SESSION['admin_username'] = $row['username'];

        if (isset($_POST['remember-me'])) {
            setcookie("admin_username", $row['username'], time() + (86400 * 30), "/");
        }

        header("Location: ../../main/html/dashboard.php");
        exit();

    } else {
        $_SESSION['error'] = "Invalid Password.";
        header("Location: ../html/login.php");
    }

} else {
    $_SESSION['error'] = "No user found.";
    header("Location: ../html/login.php");
}

mysqli_close($connection);

?>