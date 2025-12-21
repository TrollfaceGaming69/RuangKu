<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../php/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Ruangku</title>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>
    <nav class="navbar">
        <div class="title">
            <h1>Ruangku</h1>
        </div>

        <div class="function-btn">
            <div>
                <button class=""><i class="fa-solid fa-gear"></i> Admin panel</button>
            </div>
            <div>
                <a href="rooms.php">
                <button class=""><i class="fa-solid fa-door-open"></i> Rooms</button>
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
                <form action="../php/logout.php" method="post">
                    <button type="submit" class="logout-btn">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                    </button>
                </form>
            </div>
        </div>

    </nav>
    <section>

        <div class="description">
            <h2>Admin Panel</h2>
            <p>Manage booking requests and verify payments</p>
        </div>

        <div class="notification-container">
            <div class="notification-box">
                <div>
                    <div>
                        <div class="arrow-box">
                            <div class="notification-icon1"><i class="fa-solid fa-door-open"></i></i></div>
                            <button><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <h1></h1>
                    </div>
                </div>
                <p>Available Rooms</p>
            </div>

            <div class="notification-box">
                <div>
                    <div>
                        <div class="arrow-box">
                            <div class="notification-icon2"><i class="fa-regular fa-clock"></i></div>
                            <button><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <h1></h1>
                    </div>
                </div>
                <p>Pending Requests</p>
            </div>

            <div class="notification-box">
                <div>
                    <div>
                        <div class="arrow-box">
                            <div class="notification-icon3"><i class="fa-regular fa-circle-check"></i></div>
                            <button><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <h1></h1>
                    </div>
                </div>
                <p>Approved Bookings</p>
            </div>

            <div class="notification-box">
                <div>
                    <div>
                        <div class="arrow-box">
                            <div class="notification-icon4"><i class="fa-regular fa-credit-card"></i></div>
                            <button><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <h1></h1>
                    </div>
                </div>
                <p>Total Bookings</p>
            </div>
        </div>

        <div class="container">
            <div class="header">
                <h2>Recent Bookings</h2>
                <a href="#" class="view-all">View All <i data-lucide="arrow-right" style="width: 16px;"></i></a>
            </div>

            <div class="booking-list">
                <div class="booking-item">
                    <div class="booking-info">
                        <h3>Podcast Room A</h3>
                        <p>2025-12-18 • 09:00 - 11:00</p>
                    </div>
                    <div class="status approved">
                        <i data-lucide="check-circle-2"></i> Approved
                    </div>
                </div>

                <div class="booking-item">
                    <div class="booking-info">
                        <h3>Battle Arena 1</h3>
                        <p>2025-12-19 • 09:00 - 11:00</p>
                    </div>
                    <div class="status pending">
                        <i data-lucide="alert-circle"></i> Pending
                    </div>
                </div>

                <div class="booking-item">
                    <div class="booking-info">
                        <h3>Event Hall D</h3>
                        <p>2025-12-22 • 10:00 - 17:00</p>
                    </div>
                    <div class="status approved">
                        <i data-lucide="check-circle-2"></i> Approved
                    </div>
                </div>
            </div>
        </div>

        <div class="room-list-header">
            <h2>Available Rooms</h2>

            <a href="rooms.php">
            <button>Browse All <i class="fa-solid fa-arrow-right"></i></button>
            </a>
            
        </div>

        <div class="room-list-container">

            <div class="room-card">
                <div class="image-container">
                    <img src="../../images/battlearena.png" alt="Room Name">
                    <span class="badge status-available">Available</span>
                </div>

                <div class="card-content">
                    <h3>Battle Arena 1</h3>
                    <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 20 people</p>

                    <div class="tags">
                        <span class="tag"><i class="fa-solid fa-video"></i> Projector</span>
                        <span class="tag">PC Gaming</span>
                        <span class="tag"><i class="fa-solid fa-wifi"></i> WiFi</span>
                    </div>

                    <button class="btn-view">View Details <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="room-card">
                <div class="image-container">
                    <img src="../../images/catwalkstudio.jpg" alt="Room Name">
                    <span class="badge status-available">Available</span>
                </div>

                <div class="card-content">
                    <h3>Catwalk Studio</h3>
                    <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 100 people</p>

                    <div class="tags">
                        <span class="tag"><i class="fa-solid fa-video"></i> Projector</span>
                        <span class="tag">Lighting Stage </span>
                        <span class="tag"><i class="fa-solid fa-wifi"></i> WiFi</span>
                    </div>

                    <button class="btn-view">View Details <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>

            <div class="room-card">
                <div class="image-container">
                    <img src="../../images/musemind-ux-agency-Wm0aqfHw1Xg-unsplash.jpg" alt="Room Name">
                    <span class="badge status-booked">Booked</span>
                </div>

                <div class="card-content">
                    <h3>Podcast Room A</h3>
                    <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 4 people</p>

                    <div class="tags">
                        <span class="tag"> Mixer Audio</span>
                        <span class="tag"><i class="fa-solid fa-wind"></i> AC</span>
                        <span class="tag"><i class="fa-solid fa-wifi"></i> WiFi</span>
                    </div>

                    <button class="btn-view">View Details <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <script>
            lucide.createIcons();
        </script>
    </section>
</body>

</html>