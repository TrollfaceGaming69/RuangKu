<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bookinghistory.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
     <nav class="navbar">
        <div class="title">
            <h1>Ruangku</h1>
        </div>

        <div class="function-btn">
            <div>
                <button class=""><i class="fa-solid fa-gear"></i>     Admin panel</button>
            </div>
            <div>
                <button class=""><i class="fa-solid fa-door-open"></i>      Rooms</button>
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
    <div>

        <div class="container">
        <header>
            <h1>Booking History</h1>
            <p>View and manage all your room bookings</p>
        </header>

        <div class="stats-container">
            <div class="stat-card"><span class="stat-number"><?= $stats['total'] ?></span><span class="stat-label">Total</span></div>
            <div class="stat-card green"><span class="stat-number"><?= $stats['approved'] ?></span><span class="stat-label">Approved</span></div>
            <div class="stat-card orange"><span class="stat-number"><?= $stats['pending'] ?></span><span class="stat-label">Pending</span></div>
            <div class="stat-card red"><span class="stat-number"><?= $stats['rejected'] ?></span><span class="stat-label">Rejected</span></div>
        </div>

        <div class="filter-bar">
            <span>Filter by status:</span>
            <div class="filter-buttons">
                <button class="btn-filter active" onclick="filterData('all', this)">All</button>
                <button class="btn-filter" onclick="filterData('approved', this)">Approved</button>
                <button class="btn-filter" onclick="filterData('pending', this)">Pending</button>
                <button class="btn-filter" onclick="filterData('rejected', this)">Rejected</button>
            </div>
        </div>

        <div id="booking-list">
            <?php while($row = mysqli_fetch_assoc($result)): 
                $status_class = strtolower($row['status_terakhir']);
            ?>
                <div class="booking-item <?= $status_class ?>">
                    <div class="item-header">
                        <div>
                            <h3><?= htmlspecialchars($row['nama_ruangan']) ?></h3>
                            <h4><?= htmlspecialchars($row['nama_event']) ?></h4>
                        </div>
                        <div class="action-group">
                            <span class="badge <?= ($row['status_verifikasi'] == 'Verified') ? 'paid' : 'unpaid' ?>">
                                <i class="fa-regular fa-credit-card"></i> <?= ($row['status_verifikasi'] == 'Verified') ? 'Sudah Dibayar' : 'Belum Dibayar' ?>
                            </span>
                            <button class="btn-detail">View Details</button>
                        </div>
                    </div>
                    <div class="item-meta">
                        <span><i class="fa-regular fa-calendar"></i> <?= $row['tgl_acara'] ?></span>
                        <span><i class="fa-regular fa-credit-card"></i> Rp <?= number_format($row['harga_sewa'], 0, ',', '.') ?></span>
                    </div>
                    <hr>
                    <div class="item-footer">
                        <span class="request-date">Requested on <?= $row['tgl_request'] ?></span>
                        <span class="status-badge <?= $status_class ?>"><?= $row['status_terakhir'] ?></span>
                    </div>
                </div>
            <?php endwhile; ?>

            <div id="empty-state" class="empty-card" style="<?= ($stats['total'] > 0) ? 'display: none;' : 'display: flex;' ?>">
                <p class="empty-title">No bookings found</p>
                <p class="empty-subtitle">Try adjusting your filter</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
     
        
        <script src="script.js"></script>
    </div>
    </section>
</body>
</html>