<?php

unset($_SESSION['stu_email']);
$message = '';
if (isset($_SESSION['name_alert'])) {
  $message = 'Incorrect Email and Password !!';
}
?> 
<?php 
session_start();
    if (isset($_SESSION['fname'])) {
        $name_error = $_SESSION['fname'];
        unset($_SESSION['fname']);
      }
    if (isset($_SESSION['email'])){
        $email_error = $_SESSION['email'];
        unset($_SESSION['email']);
    }
    if (isset($_SESSION['phone'])) {
        $phone_error = $_SESSION['phone'];
        unset($_SESSION['phone']);
    }
    if (isset($_SESSION['pass'])) {
        $pass_error = $_SESSION['pass'];
        unset($_SESSION['pass']);
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="user_login.css">
</head>
<body>
    <img src="image/user_regis.jpg" style="margin-top: 10rem;">

    <div style="margin-top: -43rem;"><img src="image/logo1.png" style="margin-left: 0rem; width: 10rem"></div>
    <div style="margin-top: -9rem;"><img src="image/user_top.png" style="margin-left: 83.5rem; width: 9.4rem"></div>
    <div style="margin-top: -8rem;"><img src="image/Travel_bug4.jpg" style="margin-left: 38rem; width: 17rem"></div>

    <div style="margin-left: 67rem; margin-top: 2rem; font-size: 2.5rem; color: rgb(122, 45, 129)">Hey! User</div><br><br>

    <div style="margin-top: 0rem; margin-left: 65rem " class="container">
        <div style="margin-left: 8.5rem;">
            <div style="margin-left: -9.8rem; border: none;">
                <input type="submit" class="admin-btn" id="admin-btn" value="Registration"
                    style="border-radius: 2rem; border-top-right-radius: 0; border-bottom-right-radius: 0; background-color: #82acff; color: white;">
            </div>
            <div style="margin-right: -8rem; margin-top: -2rem; border: none;">
                <input type="submit" class="user-btn" id="user-btn" value="Login"
                    style="border-radius: 2rem ; border-top-left-radius: 0; border-bottom-left-radius: 0; background-color: #82acff; color: white">
            </div>
        </div>
        <br><br>

        <!-- Registration -->
        <form action="user_login2.php" method="POST">
            <div id="registration">
                <input type="text" placeholder="enter your name" name="fname"
                    style="width: 18rem; font-size: 1.2rem; border-radius: 2rem; border: 2px solid black; text-align: center; height: 2rem; font-size: 0.9rem"
                    required>
                    <div class = "errors">
                    <small> <?php 
                            if(isset($name_error)){
                                echo "<div style='font-size: 15px; margin-right: 100px; color: red; position: fixed'>".$name_error."</div>"; 
                                    }  ?> 
                    </small>
             </div> 
                <br><br>
                <input type="text" placeholder="enter your phone" name="phone"
                    style="width: 18rem; font-size: 1.2rem; border-radius: 2rem; border: 2px solid black; text-align: center; height: 2rem; font-size: 0.9rem"
                    required>
                    <div class = "errors">
                    <small> <?php 
                            if(isset($phone_error)){
                                echo "<div style='margin-left: 20px; color: red; font-size: 15px; margin-top: 0px; position:fixed'>".$phone_error. "</div>"; 
                                    }  ?> 
                    </small>
             </div> 
                <br> <br>
                <input type="email" placeholder="enter your email" name="email"
                    style="width: 18rem; font-size: 1.2rem; border-radius: 2rem; border: 2px solid black; text-align: center; height: 2rem; font-size: 0.9rem"
                    required>
                    <div class = "errors">
                    <small> <?php 
                            if(isset($email_error)){
                                echo "<div style='font-size: 15px; color: red; position: fixed'>".$email_error."</div>"; 
                                    }  ?> 
                    </small>
             </div> 
                <br> <br>
                <input type="password" placeholder="enter your password" name="pass"
                    style="width: 18rem; font-size: 1.2rem; border-radius: 2rem; border: 2px solid black; text-align: center; height: 2rem; font-size: 0.9rem"
                    required>
                <br> <br>
                <div style="margin-left: 3rem;">
                    <input type="radio" name="gender" value="M" style="margin-left: -2.5rem; font-size: 1.5rem; cursor: pointer"
                        required> Male
                    <input type="radio" name="gender" value="F" style="margin-left: 2rem; font-size: 1.5rem; cursor: pointer"
                        required> Female
                    <input type="radio" name="gender" value="O" style="margin-left: 2rem; font-size: 1.5rem; cursor: pointer"
                        required> Other
                </div><br>
                    <button style="width: 18.4rem; height: 2.2rem; cursor: pointer; background-color: rgb(32, 130, 199); color: white; border-color: white; border-radius: 5rem"
                   type = "submit" name="submit"> Submit </button>
            </div>
        </form>


        <!-- user login -->
        <form action="user_login3.php" method="POST">
            <div class="user" id="user" style="margin-left: -1.5rem; border-radius: 20px">
            <p style='color: black;
        font-size: 1rem;
        margin-left: 1rem;
        margin-top: 0.2rem; color: red;
        font-family: cursive;'><?php echo $message; ?></p>
                <input type="email" name = "email" placeholder="enter your email" class="email-input" required
                    style="border-radius: 2rem; border: 2px solid black; text-align: center; height: 2rem; font-size: 0.9rem"> <br> <br>
                <input type="password" name = "password" placeholder="enter your password" class="pass-input" required
                    style="border-radius: 2rem; border: 2px solid black; text-align: center; height: 2rem; font-size: 0.9rem"> <br><br> <br>
                <button class="submit" type = "submit" name = "submit2" style="border-radius: 5rem; height: 2.2rem;">Submit</button>
            </div> <br>
        </form>
    </div>
















    
    <?php 
            if (isset($_SESSION["not_login"])) {
                echo "<div style='margin-left: 70rem; color: red; font-size: 1.2rem'>".$_SESSION["not_login"]."</div>";
            }

            unset($_SESSION["not_login"]);
    ?>
    <script src="user_login.js"></script>
</body>
</html>
