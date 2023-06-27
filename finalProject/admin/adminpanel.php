<?php 
session_start();   
require_once('../db_config/connect.php');
$query1="select * from recipe where category='Breakfast'";
$result1=mysqli_query($con,$query1);
$query2="select * from recipe where category='Appetizers&Snacks'";
$result2=mysqli_query($con,$query2);
$query3="select * from recipe where category='Main Dishes'";
$result3=mysqli_query($con,$query3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/homeSheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #F5DEB3E0;">
<?php require "header.php";?>
<br><br><br>
<center><h1 style="color:#736454">Welcome to Admin Panel</h1></center>
<br>
<div class="container m-3" style="font-size:20px;">
  <h2>Recipes</h2>
  <p>Add & Delete Recipes.</p>            

  <div class="container m-3" style="font-size:20px;">
  <h2>-> Add Recipes<hr><br></h2>
  <table style="background-color:white;width:400px;border:2px solid #ae9070;margin:10px;" class="table table-hover">
<form method="post" action="add_recipe.php" enctype="multipart/form-data" >
  <td><label for="category">Category : </label></td>
  <td><select  name="categories">
      <option>Breakfast</option>
      <option>Appetizers&Snacks</option>
      <option>Main Dishes</option>
    </select></td>
 </tr>
 <tr>
  <td><label for="name">Name: </label></td>
  <td><input type="text" name="name"></td>
 </tr>
 <tr>
  <td><label for="ing">Ingredients: </label></td>
  <td><input type="text" name="ing"></td>
 </tr>
 <tr>
  <td><label for="time">Time: </label></td>
  <td><input type="text" name="time"></td>
 </tr>
 <tr>
  <td><label for="images">Image: </label></td>
  <td><input type="file" name="images"></td>
 </tr>
<tr>
  <td colspan="2"><center><input type=submit name="add" style="margin-left:300px;"></center></td>
</tr>
</form>
  </table><br>
  </div>
  <h2>-> Breakfast<hr></h2>
  <table class="table table-bordered" style="border: 1px solid #736454;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result1)){
      ?>
      <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['ingredients'];?></td>
        <td><?php echo $row['time'];?></td>
        <td>
          <form action="delete_recipe.php" method="POST" onsubmit="return confirm('Do you want to delete this recipe?');"> 
          <input type="hidden" name="recipe_id" value=<?php echo $row['recipe_id'] ?>>
            <button type="submit" class="btn btn-outline-danger" style="font-size: 16px;" >Delete</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>
  <h2>-> Appetizers&Snacks<hr></h2>
  <table class="table table-bordered" style="border: 1px solid #736454;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result2)){
      ?>
      <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['ingredients'];?></td>
        <td><?php echo $row['time'];?></td>
        <td>
          <form action="delete_recipe.php" method="POST" onsubmit="return confirm('Do you want to delete this recipe?');"> 
          <input type="hidden" name="recipe_id" value=<?php echo $row['recipe_id'] ?>>
            <button type="submit" class="btn btn-outline-danger" style="font-size: 16px;" >Delete</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>
  <h2>-> Main Dishes<hr></h2>
  <table class="table table-bordered" style="border: 1px solid #736454;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result3)){
      ?>
      <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['ingredients'];?></td>
        <td><?php echo $row['time'];?></td>
        <td>
          <form action="delete_recipe.php" method="POST" onsubmit="return confirm('Do you want to delete this recipe?');"> 
          <input type="hidden" name="recipe_id" value=<?php echo $row['recipe_id'] ?>>
            <button type="submit" class="btn btn-outline-danger" style="font-size: 16px;" >Delete</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>
</div>

</body>
</html>