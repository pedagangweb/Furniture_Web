<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
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
                            <li><a href="product.php">Product</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.hp">Contact</a></li>
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
                            <li><a href="signup.php"><span class="sign-up"></span> Sign Up</a></li>
                            <li><a href="login.php"><span class="sign-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>

      
    </header>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>&copy; 2023 Well Website. All rights reserved.</p>
            </footer>
        
    </body>
</html>
