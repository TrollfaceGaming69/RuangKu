<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Ruangku</title>
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
                    <?php echo htmlspecialchars($_SESSION['admin_username']); ?>
                </h3>
            </div>
            <div>
                <button href="#" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </div>
    </nav>

    <section>
        <div class="registration-container">


            <div class="room-info">

                <a href="rooms.php">
                    <button class="back-btn"><i class="fa-solid fa-arrow-left"></i> Back to Rooms</button>
                </a>
                <div>
                    <img src="../../images/battlearena.png" alt="battlearena" class="room-image">

                    <div class="info-box">
                        <h4>Battle Arena</h4>
                        <p><i class="fa-solid fa-user-group"></i> Capacity: 20 people</p>
                        <p><i class="fa-solid fa-location-dot"></i> Floor 3</p>

                        <hr>

                        <h4>Description</h4>
                        <p>A spacious conference room perfect for team meetings and presentations.
                            Features state-of-the-art AV equipment and comfortable seating.</p>

                        <hr>

                        <h4>Facilities</h4>

                        <div class="facilities-container">
                            <div class="facilities-list">
                                <p><i class="fa-regular fa-circle-check"></i> Projector</p>
                                <p><i class="fa-regular fa-circle-check"></i> WiFi</p>
                                <p><i class="fa-regular fa-circle-check"></i> High-End PC Gaming</p>
                            </div>

                            <div class="facilities-list">
                                <p><i class="fa-regular fa-circle-check"></i> Kursi Gaming Secretlab</p>
                                <p><i class="fa-regular fa-circle-check"></i> AC</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div>

                </div>
            </div>

            <form action="../php/registration.php" method="POST" class="registration-form">
                <h4>Book This Room</h4>

                <input type="hidden" name="id_ruangan" value="1">

                <div class="form-group">
                    <label><i class="fa-regular fa-calendar"></i> Select Date*</label>
                    <input type="text" name="tgl_acara" placeholder="" id="Date" onfocus="(this.type='date')" required>
                </div>

                <div class="time-row">
                    <div class="form-group">
                        <label><i class="fa-regular fa-clock"></i> Start Time*</label>
                        <input type="text" name="jam_mulai" placeholder="" id="StartTime" onfocus="(this.type='time')" required>
                    </div>
                    <div class="form-group">
                        <label><i class="fa-regular fa-clock"></i> End Time*</label>
                        <input type="text" name="jam_selesai" placeholder="" id="EndTime" onfocus="(this.type='time')" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Event Name*</label>
                    <input type="text" name="nama_event" id="Event" placeholder="e.g., Team meeting..." required>
                </div>

                <div class="form-group">
                    <label>Event Description*</label>
                    <textarea name="deskripsi_kegiatan" id="EventDescription" placeholder="e.g., Team meeting..."></textarea>
                </div>

                <hr>

                <div class="form-group">
                    <label>Borrower Name*</label>
                    <input type="text" name="nama_peminjam" id="Name" placeholder="e.g., John Doe" required>
                </div>

                <div class="form-group">
                    <label>NIK*</label>
                    <input type="text" name="nik" id="NIK" placeholder="e.g., 1234567890123456" required>
                </div>

                <div class="form-group">
                    <label>Phone Number*</label>
                    <input type="text" name="no_telp" id="Phone" placeholder="e.g., 081356479826" required>
                </div>

                <div class="form-group">
                    <label>Email*</label>
                    <input type="text" name="email" id="Email" placeholder="e.g., john.doe@gmail.com" required>
                </div>

                <div class="form-group">
                    <label>Community Name (Optional)</label>
                    <input type="text" name="nama_komunitas" id="CommunityName" placeholder="e.g., John Doe's Community">
                </div>

                <button type="submit" name="submit_booking" class="btn-submit">Submit Booking Request</button>

                <p class="footer-txt">Your booking request will be reviewed and you'll receive a confirmation shortly.</p>
            </form>
        </div>
    </section>
</body>

</html>