<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mebel</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div>
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
        <div class="login-container">
            <h3>LOGIN</h3>
            <p>Login to make a purchase.</p>
            <form method="post" action="login_submit.php">
                <input type="email" class="form-control" name="email" placeholder="Email" >
                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" >
                <input type="submit" value="Login" class="btn btn-primary">
            </form>            
            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
            <br><br><br><br><br>

        </div>       
    <footer>
        <p>&copy; 2023 Well Website. All rights reserved.</p>
    </footer>
    </body>
</html>
