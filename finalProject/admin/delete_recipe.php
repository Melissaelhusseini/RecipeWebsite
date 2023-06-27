<?php
include('../db_config/connect.php');
    $id = $_POST['recipe_id'];
    $query="DELETE FROM recipe where recipe_id = '$id'" ;
    if(mysqli_query($con,$query)){
    header('location: adminpanel.php');
    exit;}
    else{
    echo"Error deleting record: ".mysqli_error($con);
    }

?>