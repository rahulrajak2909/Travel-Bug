<?php 
    session_start();
        // Booking2.php mai pname bhej kar sahi se print karane ke liye
        if (isset( $_GET['pname'])) {  
        $pname = $_GET['pname'];
        } else {
            $pname = $_SESSION['pname'];
        }
      $email = $_SESSION['user_email'];
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <link rel="stylesheet" href="booking.css">
    <style>
    body {
        background: none;
        background-image: url('booking bgd.jpg');
        background-repeat: no-repeat;
  background-size: 100%;
    }
</style>

    
</head>
<body>

  <div class="container" id="book">
    <div class="title">Book Package</div>
    <div class="content">
      
    <form action="booking2.php?pname=<?php echo urlencode($pname); ?>" method="POST">


        <div class="user-details">
          <div class="input-box" style="width: 41rem">
            <span class="details">Package Name</span>
            <input type="text" name = "pname"   value = '<?php echo $pname; ?>' disabled>
              
        </div>
          <br>
          <div class="input-box" style='margin-left: -2rem'>
            <span class="details">Full Name</span>
            <input type="text" name = "full_name" placeholder="Enter your Name" required>
            <?php 
                if (isset($_SESSION['full_name'])) {
                    echo "<div style='color: red; width: 22rem; font-size: 0.9rem'>".$_SESSION['full_name']."</div>";
                    unset($_SESSION['full_name']);
                  }
            ?>  
        </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name = "phone_no" placeholder="Enter your number" required>
            <?php 
                if (isset($_SESSION['phone_no'])) {
                    echo "<div style='color: red'>".$_SESSION['phone_no']."</div>";
                    unset($_SESSION['phone_no']);
                  }
            ?>  
        </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name = "email" value = '<?php echo $email; ?>' placeholder="Enter your Email" >
            <?php 
                if (isset($_SESSION['email'])) {
                    echo "<div style='color: red'>".$_SESSION['email']."</div>";
                    unset($_SESSION['email']);
                  }
            ?>  
        
        </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name = "date"  id="booking-date" required>
          </div>
          <div class="input-box">
            <span class="details">Total Person</span>
            <input type="number" name = "total_person" placeholder="Total number of person" required>
          </div>
          <div class="input-box">
            <span class="details">Emergency</span>
            <input type="text" name = "e_contact" placeholder="Enter your emergeny number" required>
            <?php 
                if (isset($_SESSION['e_contact'])) {
                    echo "<div style='color: red'>".$_SESSION['e_contact']."</div>";
                    unset($_SESSION['e_contact']);
                  }
            ?> 
            
            <div style="margin-top: 0.5rem">
    <span class="details" style="margin-left: -21rem">Select Room</span>
    <select name="room" style="width: 40rem; margin-left: -21.2rem; height: 2.5rem; border-radius: 5px" required>
        <option value="" disabled selected>Select</option>
        <option value="single">Single Room</option>
        <option value="distributed">Distributed Room</option>
    </select>
</div>
  

        </div>
          <div class="input-box" style='width: 40rem'>
            <span class="details">Address</span>
            <input type="text" name = "address" placeholder="Enter your address" required>
          </div>
        </div>
        <div class="gender-details">
       
        <div class="button">
          <input type="submit" name = "submit" value="Book Now !">
        </div>
      </form>
    </div>
  </div>



  <script src="booking.js"></script>
</body>
</html>
    
</body>
</html>