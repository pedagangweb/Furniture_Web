<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
        <header>
            <a href="#" class="logo"><img src="img/logo.png" alt=""></a>
        
            <div class="bx bx-menu" id="menu-icon"></div>

            <ul class="navbar">
                <li><a href="mebel.php">Home</a></li>
                <li><a href="products.php">Product</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </header>
            <div class="login-container">
                <h1><b>SIGN UP</b></h1>
                <form method="post" action="user_registration_script.php">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                    <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                    <input type="text" class="form-control" name="city" placeholder="City" required="true">
                    <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                    <input type="submit" class="btn btn-primary" value="Sign Up">
                </form>
            </div>
            <br><br><br><br><br><br>
            <footer>
                <p>&copy; 2023 Okea Website. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
