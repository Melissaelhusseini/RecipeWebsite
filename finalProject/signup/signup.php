<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../css/signupSheet.css">
  <title>SignUp</title>
</head>
<body style="background-color: #F5DEB3E0;"> 
   
    <section>
        <div class="form-box" style="background-color: #ae9070;"><!--#CFBB96-->
            <div class="form-value">
                <form method="post" action="signup_action.php" enctype="multipart/form-data">
                    <h2>SignUp</h2>
                    <div class="inputbox">
                        <ion-icon name='accessibility-outline'></ion-icon>
                        <input type="text" name="nameInput" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="emailInput"  required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="pswInput" required>
                        <label for="psw">Password</label>
                    </div>
                    <button style="color:#736454">Submit</button>
                    
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
  
</body>

</html>