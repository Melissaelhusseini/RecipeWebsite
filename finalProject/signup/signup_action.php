<?php
include('../db_config/connect.php');
function PasswordCheck($password_string)
{
    $password_string=trim($password_string);
    if($password_string == '')
    {
        die("Password not entered");
    }
    elseif(strlen($password_string)<8)
    {
        die("Password must be more than 8 characters in length");
    }
    elseif(!(preg_match('#[0-9]#',$password_string)))
    {
        die("Password must contain at least one number");
    }
    else{
        //Success, now proceed password
    }
}
    $name=$_POST['nameInput'];
    $email=$_POST['emailInput'];
    $password=$_POST['pswInput'];
    $image=$_FILES['image']['name'];
    $date=date('Y-m-d H:i:s');
    PasswordCheck($password);

    $query="INSERT INTO users(name,email,password,image,date) VALUES('$name','$email','$password','$image','$date')";
    mysqli_query($con,$query);
    header('location:../login/login.php');
?>