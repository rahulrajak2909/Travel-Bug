<?php 
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'tour';

 $conn = mysqli_connect($dbhost, $dbuser, '', $db);
session_start();
const Name_Required = '*Please enter your Full Name';
const Name_Invalid = '*Name should be alphabetic characters only';
const Email_Required = '*Please enter your correct Email';
const Email_Invalid = '*Your email is not correct';
const Phone_Required = '*Phone is not Valid';
const Phone_Invalid = '*Phone is not within limits.';
const Pass_Mismatch = '*Password is not matching';

require 'error.php';

//validating the name 
$full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING);
    $inputs['full_name'] = $full_name;
    if($full_name) {

            $fname = trim($full_name);
            if(!preg_match("/^[A-Za-z\s]+$/", $full_name)){
                $_SESSION['full_name'] = Name_Invalid;
                $errors['full_name'] = Name_Invalid;
            }
    } else {
        $_SESSION['full_name'] = Name_Required;
        $errors['full_name']  = Name_Required;
    }

// Validating the phone
$phone_no = filter_input(INPUT_POST, 'phone_no', FILTER_SANITIZE_NUMBER_INT);
            $inputs['phone_no'] = $phone_no;

if($phone_no) {
    $phone_no = filter_var($phone_no, FILTER_VALIDATE_INT, ['options' => ['min_range' => 6000000000, 'max_range' => 9999999999]]);
        if ($phone_no === false || $phone_no === NULL){
                        
                    $_SESSION['phone_no'] = Phone_Invalid;
                    $errors['phone_no'] = Phone_Invalid;
                }
        } else {
            $_SESSION['phone_no'] = Phone_Required;
            $errors['phone_no'] = Phone_Required;
        }

// Validating the Emergency contact
$e_contact = filter_input(INPUT_POST, 'e_contact', FILTER_SANITIZE_NUMBER_INT);
            $inputs['e_contact'] = $e_contact;

        if($e_contact) {

                $e_contact = filter_var($e_contact, FILTER_VALIDATE_INT, ['options' => ['min_range' => 6000000000, 'max_range' => 9999999999]]);
                if ($e_contact === false || $e_contact === NULL){
                        
                    $_SESSION['e_contact'] = Phone_Invalid;
                    $errors['e_contact'] = Phone_Invalid;
                }
        } else {
            $_SESSION['e_contact'] = Phone_Required;
            $errors['e_contact'] = Phone_Required;
        }
 
        // Sanitize and Validate email

 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 $inputs['email'] = $email; 
 if($email) {

     //validate Email
     $email = filter_var($email, FILTER_VALIDATE_EMAIL);
      if($email === false) {

             $_SESSION['email'] = Email_Invalid;
             $errors['email'] = Email_Invalid;    
      }

 } else {

         $_SESSION['email'] = Email_Required;
         $errors['email'] = Email_Required;
 }



 if(isset($_POST['submit']) && count($errors)<=0) {

    $pname = $_GET['pname'];

   $full_name = $_POST['full_name'];
   $phone_no = $_POST['phone_no'];
   $email = $_SESSION['user_email'];
   $date = $_POST['date'];
   $total_person = $_POST['total_person'];
   $room = $_POST['room'];
   $e_contact  = $_POST['e_contact'];
   $address = htmlspecialchars($_POST['address']);
   
   //payment status yaha par pending hi insert ho rha hai, jab payment kar dega toh update karna hogi ye 
   // entry to success.
   $payment_status = "PENDING";

   $query = "INSERT INTO booking_record (pname, full_name, phone_no, email, date, total_person, room, e_contact, address, payement_status) VALUES ('$pname', '$full_name', '$phone_no', '$email', '$date', '$total_person', '$room', '$e_contact', '$address', '$payment_status')";

   $data = mysqli_query($conn, $query);

    if ($data) {
        $_SESSION['pname'] = $_GET['pname'];
        header('Location:payment.php');
    } else {
        echo "Error";
    }

 } else {
    $_SESSION['pname'] = $_GET['pname'];
    header('Location:booking.php');
 }
?>