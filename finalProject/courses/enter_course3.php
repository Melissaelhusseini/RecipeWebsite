<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register course</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/homeSheet.css">
    <link rel="stylesheet" href="../css/card.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color: #F5DEB3E0; margin:90px;">
<center><h2 style="font-size:30px;">Food And Culture</h2></center><br>
<div class="container-fluid p-5" style="font-size:15px; border: 1px solid">
<h3>Course Title:</h3>Food and Culture <br><br>
<h3>Course Price:</h3> 35$
<br><br>
<h3>Course description</h3>
Discover the fascinating interplay between food and culture in this immersive course. Delve into the rich tapestry of culinary traditions from around the world and explore how food shapes and reflects cultural identities, values, and practices.

Throughout this course, you will embark on a sensory journey, exploring the historical, social, and symbolic dimensions of food within different cultures. From traditional cuisines to modern food trends, you will examine the ways in which food connects people, communities, and societies.
<br><br>
<h3>Key topics covered in this course include:</h3>

1. Culinary traditions and their cultural significance:<br> Uncover the origins and rituals surrounding various cuisines, understanding how they have evolved over time and influenced cultural practices.<br>

2. Food as a cultural marker:<br> Investigate how food acts as a symbol of identity, ethnicity, and social status, reflecting the values and beliefs of different communities.<br>

3. Food and rituals:<br> Examine the role of food in religious, ceremonial, and celebratory practices, exploring the symbolic meanings behind specific dishes and culinary rituals.<br>

4. Globalization and food culture:<br> Explore the impact of globalization on food production, distribution, and consumption, and its influence on local and regional food traditions.<br>

5. Food as a cultural exchange:<br> Discover how food can act as a bridge between cultures, fostering understanding and appreciation through culinary fusion, adaptation, and sharing.<br>
<br>
<b>By the end of this course, you will have a deeper understanding of the intricate relationship between food and culture, enabling you to appreciate and engage with diverse culinary traditions in a more informed and culturally sensitive manner.

Join us on this captivating exploration of food and culture, where every bite reveals a story!</b>
<br>
<br>
<div class="container m-5 p-4" style="background-color:white;border:1px solid #736454;width:1050px;font-size:20px;">
 
  <form action="add_course.php" method="post" class="was-validated" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
    <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
      <label for="uname" class="form-label">Name</label>
      <input type="text" class="form-control" placeholder="Enter username" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      
      <label for="cname" class="form-label">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" class="form-control" required>
            <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
            <label for="ccnum" class="form-label">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" class="form-control" required>
            <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div><br>
      <select  name="course">
      <option>Food And Culture course</option>
    </select></div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</div>

  




</body>
</html>