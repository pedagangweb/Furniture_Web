<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>mebel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
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
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> to <br>Furniture</h1>
            <div class="app-stores">
            <img src="img/ios.png" alt="">
            <img src="img/512" alt="">
            </div>
        </div>
    </section> 
        
    </section>
    <script src="main.js"></script>
    <!--Footer-->
    <footer>
        <p>&copy; 2023 Well Website. All rights reserved.</p>
    </footer>
</body>
</html>