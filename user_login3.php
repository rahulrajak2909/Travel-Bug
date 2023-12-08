<?php
session_start();
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'tour';

        $conn = mysqli_connect($dbhost, $dbuser, '', $db); 

 
    if (isset($_POST['submit2'])) 
{
   $username = $_POST['email'];
   $enterpassword = $_POST['password'];
  

   $q1 = "SELECT * FROM user_record WHERE email = '$username' AND pass = '$enterpassword' ";

   
   $result1 = mysqli_query($conn, $q1);
   $p1 = mysqli_num_rows($result1);

   


   if(!empty($p1)){
      $_SESSION['user_email'] = $_POST['email'];
      header('Location: user_main.php');

   } else {
    $error = "*No user is found!";
    $_SESSION["not_login"] = $error;
    header('Location: user_login.php');

}
}
?>