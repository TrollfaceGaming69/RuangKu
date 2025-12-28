<?php
session_start();

$host = 'localhost';
$user = 'root';     
$pass = '';         
$db   = 'ruangku';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi Database Gagal: " . $conn->connect_error);
}

if (isset($_POST['submit_booking'])) {

    $id_ruangan       = $_POST['id_ruangan'];
    $tgl_acara        = $_POST['tgl_acara'];
    $jam_mulai        = $_POST['jam_mulai'];
    $jam_selesai      = $_POST['jam_selesai'];
    $nama_event       = $_POST['nama_event'];
    $deskripsi        = $_POST['deskripsi_kegiatan'];
    
    $nama_lengkap     = $_POST['nama_peminjam']; 
    $nik              = $_POST['nik'];
    $no_hp            = $_POST['no_telp'];       
    $email            = $_POST['email'];
    $nama_komunitas   = $_POST['nama_komunitas'];

    // Mulai Transaksi
    // Karena $conn sudah didefinisikan di atas, baris ini aman.
    $conn->begin_transaction(); 

    try {
        // --- TAHAP 1: Cek / Insert Komunitas ---
        $id_komunitas = NULL;
        if (!empty($nama_komunitas)) {
            // (Baris 38 kemungkinan di sini sebelumnya)
            // Karena $conn ada, prepare() tidak akan error "on null" lagi
            $stmt_kom = $conn->prepare("SELECT id_komunitas FROM Komunitas WHERE nama_komunitas = ?");
            $stmt_kom->bind_param("s", $nama_komunitas);
            $stmt_kom->execute();
            $result_kom = $stmt_kom->get_result();
            
            if ($row_kom = $result_kom->fetch_assoc()) {
                $id_komunitas = $row_kom['id_komunitas'];
            } 
            $stmt_kom->close();
        }

        // --- TAHAP 2: Cek / Insert Peminjam ---
        $stmt_check = $conn->prepare("SELECT id_peminjam FROM Peminjam WHERE nik = ?");
        $stmt_check->bind_param("s", $nik);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        $id_peminjam = 0;

        if ($result_check->num_rows > 0) {
            $row = $result_check->fetch_assoc();
            $id_peminjam = $row['id_peminjam'];

            $stmt_update = $conn->prepare("UPDATE Peminjam SET nama_lengkap=?, no_hp=?, email=?, id_komunitas=? WHERE id_peminjam=?");
            $stmt_update->bind_param("sssii", $nama_lengkap, $no_hp, $email, $id_komunitas, $id_peminjam);
            $stmt_update->execute();
            $stmt_update->close();
        } else {
            $stmt_insert_p = $conn->prepare("INSERT INTO Peminjam (nama_lengkap, nik, no_hp, email, id_komunitas) VALUES (?, ?, ?, ?, ?)");
            $stmt_insert_p->bind_param("ssssi", $nama_lengkap, $nik, $no_hp, $email, $id_komunitas);
            $stmt_insert_p->execute();
            $id_peminjam = $conn->insert_id; 
            $stmt_insert_p->close();
        }
        $stmt_check->close();

        // --- TAHAP 3: Insert Booking ---
        $query_booking = "INSERT INTO Booking (tgl_acara, jam_mulai, jam_selesai, nama_event, deskripsi_kegiatan, id_peminjam, id_ruangan, status_terakhir) VALUES (?, ?, ?, ?, ?, ?, ?, 'Pending')";
        
        $stmt_booking = $conn->prepare($query_booking);
        $stmt_booking->bind_param("sssssii", $tgl_acara, $jam_mulai, $jam_selesai, $nama_event, $deskripsi, $id_peminjam, $id_ruangan);
        $stmt_booking->execute();
        $no_booking = $conn->insert_id; 
        $stmt_booking->close();

        // --- TAHAP 4: Insert Log ---
        $keterangan_log = "Booking baru dibuat oleh user.";
        $status_awal = "Pending";
        $stmt_log = $conn->prepare("INSERT INTO Status_Log (no_booking, status_baru, keterangan) VALUES (?, ?, ?)");
        $stmt_log->bind_param("iss", $no_booking, $status_awal, $keterangan_log);
        $stmt_log->execute();
        $stmt_log->close();

        // Commit transaksi
        $conn->commit();

        echo "<script>
                alert('Permintaan Booking Berhasil Dikirim! Mohon tunggu konfirmasi admin.');
                window.location.href = '../views/rooms.php'; 
              </script>";

    } catch (Exception $e) {
        $conn->rollback();
        echo "<script>
                alert('Terjadi kesalahan sistem: " . addslashes($e->getMessage()) . "');
                window.history.back();
              </script>";
    }
} else {
    header("Location: ../views/rooms.php");
    exit();
}

$conn->close();
?>