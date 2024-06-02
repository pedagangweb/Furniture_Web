<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>setting</title>
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
        </div>
        </header>
        <div>
            <br>
            <div class="login-container">
                        <h1>Change Password</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
            </div>
        </div>
        <footer>
            <p>&copy; 2023 Well Website. All rights reserved.</p>
        </footer>
    </body>
</html>
