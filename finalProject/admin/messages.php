<?php 
session_start();   
require_once('../db_config/connect.php');
$query="select * from contact";
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
<br>
<center><h1>Messages</h1></center>
<br>

<div class="container m-3" style="font-size:20px;">
<table class="table table-bordered" style="border: 1px solid #736454;">
    <thead>
      <tr>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Date</th>
        <th>Reply</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['message'];?></td>
        <td><?php echo $row['date'];?></td>
        <td><a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=1&msaredir=1&client-request-id=3d747770-3ccc-190e-3c28-939bf2f9a932&protectedtoken=true&claims=%7b%22id_token%22%3a%7b%22xms_cc%22%3a%7b%22values%22%3a%5b%22CP1%22%5d%7d%7d%7d&nonce=638234042662723898.6f1da6f3-a26f-4de8-a9bc-f27ed7fa71aa&state=Dcu9DoIwFEDhou_iVim3eNsOxEFjGHBBEw3b7V8ikWCAYHx7O3xnOxljbJtskkykMIVSgyxFCYigQGqj9xgLTxglJ8DISx80J2Mdj6CCV5FUQZSl95yPX8qP80JLqIrdFPxrCm65jxXVrXD1FZufWf2znS2YqRnM0A3vvrsdegtitY_Lx570Hw&sso_reload=true" target="_blank"><button type="submit" class="btn btn-outline-success" style="font-size: 16px;" >reply</button></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
</div>
</body>
</html>