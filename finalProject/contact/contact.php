<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="../css/contactSheet.css">
    <link rel="stylesheet" type="text/css" href="../css/homeSheet.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body style="background-color:#F5DEB3E0;">
    <?php require "../header.php" ?>
	<div class="container" >
		<div class="contact-box" style="font-size:30px;">
			<div class="left"><img src="../images/gallery2.jpg" style="margin-top:7px; width:400px; height:500px;"></div>
			<div class="right">
				<h2 style="color:#736454">Contact Us</h2>
                <form method="post" action="contact_action.php" enctype="multipart/form-data">
				<input name="email" type="text" class="field" placeholder="Your Email" style="font-size:18px;">
				<input name="phone" type="text" class="field" placeholder="Phone" style="font-size:18px;">
				<textarea name="message" placeholder="Message" class="field" style="font-size:18px;"></textarea>
				<button class="btn">Send</button>
                </form>
			</div>
		</div>
	</div>
    <?php require "../footer.php";?>
</body>
</html>