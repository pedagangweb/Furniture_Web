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
    <!--about-->
    <section class="about" id="about.html">
        <div class="about-point">
            <span>About Us</span>
            <h1 class="h1-edit">Customer kami adalah prioritas kami</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="img/aboutcontent.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Sebuah website katalog furniture adalah platform online yang menyediakan informasi dan gambar mengenai berbagai macam produk furnitur. Tujuan utama dari website ini adalah untuk membantu pengguna dalam mencari dan memilih furnitur yang sesuai dengan kebutuhan dan preferensi mereka</p>
                <a href="#" class="btn">detail</a>
            </div>
        </div>
    </section>

    <script src="main.js"></script>
    <!--Footer-->
    <footer>
        <p>&copy; 2023 well Website. All rights reserved.</p>
    </footer>
</body>
</html>