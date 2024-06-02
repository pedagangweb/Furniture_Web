<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>loguout</title>
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
        <div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <p>&copy; 2023 Well Website. All rights reserved.</p>
           </footer>
        </div>
    </body>
</html>
