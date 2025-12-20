<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mcc_booking_system";

$conn = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT b.*, r.nama_ruangan, r.harga_sewa, p.status_verifikasi 
          FROM Booking b
          JOIN Ruangan r ON b.id_ruangan = r.id_ruangan
          LEFT JOIN Pembayaran p ON b.no_booking = p.no_booking
          ORDER BY b.tgl_request DESC";
$result = mysqli_query($conn, $query);

$stats = [
    'total'    => mysqli_num_rows($result),
    'approved' => mysqli_query($conn, "SELECT COUNT(*) as c FROM Booking WHERE status_terakhir='Approved'")->fetch_assoc()['c'],
    'pending'  => mysqli_query($conn, "SELECT COUNT(*) as c FROM Booking WHERE status_terakhir='Pending'")->fetch_assoc()['c'],
    'rejected' => mysqli_query($conn, "SELECT COUNT(*) as c FROM Booking WHERE status_terakhir='Rejected'")->fetch_assoc()['c']
];

include '../html/bookinghistoryUI.php';
?>