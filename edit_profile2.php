<?php 
    session_start();
    require 'connect.php';
    require 'error.php';
    const Name_Required = '*Please enter your Full Name';
    const Name_Invalid = '*Name should be alphabetic characters only';
    const Email_Required = '*Please enter your correct Email';
    const Email_Invalid = '*Your email is not correct';
    const Phone_Required = '*Phone is not Valid';
    const Phone_Invalid = '*Phone is not within limits.';
    const Pass_Mismatch = '*Password is not matching';


    //validating the name 
$full_name = filter_input(INPUT_POST, 'full_name_edit', FILTER_SANITIZE_STRING);
$inputs['full_name_edit'] = $full_name;
if($full_name) {

        $fname = trim($full_name);
        if(!preg_match("/^[A-Za-z\s]+$/", $full_name)){
            $_SESSION['full_name_edit'] = Name_Invalid;
            $errors['full_name_edit'] = Name_Invalid;
        }
} else {
    $_SESSION['full_name_edit'] = Name_Required;
    $errors['full_name_edit']  = Name_Required;
}

// Validating the phone
$phone_no = filter_input(INPUT_POST, 'phone_no_edit', FILTER_SANITIZE_NUMBER_INT);
            $inputs['phone_no_edit'] = $phone_no;

if($phone_no) {
    $phone_no = filter_var($phone_no, FILTER_VALIDATE_INT, ['options' => ['min_range' => 6000000000, 'max_range' => 9999999999]]);
        if ($phone_no === false || $phone_no === NULL){
                        
                    $_SESSION['phone_no_edit'] = Phone_Invalid;
                    $errors['phone_no_edit'] = Phone_Invalid;
                }
        } else {
            $_SESSION['phone_no_edit'] = Phone_Required;
            $errors['phone_no_edit'] = Phone_Required;
        }


if(isset($_POST['submit']) && count($errors)<=0) {

    $full_name = $_POST['full_name_edit'];
    $phone_no = $_POST['phone_no_edit'];
    $password = $_POST['password_edit'];
    $gender = $_POST['gender'];

    $query = "UPDATE user_record set fname = '$full_name', phone = '$phone_no', pass = '$password', gender = '$gender' where email = '{$_SESSION['user_email']}'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo '<script>alert("User details Updated Successfully !!!!"); window.location.href = "edit_profile.php";</script>';
        
    } else {
        echo "Error";
    }

} else {
    header('Location:edit_profile.php');
}

    

?>