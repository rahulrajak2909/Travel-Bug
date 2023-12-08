<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pkg description</title>
    <link rel="stylesheet" href="user_main.css">
</head>
<body>
<div class="head" style="margin-top: -0.5rem" >
    <span><ion-icon name="call-outline"></ion-icon>
      <div style="margin-left: 1.5rem; margin-top:-1.5rem"> Toll Free - 1800 108 2234</div>
    </span>
    <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsLWQCVZKWjbzllDGPWCvgxcCDSBbDbdqdRNbfhpXWKvXlJzTkqpcLlwSRQqpPWZGmVvNrVG"
      target="_blank" style="text-decoration: none; color:white;"><span><ion-icon name="mail-open-outline"></ion-icon>
        <div style="margin-left: 1.5rem; margin-top:-1.5rem; ">support@trivago.com</div></a>
    </span>
    <a href="index.php" style="cursor: pointer; text-decoration: none; color: white"><span><ion-icon name="pricetags-outline"></ion-icon>
        <div style="margin-left: 1.5rem; margin-top:-1.5rem">Use Code- NEW10</div></a>
    </span>
  </div>
  <div>
    <div> <img src="image/tour1.jpg" style="width: 10rem"></div>
    <div style="margin-left: 2rem;"><img src="image/travelbug.png"
        style="width: 18rem; margin-left: 30rem; margin-top: -12rem"></div>
    <div style="margin-top: -2rem;"><img src="image/karo.png"
        style="width: 6rem; margin-left: 50rem; margin-top: -14rem"></div>
    <div style="margin-top: -1rem;"><img src="image/tour2.jpg"
        style="width: 11rem; margin-left: 78rem; margin-top: -10rem"></div>
  </div>

  






<?php 



session_start();


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'tour';

$conn = mysqli_connect($dbhost, $dbuser, '', $db);
 $pname = $_GET['pname'];
//  var_dump($pname);

$query_for_images = "SELECT images from package_images where pname = '$pname'";

    $q1 = mysqli_query($conn, $query_for_images);

    $image_fetch = mysqli_fetch_all($q1, MYSQLI_ASSOC);
    $query_for_all = "SELECT * FROM package_record where pname = '$pname'";
    $q2 = mysqli_query($conn, $query_for_all); 
    $all_fetch = mysqli_fetch_assoc($q2);
    ?>
    <?php echo "<div style='margin-left: 40rem; margin-top: 1rem; font-size: 7rem; color:#347474'>". $pname."</div>"; ?>
        <br>
        <?php echo "<div style='margin-left: 2rem; margin-top: -5rem'>"."<img src ='".$all_fetch['logo']."'>" ."</div>"; ?>
    
    <br>
    <?php echo "<div style='margin-top: -7rem; margin-left: 6.5rem; font-size: 2.5rem; color: white'>".$all_fetch['price']."</div>"; ?>   <br>

    <?php echo "<div style='margin-left: 5rem; color: white; font-size: 1.5rem; margin-top: -1rem'>".$all_fetch['duration']."</div>"; ?>
    <br>
    <?php
    //images set karna hai.
    echo "<div style='margin-left: 23.5rem; margin-top: -13rem'>";
    foreach($image_fetch as $if) {

        echo "<img src ='".$if['images']."' style='width: 17rem; margin-left: 5rem; '>";
        
    }
    echo "</div>";
   ?>
   
         
 

    <!-- aur ye set karna hai  -->
     
    <?php echo"<div style='margin-left: 24rem; margin-right: 1.5rem; margin-top: -21rem;  font-family: 'Source Sans Pro', 'Arial', sans-serif;'>". $all_fetch['description']."</div>"; ?>
    <br>

    <div style="margin-left: 40rem; margin-top: 17rem; width: 10rem">
  <a href="booking.php?pname=<?php echo urlencode($pname); ?>" >
    <button id="book_now" style="width: 15rem; height: 2rem; font-size: 1.2rem; background-color: #bc2525; color: white; border-radius: 5px; cursor: pointer">Book Now</button>
  </a>
    </div>


    
<!--  to show booking form in pkg page -->
    













<script src="booking.js"></script>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>