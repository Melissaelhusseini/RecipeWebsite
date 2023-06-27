<?php
require_once('../db_config/connect.php');
$query="select * from recipe where category='Main Dishes'";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/homeSheet.css">
    <link rel="stylesheet" href="../css/card.css">

</head>
<body style="background-color: #F5DEB3E0;">
  <?php require "../header.php";?>
  
<ul>
  <li><a href="recipe1.php">Breakfast</a></li>
  <li><a href="recipe2.php">Appetizers&Snacks</a></li>
  <li><a class="active" href="recipe3.php">Main Dishes</a></li>
</ul>
  <br>

<h2 style="text-align:center;font-size:45px;padding:3px;margin-left:200px; color: #736454;">Main Dishes</h2>
<br>
<center>
<table style="margin-left:200px;">
<?php
      while($row=mysqli_fetch_assoc($result)){
      ?>
    <tr><td  style="padding: 10px;"><img src="../images/<?php echo $row['images'];?>" style="width:50%;height:260px "><div class="card" style="float:right;width:50%">
    <h1><?php echo $row['name'];?></h1>
    <p class="price"><?php echo $row['time'];?></p>
    <p style="font-size:20px">Ingredients:<br><?php echo $row['ingredients'];?></p><br><br>
    <p><button style="padding: 16px;"> <a href="../reviews/reviews.php">Add Review</a><br></button></p></div>
    </td><br>
    
</tr>
<?php } ?>
</table></center><br><br>
</body>
</html>