
<?php 
include('../db_config/connect.php');
if (isset($_POST['submit']))  {

   $course = $_POST['course'];
   $name =   $_POST['name'];
   $date=date('Y-m-d H:i:s');

   $query = mysqli_query($con,"INSERT INTO courses(course,name,date,status)value('$course','$name','$date','pending')");

if($query>0){

echo "your request is  under process! ";
}
else
{
echo "something went wrong ! ";
}     

}
?>