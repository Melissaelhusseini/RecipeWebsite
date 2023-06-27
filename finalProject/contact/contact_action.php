<?php
include('../db_config/connect.php');
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $date=date('Y-m-d H:i:s');

    $query="INSERT INTO contact(email,phone,message,date) VALUES('$email','$phone','$message','$date')";
    mysqli_query($con,$query);
    header('location:contact.php');
?>