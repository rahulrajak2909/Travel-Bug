<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'tour';

$conn = mysqli_connect($dbhost, $dbuser, '', $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

const Name_Required = '*Please enter your Full Name';
const Name_Invalid = '*Name should be alphabetic characters only';
const Email_Required = '*Please enter your correct Email';
const Email_Invalid = '*Your email is not correct';
const Phone_Required = '*Phone is not Valid';
const Phone_Invalid = '*Phone is not within limits.';
const Pass_Mismatch = '*Password is not matching';

require 'error.php';

session_start();

if (isset($_POST['submit'])) {
    // Your validation and data processing code here

    if (count($errors) === 0) {
        $fname = $_POST['fname'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $pwd = $_POST['pass'];
        $gnd = $_POST['gender'];

        $query = "INSERT INTO user_record (fname, phone, email, pass, gender) VALUES ('$fname', '$phone', '$email', '$pwd', '$gnd')";

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo '<script>alert("Registration successfully."); window.location.href = "user_login.php";</script>';
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
$user_email = $_SESSION['email'];

mysqli_close($conn);
?>
