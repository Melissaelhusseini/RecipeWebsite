<?php 
session_start();   
require_once('../db_config/connect.php');

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
<center><h1>Registred Courses</h1></center>
<br>
<div class="container m-4" style="font-size:20px;">
<table class="table table-bordered" style="border: 1px solid #736454;">
    <thead>
      <tr>
        <th>Course</th>
        <th>Name</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $query="select * from courses";
    $result=mysqli_query($con,$query);
      while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['course'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['status']; ?></td>
        <td>
		<form action="reg_courses.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
        <input type="submit" class="btn btn-outline-success" style="font-size: 16px;" name="approve" value="approve"><br>
        <input type="submit" class="btn btn-outline-danger" style="font-size: 16px;" name="delete" value="delete">
		</form>
   </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php 
if(isset($_POST['approve'])){

	$id = $_POST['id'];
	$select = "UPDATE courses SET status = 'approved' WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
	header("location:reg_courses.php");
}


if(isset($_POST['delete'])){

	$id = $_POST['id'];
	$select = "DELETE  FROM courses  WHERE id = '$id' ";
	$resut = mysqli_query($con,$select);
	header("location:reg_courses.php");
}

 ?>

</div>


</body>
</html>