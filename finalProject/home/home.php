<?php 
session_start();   
require_once('../db_config/connect.php');
$query="select * from reviews";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/homeSheet.css">

</head>
<body style="background-color: #F5DEB3E0;">


        <?php require "../header.php"?>

        <div id="menu-btn" class="fas fa-bars"></div>

<!-- header -->
    <!-- home section -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(../images/cookie.png) no-repeat 500px 10px wheat;">
                    <div class="content">
                        <h3>Want to try your hand at baking?</h3>
                        <a href="#about" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(../images/cereal.png) no-repeat 400px 10px wheat;">
                    <div class="content">
                        <h3>Looking for a quick and easy dinner recipe?</h3>
                        <a href="#about" class="btn">get started</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(../images/chicken.png) no-repeat 500px 10px wheat;">
                    <div class="content">
                        <h3>Need a recipe that's budgjet-friendly and delicious?</h3>
                        <a href="#about" class="btn">get started</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>


        </div>

    </section>
    <hr style="border: 2px solid white;">

    <!-- home section -->

    <!-- about us -->

    <section class="about" id="about">

        <h1 class="heading">about us</h1>

        <div class="row">

            <div class="image">
                <img src="../images/aboutus.png" alt="">
            </div>
    
            <div class="content">
                <h3>CookWithUs recipes for you</h3>
                <p>At CookWithUs, we are your culinary guide, offering a diverse collection of recipes, practical cooking advice, and a vibrant community. Join us on a flavorful journey, where we celebrate the joy of cooking, connect food enthusiasts, and inspire delicious creations for every taste and occasion. Together, let's explore, savor, and create unforgettable culinary experiences.</p>
                <p>Our passion for food goes beyond just recipes. We believe that food has the power to bring people together, to create lasting memories, and to celebrate diverse cultures and traditions. Through our blog posts, articles, and food-related resources, we aim to foster a community where food lovers can connect, exchange ideas, and share their culinary experiences.</p>
            </div>

        </div>

    </section>

    <!-- about us -->

    


    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h1 class="heading">Our Best Recipes</h1>

        <div class="gallery-container">

            <a href="../images/gallery1.jpg" class="box">
                <img src="../images/gallery1.jpg" alt=""  style="border:2px solid #736454">
                <div class="icon"> <i class="fas fa-plus"></i> </div>
            </a>

            <a href="../images/gallery7.jpg" class="box">
                <img src="../images/gallery7.jpg" alt="" style="border:2px solid #736454">
                <div class="icon"> <i class="fas fa-plus"></i> </div>
            </a>

            <a href="../images/gallery3.jpg" class="box">
                <img src="../images/gallery3.jpg" alt="" style="border:2px solid #736454">
                <div class="icon"> <i class="fas fa-plus"></i> </div>
            </a>

            <a href="../images/gallery4.jpg" class="box">
                <img src="../images/gallery4.jpg" alt="" style="border:2px solid #736454">
                <div class="icon"> <i class="fas fa-plus"></i> </div>
            </a>

          

        </div>

    </section>
    <!-- gallery -->

    <!-- reviews -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> reviews </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">
                <?php
      while($row=mysqli_fetch_assoc($result)){
      ?>
      <div class="swiper-slide slide">
                    <p><?php echo $row['comment'];?></p>
                    <h2><?php echo $row['category'];?></h2>
                </div>
      <?php } ?>
                
            </div>

            <div class="swiper-pagination"></div>
        </div>

    </section>


    <!-- reviews -->


    <!-- footer -->

    <?php require "../footer.php";?>







    <!-- footer -->




    
    
    
    
    <!-- swiper -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    
    <!-- custom js -->
    <script src="../css/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>
</html>    