<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Ruangku</title>
</head>

<body class="">

    <div class="container">
        <div class="info-side">
            <span class="badge">Room Booking System</span>
            <h1 class="main-title">Selamat Datang di <br><span class="brand">RuangKu</span></h1>
            <p class="sub-text">
                Platform booking ruangan modern untuk gedung multifungsi.
                Kelola peminjaman ruang meeting, kelas, dan aula acara dengan mudah.
            </p>

            <div class="features-row">
                <div class="feature-box">
                    <div class="icon-circle blue-bg">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Easy Booking</h4>
                        <p>Book ruangan dalam hitungan menit</p>
                    </div>
                </div>

                <div class="feature-box">
                    <div class="icon-circle green-bg">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Secure Payment</h4>
                        <p>Pembayaran aman dan terverifikasi</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-section">

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert-error">
                    <span><?= $_SESSION['error']; ?></span>
                </div>
            <?php unset($_SESSION['error']);
            endif; ?>

            <form action="../php/registerlogic.php" method="POST" class="reg-form">
                <h1>Register</h1>
                <div class="">
                    <label for="name">Name*</label>
                    <input type="text" id="name" name="name" required>
                    <label for="name" class="info">Name must be at least 2 characters long and cannot contain numbers or special characters.</label><br><br>
                </div>

                <div class="">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required><br><br>
                </div>

                <div class="">
                    <label for="password">Password*</label>
                    <input type="password" id="password" name="password" required>
                    <label for="password" class="info">Password should be at least 8 characters including a number and Uppercase Letter.</label><br><br>

                </div>

                <div class="">
                    <label for="password-confirmation">Confirm Password</label>
                    <input type="password" id="password-confirmation" name="password-confirmation" required><br><br>
                </div>

                <button type="submit" class="reg-btn"><i class="fa-solid fa-user-plus"></i> Sign Up</button>

                <p class="login-conf">already have an account? <a href="login.html">Sign in</a></p>
            </form>
        </div>

    </div>
</body>

</html>