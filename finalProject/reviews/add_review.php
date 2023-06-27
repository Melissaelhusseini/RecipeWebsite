<?php
include('../db_config/connect.php');
    $category=$_POST['categories'];
    $comment=$_POST['comment'];

    $query="INSERT INTO reviews(category,comment) VALUES('$category','$comment')";
    mysqli_query($con,$query);
    header('location:../home/home.php');
?>