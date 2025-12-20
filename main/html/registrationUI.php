<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Ruangku</title>
    <title>Ruangku</title>
</head>
<body>
     <nav class="navbar">
        <div class="title">
            <h1>Ruangku</h1>
        </div>

        <div class="function-btn">
            <div>
                <button><i class="fa-solid fa-gear"></i>     Admin panel</button>
            </div> 
            <div>
                <button><i class="fa-solid fa-door-open"></i>      Rooms</button>
            </div>
        </div>

        <div class="profile-logout-btn">
            <div>
                <h3>Username</h3>
            </div>
            <div>
                <button href="#" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Logout</button>
            </div>
        </div>
    </nav>

    <section>
        <div class="registration-container">
            

            <div class="room-info">

            <a href="rooms.php">
                <button class="back-btn"><i class="fa-solid fa-arrow-left"></i>  Back to Rooms</button>
            </a>
                <div>
                    <img src="../../images/battlearena.png" alt="battlearena" class="room-image">

                    <div class="info-box">
                        <h4>Battle Arena</h4>
                        <p><i class="fa-solid fa-user-group"></i> Capacity: 20 people</p>
                        <p><i class="fa-solid fa-location-dot"></i>  Floor 3</p>

                        <hr>

                        <h4>Description</h4>
                        <p>A spacious conference room perfect for team meetings and presentations. 
                        Features state-of-the-art AV equipment and comfortable seating.</p>

                        <hr>

                        <h4>Facilities</h4>

                        <div class="facilities-container">
                            <div class="facilities-list">
                                <p><i class="fa-regular fa-circle-check"></i>  Projector</p>
                                <p><i class="fa-regular fa-circle-check"></i>  WiFi</p>
                                <p><i class="fa-regular fa-circle-check"></i>  High-End PC Gaming</p>
                            </div>
                            
                            <div class="facilities-list">
                                <p><i class="fa-regular fa-circle-check"></i>  Kursi Gaming Secretlab</p>
                                <p><i class="fa-regular fa-circle-check"></i>  AC</p>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <div>

                </div>
            </div>

            <form action="../php/registration.php" class="registration-form">
                <h4>Book This Room</h4>

                <div class="form-group">
                    <label><i class="fa-regular fa-calendar"></i> Select Date</label>
                    <input type="text" placeholder="" id="Date" onfocus="(this.type='date')">
                </div>
                
                <div class="time-row">
                    <div class="form-group">
                        <label><i class="fa-regular fa-clock"></i> Start Time</label>
                        <input type="text" placeholder="" id="StartTime" onfocus="(this.type='time')">
                    </div>
                    <div class="form-group">
                        <label><i class="fa-regular fa-clock"></i> End Time</label>
                        <input type="text" placeholder="" id="EndTime" onfocus="(this.type='time')">
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" id="Event" placeholder="e.g., Team meeting, Workshop, Presentation...">
                </div>
                
                <div class="form-group">
                    <label>Event Description</label>
                    <textarea id="EventDescription" placeholder="e.g., Team meeting, Workshop, Presentation..."></textarea>
                </div>
                
                <button type="submit" class="btn-submit">Submit Booking Request</button>

                <p class="footer-txt">Your booking request will be reviewed and you'll receive a confirmation shortly.</p>
            </form>
        </div>
    </section>
</body>
</html>