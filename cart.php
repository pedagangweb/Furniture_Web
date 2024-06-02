<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>cart</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" >
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
                            <li><a href="signup.php"><span class="sign-up"></span> Sign Up</a></li>
                            <li><a href="login.php"><span class="sign-in"></span> Sign In</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>

    </header>
        <div>
            <br>
            <div class="cart-container">
                <table class="table-cart">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rp <?php echo $sum;?>,-</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn-add">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer>
                <p>&copy; 2023 Well Website. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
