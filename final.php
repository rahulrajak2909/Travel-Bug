<?php 
        session_start();
        require 'connect.php';
        require 'error.php';
        //Handling and make sure that card number is not more than 12
        // and CVV is not more than 3, and card name is valid

        //handling errors related to Card holder name 
        const Name_Required = '*Please enter your Full Name';
        const Name_Invalid = '*Name should be alphabetic characters only';
        const Phone_Required = '*cvv is not Valid';
        const Phone_Invalid = '*cvv is not within limits.';
        
const card_Required = '*card number is not Valid';
const card_Invalid = '*card number is not within limits.';

if (!isset($_GET['id'])){

       
    $card_holder = filter_input(INPUT_POST, 'card_holder', FILTER_SANITIZE_STRING);
    $inputs['card_holder'] = $card_holder;
    if($card_holder) {

            $fname = trim($card_holder);
            if(!preg_match("/^[A-Za-z\s]+$/", $card_holder)){
                $_SESSION['card_holder_error'] = Name_Invalid;
                $errors['card_holder_error'] = Name_Invalid;
            }
    } else {
        $_SESSION['card_holder_error'] = Name_Required;
        $errors['card_holder_error']  = Name_Required;
    }

    //handling the cvv


    
$cvv = filter_input(INPUT_POST, 'cvv', FILTER_SANITIZE_NUMBER_INT);
$inputs['cvv'] = $cvv;

if($cvv) {
$cvv = filter_var($cvv, FILTER_VALIDATE_INT, ['options' => ['min_range' => 101, 'max_range' => 999]]);
if ($cvv === false || $cvv === NULL){
            
        $_SESSION['cvv'] = Phone_Invalid;
        $errors['cvv'] = Phone_Invalid;
    }
} else {
$_SESSION['cvv'] = Phone_Required;
$errors['cvv'] = Phone_Required;
}

//Handling card no.

    
$card_number = filter_input(INPUT_POST, 'card_number', FILTER_SANITIZE_NUMBER_INT);
$inputs['card_number'] = $card_number;

if($card_number) {
$card_number = filter_var($card_number, FILTER_VALIDATE_INT, ['options' => ['min_range' => 111111111111, 'max_range' => 999999999999]]);
if ($card_number === false || $card_number === NULL){
            
        $_SESSION['card_number'] = card_Invalid;
        $errors['card_number'] = card_Invalid;
    }
} else {
$_SESSION['card_number'] = card_Required;
$errors['card_number'] = card_Required;
}

    if (count($errors) > 0) {
        header("Location:payment.php");
    }
}
        
        
        
        // This will work only after checkout.
        if(isset($_POST['checkout'])) {
        

        $query1 = "SELECT max(bid) AS bid from booking_record";
        $r1 = mysqli_query($conn, $query1);
        if($r1){
        $bid = mysqli_fetch_assoc($r1);
        
        $card_holder = $_POST['card_holder'];
        $card_number = $_POST['card_number'];

        $query = "INSERT INTO payment_record (bid, payment_type, card_holder, card_number) VALUES ('{$bid['bid']}', 'Credit Card', '$card_holder', '$card_number')";
        $r = mysqli_query($conn, $query);
        if ($r) {
            $query2 = "UPDATE booking_record set payement_status = 'SUCCESS' WHERE bid = '{$bid['bid']}'";
            $r2 = mysqli_query($conn, $query2);

        } else {
            echo "payment nhi ho paa r hai";
        }

        } else {
            echo "bid nhi aa rhi hai !!";
        }
        
    
    
    }


    if (isset($_GET['id']) && $_GET['id'] == 1) {
        $query3 = "SELECT max(bid) AS bid from booking_record";
        $r3 = mysqli_query($conn, $query3);
        $bid = mysqli_fetch_assoc($r3);
        $_SESSION['bid'] = $bid['bid'];
        // var_dump($bid);
    }
    


    //  for retrive the data in input field 
  
    if (isset($bid['bid'])) {
        $q1 = "SELECT bid, pname, full_name, email, date, total_person, room, address, payement_status, phone_no FROM booking_record WHERE bid = '{$bid['bid']}'";

        
        
        $r1 = mysqli_query($conn, $q1);
        
        if ($r1) {
            $user_details = mysqli_fetch_assoc($r1);
            //session variable for final_mail.php
            $_SESSION['date'] = $user_details['date'];
            $_SESSION['total_person'] = $user_details['total_person'];
            $_SESSION['phone_no'] = $user_details['phone_no'];
            $_SESSION['full_name'] = $user_details['full_name'];
            $_SESSION['payement_status'] = $user_details['payement_status'];
         
        } else {
            echo "Failed to fetch user details.";
        }
    }

    // for price 
    $pname = $user_details['pname'];
    $_SESSION['pname'] = $pname;

    // Retrieve the price of the package from package_record
    $q5 = "SELECT price, duration, CAST(REPLACE(REPLACE(price, '₹', ''), ',', '') AS SIGNED) AS converted_price FROM package_record WHERE pname = '$pname'";

    $r5 = mysqli_query($conn, $q5);
    if ($r5) {
    $price_info = mysqli_fetch_assoc($r5);
    $_SESSION['converted_price'] = $price_info['converted_price'];
    $_SESSION['duration'] = $price_info['duration'];


    } else {
        echo "Failed to fetch package price.";
    }


        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
<style>
     @media print{
            #generatePdfBtn{ 
                display: none !important;
            }
        }
        body {
     
     background-image: url('map1.jpg');
     background-repeat: no-repeat;
background-size: 100%;


 }
</style>


</head>
<body>
   
<div id="invoice" style="margin-top: -0.5rem">
    <DIV style="margin-left: 4rem; font-size: 1.2rem">        
                <div style="margin-left: 38rem; font-size: 2rem ">TRAVEL BUG</div>
            <br>
          <span style="margin-left: 4rem"><ion-icon name="location-outline"></ion-icon><span> Gwalior, India</span></span>
          <span style="margin-left: 26rem"><ion-icon name="call-outline"></ion-icon><span> +91 234 56 789 </span></span>
          <span style="margin-left: 22rem"><ion-icon name="mail-open-outline"></ion-icon><span> travelbug2302@gmail.com </span></span>
    </DIV>
                <div style="margin-left: 2rem; margin-top: -0.3rem">_____________________________________________________________________________________________________________________________________________________________________________________</div>
   
        <div>
            <div style="margin-left:3rem; font-size: 2rem">BOOKING DETAILS</div><br>
           <div style="font-size: 1rem; margin-left: 3rem">Booking ID - <input type="text" value = "<?php echo $user_details['bid'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 2.5rem" disabled></div>

           <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Package Name - <input type="text" value = "<?php echo $user_details['pname'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 1rem" disabled></div>
           <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Travelling Date - <input type="text" value = "<?php echo $user_details['date'] ?>" id="" style="border: none; border-bottom: 1px solid black; margin-left: 0.7rem" disabled></div>
           <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Total Person - <input type="text" value = "<?php echo $user_details['total_person'] ?>" id="" style="border: none; border-bottom: 1px solid black; margin-left: 2.1rem" disabled></div>
         
            <div style="margin-left:60rem; font-size: 2rem; margin-top: -8rem">BOOKING STATUS </div><br><br><br><br><br>
            <div><input type="text" value = "<?php echo $user_details['payement_status'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 60.3rem; width: 17rem; font-size: 3rem; margin-top: -3rem; text-align: center;" disabled></div>
        </div><br>

        <div style="margin-top: -2rem">
            <div style="font-size: 1.5rem; margin-left: 8rem">Booked By</div>
              <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Customer Name - <input type="text" value = "<?php echo $user_details['full_name'] ?>" id="" style="border: none; border-bottom: 1px solid black; margin-left: 0.5rem"disabled></div>
           <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Phone Number - <input type="text" value = "<?php echo $user_details['phone_no'] ?>" id="" style="border: none; border-bottom: 1px solid black; margin-left: 1rem"disabled></div>
          <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Email ID -<input type="text" value = "<?php echo $user_details['email'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 3.5rem"disabled></div>
           
           <div style="font-size: 1rem; margin-left: 3rem; margin-top: 1rem">Address - <input type="text" value = "<?php echo $user_details['address'] ?>" id="" style="border: none; border-bottom: 1px solid black; margin-left: 3.6rem" disabled></div>
        </div><br>

        <!-- tables -->

        <div class="row" style="margin-left: 25rem; border: 1px solid black; padding: 1rem 2rem 2rem 2rem; margin-right: 23rem; margin-top: -3rem">
    <div class="col-md" style="margin-top: -1rem">
      <table class="table">
        <thead colspan="2" ><strong style="font-size: 1.2rem">Description</strong></thead>
        <thead colspan="2" ><strong style="font-size: 1.2rem; margin-left: 28rem">Amount</strong></thead>

        <div style="margin-top: 0.7rem; font-size: 1.2rem">Package Price</div>
        <div style="margin-top: -1rem"><input type="text" value = "<?php echo $price_info['price'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 32rem; "disabled></div>
        <div style="margin-top: 0.7rem; font-size: 1.2rem">Package Duration</div>
        <div style="margin-top: -1rem"><input type="text" value = "<?php echo $price_info['duration'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 32rem; "disabled></div>

        <div style="margin-top: 0.7rem; font-size: 1.2rem">Room Detail</div>
        <div style="margin-top: -1rem"><input type="text" value = "<?php echo $user_details['room'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 32rem; "disabled></div>

        <div style="margin-top: 0.7rem; font-size: 1.2rem">No. of Person</div>
        <div style="margin-top: -1rem"><input type="text" value = "<?php echo $user_details['total_person'] ?>" style="border: none; border-bottom: 1px solid black; margin-left: 32rem; "disabled></div>
        <div style="margin-top: 0.7rem; font-size: 1.2rem">Total</div>
        <div style="margin-top: -1rem"><input type="text" value = "<?php echo $price_info['converted_price']*$user_details['total_person']; ?>" style="border: none; border-bottom: 1px solid black; margin-left: 32rem; " disabled></div>
      </table>
    </div>
    </div>
  
    <div style="margin-left: 38rem; margin-top: 1rem"><a href="final_mail.php?booking_email=<?php echo urlencode($user_details['email'] ); ?>" ><button  id="generatePdfBtn"  style="width: 20rem; height: 2rem; border-radius: 10px; background-color: darkgreen; color: white; cursor: pointer; font-size: 1.2rem" >Download And Mail</button></a></div>

</div>






<script>
  
        document.getElementById("generatePdfBtn").addEventListener("click", function() {
            window.print();
        });
    </script>
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>