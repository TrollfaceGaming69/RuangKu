<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "mcc_booking_system";

$connection = mysqli_connect($host, $user, $password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $tgl_acara = htmlspecialchars($_POST['Date']);
    $jam_mulai = htmlspecialchars($_POST['StartTime']);
    $jam_selesai = htmlspecialchars($_POST['EndTime']);
    $nama_event = htmlspecialchars($_POST['Event']);
    $deskripsi_kegiatan = htmlspecialchars($_POST['EventDescription']);
    $id_ruangan = $_POST['RoomID'];

    if (empty($tgl_acara) || empty($jam_mulai) || empty($jam_selesai) || empty($nama_event)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: ../html/registration.html");
        exit();
    }

    $insert = mysqli_prepare(
        $connection,
        "INSERT INTO Booking (tgl_acara, jam_mulai, jam_selesai, nama_event, deskripsi_kegiatan, id_ruangan, status_terakhir) 
         VALUES (?, ?, ?, ?, ?, ?, 'Pending')"
    );

    mysqli_stmt_bind_param(
        $insert,
        "sssssi", 
        $tgl_acara,
        $jam_mulai,
        $jam_selesai,
        $nama_event,
        $deskripsi_kegiatan,
        $id_ruangan
    );

    if (mysqli_stmt_execute($insert)) {
        // Simpan data ke session untuk ditampilkan di halaman konfirmasi
        $_SESSION['last_booking'] = [
            'event' => $nama_event,
            'date' => $tgl_acara,
            'time' => $jam_mulai . " - " . $jam_selesai,
            'room_id' => $id_ruangan
        ];
        
        // Alihkan ke halaman konfirmasi (misal: confirmation.php)
        header("Location: ../html/bookingconfirmation.php");
        exit();
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($connection);
        header("Location: ../html/registration.html");
        exit();
    }
}

?>