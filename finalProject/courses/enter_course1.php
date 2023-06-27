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
<center><h2 style="font-size:30px;">Essential Culinary Techniques</h2></center><br>
<div class="container-fluid p-5" style="font-size:15px; border: 1px solid">
<h3>Course Title:</h3> Essential Culinary Techniques
<br><br>
<h3>Course Price:</h3> 40$
<br><br>
<h3>Course Description:</h3>
The Essential Culinary Techniques course is a compact and focused program designed to introduce participants to fundamental culinary skills. Whether you are a beginner cook or someone looking to enhance your kitchen abilities, this course will provide you with the essential techniques necessary to excel in the culinary world.
During this course, participants will explore key culinary techniques through interactive demonstrations and hands-on practice. The emphasis is on building a strong foundation in cooking skills, allowing participants to create delicious dishes with confidence.<br>
<br>
<h3>Course Outline:</h3>
1. Knife Skills:<br>
   - Proper knife selection and handling
   - Basic cutting techniques (slicing, dicing, chopping)
   - Knife safety and maintenance<br>

2. Cooking Methods:<br>
   - Introduction to dry-heat cooking methods (roasting, grilling, sautéing)
   - Basics of moist-heat cooking methods (braising, stewing, poaching)
   - Pan-frying and stir-frying techniques
<br>
3. Sauce Foundations:<br>
   - Introduction to classic sauces (béchamel, velouté, tomato)
   - Basic sauce preparation and thickening techniques
   - Flavor enhancement and seasoning
   <br>
4. Stocks and Soups:<br>
   - Preparation of basic stocks (vegetable, chicken, beef)
   - Techniques for making clear and flavorful soups
   - Soup garnishes and finishing touches
   <br>
5. Baking Essentials:<br>
   - Introduction to baking ingredients and their functions
   - Basics of measuring and scaling ingredients
   - Key baking techniques (mixing, folding, creaming)
   <br>
6. Food Presentation:<br>
   - Plating techniques for aesthetically pleasing dishes
   - Garnishing and decoration ideas
   - Tips for creating visually appealing meals<br><br>

<b>Throughout the course, participants will have the opportunity to practice the techniques taught and receive feedback from experienced instructors.
<br> By the end of the program, participants will have a solid understanding of essential culinary techniques and will be equipped with the skills to create delicious meals with finesse.</b>
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
      <option>Culinary Techniques course</option>
    </select></div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

  




</body>
</html>