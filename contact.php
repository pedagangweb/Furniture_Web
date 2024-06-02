<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mebel</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>
    <!--menu nya-->
    <header>
      <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
        
        <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <?php
                    if(isset($_SESSION['email'])){
                    ?>
                    <li><a href="mebel.php">Home</a></li>
                    <li><a href="products.php">Product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="cart.php"><span class="cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="setting"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="log-out"></span> Logout</a></li>
                    <?php
                    }else{
                    ?>
                    <li><a href="mebel.php">Home</a></li>
                    <li><a href="products.php">Product</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <div class="header-btn">
                        <a href="signup.php" class="sign-up">Sign Up</a>
                        <a href="login.php" class="sign-in">Sign In</a>
                    </div>
                    <?php
                    }
                ?>
                           
        </ul>
    </header>

    <!--Contact-->
    <section class="contact" id="contact.html">
        <div class="contact-point">
            <span>Contact</span>
            <h1 class="h1-edit">Jika tertarik bisa hubungi</h1>
        </div>
        <div class="contact-container">
            <div class="box">
                <div class="con-img">
                    <img src="#" alt="">
                </div>
                <h2>AHMAD MABRURI</h2>
                <p>21.11.3872</p>
                <p>08828727077</p>
            </div>
            <div class="box">
                <div class="con-img">
                    <img src="#" alt="">
                </div>
                <h2>RIZQI AL FAJAR</h2>
                <p>21.11.3836</p>
                <p>087830346002</p>
            </div>
            <div class="box">
                <div class="con-img">
                    <img src="#" alt="">
                </div>
                <h2>ALDI PRATAMA</h2>
                <p>21.11.3818</p>
                <p>082359434377</p>
            </div>
        </div>
    </section>

    <div class="g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2818403508713!2d110.40647117486947!3d-7.759904892259175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1687403896921!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--Footer-->
    <footer>
        <p>&copy; 2023 well Website. All rights reserved.</p>
    </footer>
    
    <script src="main.js"></script>
</body>
</html>