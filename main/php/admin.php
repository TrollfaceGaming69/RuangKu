<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "mcc_booking_system";
$connection = mysqli_connect($host, $user, $password, $database);

$query = "SELECT b.*, p.nama_lengkap, p.nik, p.no_hp, k.nama_komunitas, r.nama_ruangan 
          FROM Booking b
          JOIN Peminjam p ON b.id_peminjam = p.id_peminjam
          LEFT JOIN Komunitas k ON p.id_komunitas = k.id_komunitas
          JOIN Ruangan r ON b.id_ruangan = r.id_ruangan
          WHERE b.status_terakhir = 'Pending'
          ORDER BY b.tgl_request DESC";

$result = mysqli_query($connection, $query);
$pending_count = mysqli_num_rows($result);

$count_approved = mysqli_num_rows(mysqli_query($connection, "SELECT no_booking FROM Booking WHERE status_terakhir = 'Approved'"));
$count_total = mysqli_num_rows(mysqli_query($connection, "SELECT no_booking FROM Booking"));
?>