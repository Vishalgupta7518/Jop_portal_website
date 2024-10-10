<?php
include('admin/db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant "CurryOn"</title>
    <!-- Sass-Compile Code -->
    <link rel="stylesheet" href="css/main.css"/>
    <!-- Icons Library CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <!-- Font Library CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Josefin+Sans:300,400,600,700|Nunito:300,400,600,700">
</head>
<body>
    <!-- Navbar -->
        
    <nav class="navbar">
        <input type="checkbox" id="check" class="checkbox" hidden/>
        
        <div class="hamburger-menu">
           <label for="check" class="menu">
                <dev class="menu-line menu-line-1"></dev> 
                <dev class="menu-line menu-line-2"></dev>
                <dev class="menu-line menu-line-3"></dev>
           </label> 
        </div>
        
        <dev class="navbar-navigation">
            <div class="navbar-navigation-left">
                <img src="images/food-5.jpeg" class="left-img left-img-1"/>
                <img src="images/food-2.jpg" class="left-img left-img-2"/>
                <img src="images/food-3.jpg" class="left-img left-img-3"/>
            </div>
            <dev class="navbar-navigation-right">
                <ul class="nav-list">
                    <li class="nav-list-item">
                        <a href="#" class="nav-list-link">Home</a>
                    </li>
                    
                    <li class="nav-list-item">
                        <a href="#" class="nav-list-link">About</a>
                    </li>
                    
                    <li class="nav-list-item">
                        <a href="#" class="nav-list-link">Gallery</a>
                    </li>
                    
                    <li class="nav-list-item">
                        <a href="#" class="nav-list-link">Reservation</a>
                    </li>
                    
                    <li class="nav-list-item">
                        <a href="#" class="nav-list-link">Services</a>
                    </li>
                    
                    <li class="nav-list-item">
                        <a href="#" class="nav-list-link">Contact</a>
                    </li>
                    <li class="nav-list-item">
                        <a href="admin/loginpage.php" class="nav-list-link">Admin</a>
                    </li>
                </ul>
                
            </dev>
            
        </dev>
    </nav>
    
    <!-- Navbar Ends -->
    
    <!-- Headder -->
    
    <header class="header">
        <?php
        $res = $mysqli->query("SELECT *FROM banner");
        if($res->num_rows>0){
            $row = $res->fetch_assoc();
        
        ?>
        <div class="brand">
            <a href="#" class="logo">
                <i class="<?php echo $row['img_name'] ?>"></i>
                <!-- <i class="fas fa-utensils"></i> -->
            </a>

            <div>
                <h1 class="main-name"><?php echo $row['brand_name'] ?></h1>
                <p class="sub-name"><?php echo $row['brand_title'] ?></p>
               
            </div>
            
            
        </div>
        
        <div class="header-banner">
            <h1 class="main-heading"><?php echo $row['brand_head'] ?></h1>
            <h3 class="sub-heading"><?php echo $row['brand_msg'] ?></h3>
             <button type="button" class="main-btn">Reservation</button>
            
      </div>
        <?php
        }
        ?>
        
    </header>
    <!-- Headder Ends -->
    

    <!-- About Us -->
    
    <section class="about-us">
        <?php
            $res1 = $mysqli->query("SELECT * FROM about_us");
            if($res1->num_rows>0){
            $row1 = $res1->fetch_assoc();
          
        ?>
        <div class="about-us-left">
            <img src="./images/<?php echo $row1['about_img'] ?>"/>
        
        </div>
        
        <div class="about-us-right">
            <h1 class="main-heading">About Us</h1>
            <h3 class="sub-heading"><?php echo $row1['about_heading'] ?> </h3>
            <div class="stars">
                <i class="fas fa-star-of-life star"></i>
                <i class="fas fa-star-of-life star"></i>
                <i class="fas fa-star-of-life star"></i>
                
            </div>
            <p class="description">
            <?php echo $row1['about_msg'] ;?>
            </p>
            <div class="stars">
                <i class="fas fa-star-of-life star"></i>
                <i class="fas fa-star-of-life star"></i>
                <i class="fas fa-star-of-life star"></i>
                
            </div>
            <button type="button" class="main-btn">Read More</button>
        
        </div>
            <?php
            }
            ?>
    </section>

    <!-- About Us Ends -->

    <!-- Gallery -->
    
    <section class="gallery">
        
        <div class="cards-wrapper">
            <?php
                $res2 = $mysqli->query("SELECT *FROM gallery");
                if($res2->num_rows>0){
                    while($row2 = $res2->fetch_assoc()){
                
            ?>
            
            <div class="card">
                <div class="card-overlay">
                    <h1 class="card-overlay-heading"><?php echo $row2['food_name'] ?></h1>
                    <p class="card-overlay-paragraph">Price: $<?php echo $row2['price'] ?></p>
                    <button type="button" class="card-overlay-btn">Order Now</button>
                </div>
                <img src="images/<?php echo $row2['food_img'] ?>" class="card-img"/>
            
            </div>
            <?php
              }
            }
            ?>
            
             <!-- <div class="card">
                <div class="card-overlay">
                    <h1 class="card-overlay-heading">Food Name</h1>
                    <p class="card-overlay-paragraph">Price: $30.00</p>
                    <button type="button" class="card-overlay-btn">Order Now</button>
                </div>
                <img src="images/food-2.jpg" class="card-img"/>
            
            </div> -->
            
             <!-- <div class="card">
                <div class="card-overlay">
                    <h1 class="card-overlay-heading">Food Name</h1>
                    <p class="card-overlay-paragraph">Price: $30.00</p>
                    <button type="button" class="card-overlay-btn">Order Now</button>
                </div>
                <img src="images/IMG-20240103-WA0005.jpg" class="card-img"/>
            
            </div> -->
            
             <!-- <div class="card">
                <div class="card-overlay">
                    <h1 class="card-overlay-heading">Food Name</h1>
                    <p class="card-overlay-paragraph">Price: $30.00</p>
                    <button type="button" class="card-overlay-btn">Order Now</button>
                </div>
                <img src="images/IMG-20240103-WA0004.jpg" class="card-img"/>
            
            </div> -->
            
             <!-- <div class="card">
                <div class="card-overlay">
                    <h1 class="card-overlay-heading">Food Name</h1>
                    <p class="card-overlay-paragraph">Price: $30.00</p>
                    <button type="button" class="card-overlay-btn">Order Now</button>
                </div>
                <img src="images/IMG-20240103-WA0012.jpg" class="card-img"/>
            
            </div> -->
            
             <!-- <div class="card">
                <div class="card-overlay">
                    <h1 class="card-overlay-heading">Food Name</h1>
                    <p class="card-overlay-paragraph">Price: $30.00</p>
                    <button type="button" class="card-overlay-btn">Order Now</button>
                </div>
                <img src="images/IMG-20240103-WA0009.jpg" class="card-img"/>
            
            </div> -->
        
        </div>
    
    
    </section>

    <!-- Gallery Ends -->

    <!-- Footer -->
    
    <footer class="footer">
        <?php
            $res3 =$mysqli->query("SELECT * FROM footer");
            if($res3->num_rows>0){
                $row3 = $res3->fetch_assoc();
        ?>
        <div class="footer-header">
            <a herf="#" class="logo"><i class="<?php echo $row3['brand_img'] ?>"></i></a>
            <div>
               <h1 class="main-name"><?php echo $row3['brand_name'] ?></h1>
               <p class="sub-name"><?php echo $row3['brand_title'] ?></p>
            </div>
        </div>
        
        <div class="footer-social-media">
            <ul class="socail-media">
                
                <li class="social-media-icon">
                    <a href="http://<?php echo $row3['facebook_url'] ?>" class="social-media-link">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                
                <li class="social-media-icon">
                    <a href="http://<?php echo $row3['google_url'] ?>" class="social-media-link">
                        <i class="fab fa-google-plus-square"></i>
                    </a>
                </li>
                
                <li class="social-media-icon">
                    <a href="http://<?php echo $row3['insta_url'] ?>" class="social-media-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                
                <li class="social-media-icon">
                    <a href="http://<?php echo $row3['youtube_url'] ?>" class="social-media-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                
                
            </ul>
        
        </div>
        <?php
        }
        ?>
        <div class="footer-copyright">
            <p class="footer-copyright-paragraph">
            &copy: Copyright.Restaurant "CurryOn". All Rights Reserved
            </p>
        </div>
    
    </footer>

    <!-- End of Footer -->
    
</body>
</html>
































































