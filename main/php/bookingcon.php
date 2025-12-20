<?php

$conn = new mysqli("localhost", "root", "", "mcc_booking_system");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_event = $_POST['nama_event'];
    $tgl_acara = $_POST['tgl_acara'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $id_ruangan = $_POST['id_ruangan']; 
    $id_peminjam = $_POST['id_peminjam']; 
    
    $sql_room = "SELECT nama_ruangan FROM Ruangan WHERE id_ruangan = '$id_ruangan'";
    $result_room = $conn->query($sql_room);
    $room_data = $result_room->fetch_assoc();
    $nama_ruangan = $room_data['nama_ruangan'];

    $sql_insert = "INSERT INTO Booking (tgl_acara, jam_mulai, jam_selesai, nama_event, id_peminjam, id_ruangan, status_terakhir) 
                   VALUES ('$tgl_acara', '$jam_mulai', '$jam_selesai', '$nama_event', '$id_peminjam', '$id_ruangan', 'Pending')";

    if ($conn->query($sql_insert) === TRUE) {
        $last_id = $conn->insert_id; 

    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
?>