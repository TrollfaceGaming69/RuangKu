<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>MCC Booking</title>
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
                <button class=""><i class="fa-solid fa-door-open"></i> Rooms</button>
            </div>
        </div>
    
        <div class="profile-logout-btn">
            <div>
                <h3>Username</h3>
            </div>
            <div>
                <button href="#" class="logout-btn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
            </div>
        </div>
    </nav>

    <div class="container">
    <header>
        <h1>Admin Panel</h1>
        <p>Manage booking requests and verify payments</p>
    </header>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="icon-box bg-orange-light"><i class="fa-regular fa-clock"></i></div>
            <div class="stat-info">
                <h2>1</h2>
                <p>Pending Requests</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="icon-box bg-green-light"><i class="fa-regular fa-circle-check"></i></div>
            <div class="stat-info">
                <h2>4</h2>
                <p>Approved Bookings</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="icon-box bg-blue-light"><i class="fa-regular fa-credit-card"></i></div>
            <div class="stat-info">
                <h2>1</h2>
                <p>Pending Payments</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="icon-box bg-purple-light"><i class="fa-solid fa-credit-card"></i></div>
            <div class="stat-info">
                <h2>5</h2>
                <p>Total Bookings</p>
            </div>
        </div>
    </div>

    <div class="tabs">
        <button class="tab active">Booking Requests</button>
        <button class="tab inactive">Payment Verification</button>
    </div>

    <p class="section-title">Pending Booking Requests</p>

    <div class="booking-card">
        <div class="booking-header">
            <h3>Training Room F</h3>
            <h4>React Advanced Workshop</h4>
            <p class="booking-desc">Advanced React training covering hooks, context, and performance optimization</p>
        </div>

        <div class="details-grid">
            <div class="detail-item">
                <span class="label">Date:</span>
                <span class="value">2025-12-19</span>
            </div>
            <div class="detail-item">
                <span class="label">Time:</span>
                <span class="value">09:00 - 12:00</span>
            </div>
            <div class="detail-item">
                <span class="label">Booker:</span>
                <span class="value">Michael Chen</span>
            </div>
            <div class="detail-item">
                <span class="label">Community:</span>
                <span class="value">Frontend Developers Indonesia</span>
            </div>
            <div class="detail-item">
                <span class="label">NIK:</span>
                <span class="value">3101234567890789</span>
            </div>
            <div class="detail-item">
                <span class="label">Phone:</span>
                <span class="value">+62 815-5555-6666</span>
            </div>
        </div>

        <div class="actions">
            <button class="btn btn-approve">
                <i class="fa-regular fa-circle-check"></i> Approve
            </button>
            <button class="btn btn-reject">
                <i class="fa-regular fa-circle-xmark"></i> Reject
            </button>
        </div>
    </div>
</div>
</body>

</html>