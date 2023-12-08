<?php
session_start();

$message = '';

if (isset($_SESSION['name_alert'])) {
    $message = 'Incorrect Email and Password !!';
}

if (isset($_POST['submit'])) {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'tour';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $aname = mysqli_real_escape_string($conn, $_POST['email']);
    $enteredpass = mysqli_real_escape_string($conn, $_POST['password']);

    $query1 = "SELECT * FROM admin WHERE email = '$aname' AND password = '$enteredpass' ";
    $result1 = mysqli_query($conn, $query1);

    if ($result1 && mysqli_num_rows($result1) > 0) {
        header('Location: admin_main.php');
        exit; // Stop execution after the redirection.
    } else {
        $_SESSION['name_alert'] = '1';
        header('Location: admin_login.php');
        exit; // Stop execution after the redirection.
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Login</title>
</head>

<body>
    <img src="image/admin_login.jpg"
        style=" width: 95.5rem; height: 46rem;  margin-left: 0rem;  margin-top: -2.59rem; margin-right: -0rem;">
    <div style="margin-top: -37rem; margin-left: 1rem"> <img src="image/logo1.png"
            style="margin-top: -42rem; width: 9rem"></div>
    <!-- <div style="margin-top: -37rem; margin-left: 6rem; font-size: 3.5rem; color: #c77700">WELCOME ADMIN</div> -->
    <div style="margin-top: -10rem;"><img src="image/ad-logo.webp"
            style="width: 50rem; margin-left: 45rem; margin-top: 17rem"></div>
    <div style="margin-left: 38rem; margin-top: -34rem"><img src="image/admin_logo.png"
            style="width: 18REM; margin-top: -90rem"></div>

<div style="margin-top: 0rem; margin-left: 4rem; font-size: 3.5rem; color: #c77700">WELCOME ADMIN</div>

<section style="display: flex; height: 55vh; align-items: center; justify-content: center; margin-left: -1000px; ">
    <div
        style=" display: flex; flex-direction: column; padding: 2rem 4rem 0rem 3rem; font-size: 1.3rem; border-radius: 15px; align-items: center;    margin-top: -90px; font-size: 2rem; margin-left: 0rem ">
        <div>
            <div>Hey! Admin
            
            </div>
        </div>
        <form action="#" method = "post" style="">
        <div style="margin-left: 5.5rem"><img src="image/admin-logo.avif" style="width: 5rem;"></div>
        <div>
            <input type="email" name = "email" placeholder="enter your email"
                style="width: 17rem; height: 2rem; border-radius: 20px; text-align: center;" required><br><br>
        </div>
        <div>
            <input type="password" name = "password" placeholder="enter your password"
                style="width: 17rem; height: 2rem; border-radius: 20px; text-align: center;" required> <br><br>
        </div>

        <div><input type="submit" name = "submit"
                style="width: 17rem ; height: 2rem; border-radius: 20px; font-size: 1.2rem; background-color: #0073e6; color: white; cursor: pointer; border: white">
        </div>
    </div>
   
    </form>

    
    <?php 
                // if(isset($_SESSION["not_admin"])) {
                //     echo "<div style='margin-left: 70rem; color: red; font-size: 1.2rem'>". $_SESSION["not_admin"]."</div>";
                // }
                
                // unset($_SESSION["not_admin"]);
        
        ?>
        
</section> 
<p style='color: red;
                        width: 19rem;
        font-size: 1.28rem;
        margin-left: 7rem;
        margin-top: -3rem;
        font-family: cursive;'><?php echo $message; ?></p>



<?php 
unset($_SESSION['name_alert']); 
?>
</body>

</html>







