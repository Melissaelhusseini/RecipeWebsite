<!DOCTYPE html>
<html lang="en">
<head>
    <title>LogIn</title>
    <link rel="stylesheet" href="../css/loginSheet.css">
    <link rel="stylesheet" href="../css/homeSheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="background-color: #F5DEB3E0;">
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo" style="color:#736454"><i class='bx bxl-xing'></i>CookWithUs</h2>
            <div class="text-item">
                <h2 style="color:#736454">Welcome <br><span>
                    To CookWithUs
                </span></h2>
                <p style="color:#736454">Your one-stop destination for mouthwatering recipes and culinary inspiration.<br>Join us and embark on a flavorful journey that will delight your taste buds and ignite your passion for cooking.</p>
                <div class="social-icon" >
                    <a href="https://www.facebook.com/"><i class='bx bxl-facebook' style="color:#736454"></i></a>
                    <a href="https://www.twitter.com/"><i class='bx bxl-twitter' style="color:#736454"></i></a>
                    <a href="https://www.youtube.com/"><i class='bx bxl-youtube' style="color:#736454"></i></a>
                    <a href="https://www.instagram.com/"><i class='bx bxl-instagram' style="color:#736454"></i></a>
                    <a href="https://www.linkedin.com/"><i class='bx bxl-linkedin' style="color:#736454"></i></a>
                </div>
            </div>
</div>
        <?php
        if(isset($_GET['flag'])){
            if($_GET['flag']==1)
            echo"<b>email or pass is wrong!!</b>";
        } ?>
        <div class="login-section">
            <div class="form-box login" style="background-color:#ae9070;">
                <form method=post action="login_action.php" style="color:white;">
                    <h2>LogIn</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="pswd" required>
                        <label for="psw">Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button class="btn" style="background-color:#736454;color:white">LogIn</button>
                    <div class="create-account">
                        <p>Create A New Account? <a href="../signup/signup.php" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            
            </div>
        </div>
    </div>
    <?php require "../footer.php";?>

    
</body>

</html>