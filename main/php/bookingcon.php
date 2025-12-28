<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "ruangku";

$connection = mysqli_connect($host, $user, $password, $database);

if (!isset($_GET['id'])) {
    header("Location: ../html/dashboard.php");
    exit();
}

$no_booking = $_GET['id'];

$sql = "SELECT b.no_booking, b.nama_event, b.tgl_acara, b.jam_mulai, b.jam_selesai, r.nama_ruangan 
        FROM Booking b
        JOIN Ruangan r ON b.id_ruangan = r.id_ruangan
        WHERE b.no_booking = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $no_booking);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    $booking_id     = $row['no_booking'];
    $nama_ruangan   = $row['nama_ruangan'];
    $nama_event     = $row['nama_event'];
    
    $tgl_acara_fmt  = date("d F Y", strtotime($row['tgl_acara']));
    $jam_mulai_fmt  = date("H:i", strtotime($row['jam_mulai']));
    $jam_selesai_fmt= date("H:i", strtotime($row['jam_selesai']));
    
} else {
    echo "<script>alert('Data booking tidak ditemukan!'); window.location.href='../html/dashboard.php';</script>";
    exit();
}

?>