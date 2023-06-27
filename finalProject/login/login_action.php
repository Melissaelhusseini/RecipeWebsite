
<?php

include('../db_config/connect.php');

session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["pswd"];


	$query="select * from users where email='$_POST[email]' and password='$_POST[pswd]'";

	$result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["name"]=$name;

		header("location:../home/home.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["name"]=$name;
		
		header("location:../admin/adminpanel.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}
?>