<?php 
session_start();   
require_once('../db_config/connect.php');
$query="select * from reviews";
$result=mysqli_query($con,$query);
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
<br><br>
<center><h1>All reviews</h1></center>
<br>

<div class="container m-4" style="font-size:20px;">
<table class="table table-bordered" style="border: 1px solid #736454;">
    <thead>
      <tr>
        <th>Category</th>
        <th>Comment</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['category'];?></td>
        <td><?php echo $row['comment'];?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
</div>
</body>
</html>