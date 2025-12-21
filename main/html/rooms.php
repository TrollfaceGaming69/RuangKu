<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/rooms.css">
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
                    <button class=""><i class="fa-solid fa-gear"></i> Admin panel</button>
                </a>
            </div>
            <div>
                <button class=""><i class="fa-solid fa-door-open"></i> Rooms</button>
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
        <div class="main-container">
            <h2>Browse Rooms</h2>
            <p>Find and book the perfect space for your needs</p>

            <div class="container">
                <div class="search-wrapper">
                    <div class="input-group">
                        <i class="fa-solid fa-magnifying-glass search-icon"></i>
                        <input type="text" placeholder="Search rooms..." class="search-input">
                    </div>
                    <button class="filter-button">
                        <i class="fa-solid fa-sliders"></i>
                        <span>Filters</span>
                    </button>
                </div>
            </div>

            <h4>Showing 8 of 8 rooms</h4>

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

                        <a href="registrationUI.php">
                            <button class="btn-view">Register <i class="fa-solid fa-arrow-right"></i></button>
                        </a>
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

                        <button class="btn-view">Register <i class="fa-solid fa-arrow-right"></i></button>
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

                        <button class="btn-view">Register <i class="fa-solid fa-arrow-right"></i></button>
                    </div>


                </div>

                <div class="room-card">
                    <div class="image-container">
                        <img src="../../images/dlxmedia-hu-JJFfe2qRqhE-unsplash.jpg" alt="Room Name">
                        <span class="badge status-available">Available</span>
                    </div>

                    <div class="card-content">
                        <h3>Podcast Room B</h3>
                        <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 4 people</p>

                        <div class="tags">
                            <span class="tag"><i class="fa-solid fa-video"></i> Projector</span>
                            <span class="tag">Sound System</span>
                            <span class="tag"><i class="fa-solid fa-wifi"></i> WiFi</span>
                        </div>

                        <button class="btn-view">Register <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="room-card">
                    <div class="image-container">
                        <img src="../../images/kobu-agency-uekNxBHpUU8-unsplash.jpg" alt="Room Name">
                        <span class="badge status-available">Available</span>
                    </div>

                    <div class="card-content">
                        <h3>Photo Studio A</h3>
                        <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 10 people</p>

                        <div class="tags">
                            <span class="tag"> Background</span>
                            <span class="tag">Camera</span>
                            <span class="tag"><i class="fa-solid fa-wind"></i> AC</span>
                        </div>

                        <button class="btn-view">Register <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="room-card">
                    <div class="image-container">
                        <img src="../../images/Screenshot 2025-12-19 083442.png" alt="Room Name">
                        <span class="badge status-available">Available</span>
                    </div>

                    <div class="card-content">
                        <h3>DigiArt Lab</h3>
                        <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 25 people</p>

                        <div class="tags">
                            <span class="tag"><i class="fa-solid fa-video"></i> Projector</span>
                            <span class="tag"><i class="fa-solid fa-tablet"></i> Tablet</span>
                            <span class="tag"><i class="fa-solid fa-wifi"></i> WiFi</span>
                        </div>

                        <button class="btn-view">Register <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="room-card">
                    <div class="image-container">
                        <img src="../../images/Screenshot 2025-12-19 084245.png" alt="Room Name">
                        <span class="badge status-booked">Booked</span>
                    </div>

                    <div class="card-content">
                        <h3>Sky Rooftop</h3>
                        <p class="capacity"><i class="fa-solid fa-users"></i> Capacity: 200 people</p>

                        <div class="tags">
                            <span class="tag"><i class="fa-solid fa-video"></i> Projector</span>
                            <span class="tag">Lighting Stage</span>
                            <span class="tag"><i class="fa-solid fa-wifi"></i> WiFi</span>
                        </div>

                        <button class="btn-view">Register<i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>