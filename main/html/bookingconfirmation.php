<?php
require_once '../php/bookingcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bookingcon.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Booking Success - RuangKu</title>
</head>
<body>
    <nav class="navbar">
        <div class="title">
            <h1>Ruangku</h1>
        </div>

        <div class="function-btn">
            <div>
                <a href="dashboard.php">
                    <button><i class="fa-solid fa-gear"></i> Admin panel</button>
                </a>
            </div>
            <div>
                <a href="rooms.php">
                    <button><i class="fa-solid fa-door-open"></i> Rooms</button>
                </a>
            </div>
        </div>

        <div class="profile-logout-btn">
            <div>
                <h3>
                    <?php echo isset($_SESSION['admin_username']) ? htmlspecialchars($_SESSION['admin_username']) : 'Guest'; ?>
                </h3>
            </div>
            <div>
                <button class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="success-icon">✓</div>

        <h2>Booking Request Submitted!</h2>
        <p class="sub-text">
            Your booking request has been submitted successfully. 
            <strong>Booking ID: #<?php echo htmlspecialchars($booking_id); ?></strong>
        </p>

        <div class="details-box">
            <h3>Booking Details</h3>
            
            <div class="detail-row">
                <span class="label">Room:</span>
                <span class="value"><?php echo htmlspecialchars($nama_ruangan); ?></span>
            </div>
            
            <div class="detail-row">
                <span class="label">Event:</span>
                <span class="value"><?php echo htmlspecialchars($nama_event); ?></span>
            </div>
            
            <div class="detail-row">
                <span class="label">Date:</span>
                <span class="value"><?php echo htmlspecialchars($tgl_acara_fmt); ?></span>
            </div>
            
            <div class="detail-row">
                <span class="label">Time:</span>
                <span class="value"><?php echo htmlspecialchars($jam_mulai_fmt) . " - " . htmlspecialchars($jam_selesai_fmt); ?></span>
            </div>
        </div>

        <button class="btn-continue" onclick="window.location.href='rooms.php'">Continue</button>
    </div>
</body>
</html>