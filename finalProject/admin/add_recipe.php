<?php
include('../db_config/connect.php');
    $category=$_POST['categories'];
    $name=$_POST['name'];
    $ingredients=$_POST['ing'];
    $time=$_POST['time'];
    $images= $_FILES['images']['name'];
    $date=date('Y-m-d H:i:s');

    $query="INSERT INTO recipe(category,name,ingredients,time,images,date) VALUES('$category','$name','$ingredients','$time','$images','$date')";
    mysqli_query($con,$query);  
    header('location: adminpanel.php');
?>