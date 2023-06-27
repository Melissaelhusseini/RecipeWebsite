<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/homeSheet.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/reviews.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body style="background-color: #F5DEB3E0;">
  <?php require "../header.php";?>
  <br>

  <center><br><br>
    
    <br><br>
  <div class="wrapper">
  <h1>Enter your review:</h1>
      <br>
      <form method="post" action="add_review.php" enctype="multipart/form-data">
      <label for="category" style="font-size: 15px;">Category : </label></td>
      <select  name="categories">
      <option>Breakfast</option>
      <option>Appetizers&Snacks</option>
      <option>Main Dishes</option>
      </select><br><br>
			<textarea name="comment" cols="30" rows="5" placeholder="Your review..."></textarea>
      
			<div class="btn-group">
				<button type="submit" class="btn submit">Submit</button>
				<button class="btn cancel">Cancel</button>
			</div>
		</form>
	</div>
  </center>
<br><br><br>



<!-- custom js -->
<script src="../js/jscript.js"></script>

</body>
</html>