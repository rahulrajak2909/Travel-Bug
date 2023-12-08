<?php 
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $db = 'tour';

     $conn = mysqli_connect($dbhost, $dbuser, '', $db); 


     session_start();
     if (isset($_POST['submit'])) 
 {
    $username = $_POST['email'];
    $enterpassword = $_POST['password'];
 
    $q1 = "SELECT * FROM admin WHERE email = '$username' AND password = '$enterpassword' ";
 
    
    $result1 = mysqli_query($conn, $q1);
    $p1 = mysqli_num_rows($result1);
 
    
 
 
    if(!empty($p1)){
       header('Location: admin_main.php');
 
    } else {
     $error = "No admin is found!";
     $_SESSION["not_admin"] = $error;
     header('Location: admin_login.php');
 
 }
 }
?>