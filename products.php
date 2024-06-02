<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
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

    <!--Produk-->
    <p>.</p>
    <p>.</p>
    <div class="carousel">
      <div class="carousel-inner">
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
          <div class="carousel-item">
              <img src="img/About.jpg">
          </div>
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item">
              <img src="img/contact.jpg">
          </div>
          <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
          <div class="carousel-item">
              <img src="img/Wallpaper.jpg">
          </div>
          <label for="carousel-3" class="carousel-control prev control-1">‹</label>
          <label for="carousel-2" class="carousel-control next control-1">›</label>
          <label for="carousel-1" class="carousel-control prev control-2">‹</label>
          <label for="carousel-3" class="carousel-control next control-2">›</label>
          <label for="carousel-2" class="carousel-control prev control-3">‹</label>
          <label for="carousel-1" class="carousel-control next control-3">›</label>
          <ol class="carousel-indicators">
              <li>
                  <label for="carousel-1" class="carousel-bullet">•</label>
              </li>
              <li>
                  <label for="carousel-2" class="carousel-bullet">•</label>
              </li>
              <li>
                  <label for="carousel-3" class="carousel-bullet">•</label>
              </li>
          </ol>
      </div>
  </div>
        <div>
            <div class="contact-point">
                <span>Well Store</span>
                <h1 class="h1-edit">ini produk kami</h1>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                        <img src="img/sofapendek.jpg" alt="Sofa Pendek">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Sofa Pendek</h3>
                    <p>Price: Rp: 1.100.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/tempattidur.jpg" alt="Tempat Tidur">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Tempat Tidur</h3>
                    <p>Price: Rp: 3.400.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(2)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/raktv.jpg" alt="Rak Tv">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Rak TV</h3>
                    <p>Price: Rp: 2.500.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(3)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/mejapersegi.jpg" alt="Meja Persegi Putih">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Meja Persegi Putih</h3>
                    <p>Price: Rp: 800.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(4)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/mejapersegi1.jpg" alt="Meja Persegi Hitam">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Meja Persegi Hitam</h3>
                    <p>Price: Rp: 800.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(5)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/dapurset.jpg" alt="Dapur Set">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Dapur Set</h3>
                    <p>Price: Rp: 7.000.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(6)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/mejamakan.jpg" alt="Meja Makan">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Meja Makan</h3>
                    <p>Price: Rp: 5.200.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(7)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <a href="cart.php">
                    <img src="img/lemaripakaian.jpg" alt="Lemari Kecil">
                  </a>
                </div>
                <div class="product-details">
                    <h3>Lemari Kecil</h3>
                    <p>Price: Rp: 1.400.000</p>
                    <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(8)){
                             echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                                    
                </div>
            </div>

            <footer>
                <p>&copy; 2023 Well Website. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
