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
<center><h2 style="font-size:30px;">Nutrition Information</h2></center><br>
<div class="container-fluid p-5" style="font-size:15px; border: 1px solid">
<h3>Course Title:</h3> Nutrition Information
<br><br>
<h3>Course Price:</h3> 50$
<br><br>
<h3>Course Description:</h3>

Unlock the secrets of optimal health and well-being through our comprehensive Nutrition Information course. Gain essential knowledge about the science and principles of nutrition, empowering yourself and others to make informed dietary choices.

In this course, you will delve into the fundamental aspects of nutrition, including macronutrients, micronutrients, digestion, metabolism, and the role of nutrition in supporting overall health. You will also explore the impact of nutrition on various aspects of human life, such as growth, development, performance, and disease prevention.
<br><br>
<h3>Key topics covered in this course include:</h3>

1. Basics of human nutrition: Understand the essential nutrients required by the body, including carbohydrates, proteins, fats, vitamins, and minerals, and their functions in maintaining optimal health.
<br>
2. Nutritional needs across the lifespan: Examine the unique nutritional requirements during different life stages, from infancy to older adulthood, and learn how to address specific dietary concerns and challenges.
<br>
3. Balanced and healthy eating: Discover the principles of a balanced diet and explore evidence-based strategies for planning and preparing nutritious meals that meet individual needs and dietary preferences.
<br>
4. Nutrition and disease prevention: Explore the connection between nutrition and various diseases, such as obesity, diabetes, cardiovascular disorders, and cancer, and learn how dietary choices can help reduce the risk of these conditions.
<br>
5. Diet and weight management: Gain insights into the factors influencing body weight, metabolism, and energy balance, and acquire practical tools for achieving and maintaining a healthy body weight.
<br>
6. Nutrition myths and controversies: Critically evaluate popular nutrition trends, fad diets, and misinformation, and learn how to differentiate between evidence-based recommendations and unsupported claims.
<br><br>
<b>By the end of this course, you will have a solid foundation in nutrition science, enabling you to make informed decisions about your own diet and lifestyle while also being equipped to provide basic nutrition guidance to others.

Take a step towards a healthier future by enrolling in our Nutrition Information course and embark on a journey towards optimal nutrition and well-being.</b>
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
      <option>Nutrition Information course</option>
    </select></div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</div>

  




</body>
</html>