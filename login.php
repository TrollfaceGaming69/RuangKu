<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Booking MCC</title>
</head>
<body>
    
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

        <div>

           <?php if (isset($_SESSION['error'])): ?>
                <div class="alert-error">
                    <span><?= $_SESSION['error']; ?></span>
                </div>
            <?php unset($_SESSION['error']);
            endif; ?>
            
         <form action="../php/loginlogic.php" method="POST" class="log-form">
                <h1 class=""> Sign In</h1>
                <div class="">
                <label for="name" class="text-xm">Name</label>
                <input type="text" id="name" name="name" required ><br><br>
                </div>

                <div class="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required ><br><br>
                </div>

                <div class="">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required ><br><br>
                </div>

                <div class="rememberme-btn">
                    <label for="remember-me">Remember Me</label>
                    <input type="checkbox" id="remember-me" name="remember-me"><br><br>
                </div>

                <a href="" class="submitbtn"><button type="submit" class="log-btn"><i class="fa-solid fa-arrow-right-to-bracket"></i>   Sign In</button></a>
                
                <hr>

                <a href="register.html">New Staff? Register here</a>
            </form>

        </div>
    </div>
</body>
</html>