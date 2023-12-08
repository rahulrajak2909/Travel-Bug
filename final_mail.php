<?php
session_start();
$bid = $_SESSION['bid'];
$pname = $_SESSION['pname'];
$date = $_SESSION['date']; 
$total_person = $_SESSION['total_person']; 
$room = $_SESSION['room']; 
$phone_no = $_SESSION['phone_no']; 
$full_name = $_SESSION['full_name']; 
$payement_status = $_SESSION['payement_status']; 
$converted_price = $_SESSION['converted_price'];
$duration = $_SESSION['duration'];
$totalprice = $converted_price*$total_person;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

        if (isset($_GET['booking_email'])){
            $booking_email = $_GET['booking_email'];
            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Username = 'travelbug2302@gmail.com';
                
                
                // Use your generated App Password here
                $mail->Password = 'icax gwbt twxn hapl';
                
                $mail->SMTPSecure = "tls";
                $mail->SMTPAuth=true;
                $mail->Port = 587;
        
                $mail->setFrom('travelbug2302@gmail.com');
                $mail->addAddress( $booking_email);
                $mail->isHTML(true);
        
                $mail->Subject = "Thank You for your Booking with Id = $bid ,Status = $payement_status ";
                $mail->Body = "
                <!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .container {
    background-color: #f2f2f2;
    padding: 20px;
  }
  h2 {
    color: #333;
  }
  .details {
    margin: 10px 0;
  }
</style>
</head>
<body>
<div class='container'>
  <h2>Booking Confirmation</h2>
  <p><strong>Booking ID:</strong> $bid</p>
  <p><strong>Status:</strong> $payement_status</p>
  <p><strong>Package Name:</strong> $pname</p>
  <p><strong>Package Price:</strong> $converted_price</p>
  <p><strong>Package Duration:</strong> $duration</p>
  <p><strong>Travel Date:</strong> $date</p>
  <p><strong>Customer Name:</strong> $full_name</p>
  <p><strong>Phone Number:</strong> $phone_no</p>
  <p><strong>Total Persons:</strong> $total_person</p>
  <p><strong>Room Details:</strong> $room</p>
  <p><strong>Total Amount:</strong> $totalprice</p>
  <br>
  <p><strong>Thank you for using our service!</strong></p>
  <p>We wish you a joyful and auspicious journey.</p>
  <br>
  <p>If you have any questions regarding our service, please contact us at <a href='mailto:travelbug2302@gmail.com'>travelbug2302@gmail.com</a> or call 1800 234 4562.</p>
</div>
</body>
</html>
";
              
        
                $mail->send();
                
                echo '<script>alert("Email Sent Successfully"); window.location.href = "user_main.php";</script>';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }
        } else {
            echo "Someting wrong with your query!";
        }
?>








