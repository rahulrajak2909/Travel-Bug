<?php
session_start();
require 'connect.php';

if (isset($_POST['c_submit'])) {
    $email = $_SESSION['user_email'];
    if (isset($_POST['c_topics'])){
    $c_topics = $_POST['c_topics'];
    } else {
        $_SESSION['c_topic_error'] = "*No option is selected, Please select one of them!";
        header("Location:edit_profile.php");
    }
    $c_message = $_POST['c_message'];
    if (isset($_FILES['c_file']['name'])){
    $c_file = $_FILES['c_file']['name'];
    } else {    
        $c_file = "None";
    }

    // Specify the destination directory for uploaded files
    if (isset($_FILES['c_file']['name'])){
    $uploadDirectory = 'upload/' . $c_file;
    } else {
        $uploadDirectory = "None";
    }

    $query = "INSERT INTO complaint_record (email, c_topics, c_file, c_message) VALUES ('$email', '$c_topics', '$c_file', '$c_message')";
    if(!empty($_FILES['c_file']['name'])) {
        if (move_uploaded_file($_FILES['c_file']['tmp_name'], $uploadDirectory)) {
            echo '<script>alert("Your Complaint is submitted successfully !!"); window.location.href = "edit_profile.php";</script>';
        } else {
            echo "Sorry Mam, Data nhi jaa rha hai, ab kya kare!";
            echo var_dump($c_file);
            echo var_dump($uploadDirectory);
        }
    } else {
        
    }
    $r1 = mysqli_query($conn, $query);
    if ($r1) {
        echo '<script>alert("Your Complaint is submitted successfully !!"); window.location.href = "edit_profile.php";</script>';
    } else {
        echo "Error in executing the database query.";
    }
}
?>

<!-- if (move_uploaded_file($_FILES['c_file']['tmp_name'], $uploadDirectory)) {
            echo '<script>alert("Your Complaint is submitted successfully !!"); window.location.href = "edit_profile.php";</script>';
        } else {
            echo "Sorry Mam, Data nhi jaa rha hai, ab kya kare!";
            echo var_dump($c_file);
            echo var_dump($uploadDirectory);
        } -->