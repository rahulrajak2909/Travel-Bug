<?php
session_start();

 require 'connect.php';
 if (isset( $_SESSION['user_email'])){     
  $email = $_SESSION['user_email'];
} else {
$email = "Error in fetching the email!!!!!";
}

if(isset($_SESSION['user_email'])) {
  $q1 = "SELECT fname, phone, email, pass, gender FROM user_record WHERE email = '$email'";

  $r1 = mysqli_query($conn, $q1);
  $user_details = mysqli_fetch_assoc($r1);

}



?>
<?php 

    if (isset($_SESSION['fname'])) {
        $name_error = $_SESSION['fname'];
        unset($_SESSION['fname']);
      }
    if (isset($_SESSION['email'])){
        $email_error = $_SESSION['email'];
        unset($_SESSION['email']);
    }
    if (isset($_SESSION['phone'])) {
        $phone_error = $_SESSION['phone'];
        unset($_SESSION['phone']);
    }
    if (isset($_SESSION['pass'])) {
        $pass_error = $_SESSION['pass'];
        unset($_SESSION['pass']);
    }

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="edit_profile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
 
   <script src="script.js" defer></script>


</head>
<style>
/* Google Fonts - Poppins */

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background-color: white;
}
.nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 15px 200px;
  background: white;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  color: black;
}
.nav,
.nav .nav-links {
  display: flex;
  align-items: center;
}
.nav {
  justify-content: space-between;
}
a {
  color: black;
  text-decoration: none;
}
.nav .logo {
  font-size: 22px;
  font-weight: 500;
}
.nav .nav-links {
  column-gap: 20px;
  list-style: none;
}
.nav .nav-links a {
  transition: all 0.2s linear;
}


.nav .navOpenBtn,
.nav .navCloseBtn {
  display: none;
}

/* responsive */
@media screen and (max-width: 1160px) {
  .nav {
    padding: 15px 100px;
  }
  .nav .search-box {
    right: 150px;
  }
}
@media screen and (max-width: 950px) {
  .nav {
    padding: 15px 50px;
  }
  .nav .search-box {
    right: 100px;
    max-width: 400px;
  }
}
@media screen and (max-width: 768px) {
  .nav .navOpenBtn,
  .nav .navCloseBtn {
    display: block;
  }
  .nav {
    padding: 15px 20px;
  }
  .nav .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    max-width: 280px;
    width: 100%;
    padding-top: 100px;
    row-gap: 30px;
    flex-direction: column;
    background-color: #11101d;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    z-index: 100;
  }
  .nav.openNav .nav-links {
    left: 0;
  }
  .nav .navOpenBtn {
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .navCloseBtn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .search-box {
    top: calc(100% + 10px);
    max-width: calc(100% - 20px);
    right: 50%;
    transform: translateX(50%);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
}

    body {
     
        background-image: url('map.jpg');
        background-repeat: no-repeat;
  background-size: 100%;
    }

/* edit profile css */
.container{
  /* max-width: 700px; */
  width: 40rem;
  margin-top:2rem;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #a8896c, #acc6aa);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #a8896c, #acc6aa);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
    
/* booking css */

.container {
  margin-top: 5em;
}
h2 {
  text-align: center;
}
table {
  background-color: #fff;
  box-shadow: 1px 1px 5px #888888;
  border: 0px !important;
}
table caption {
	padding: .5em 0;
}
thead {
  background-color:#3288FA;
  color:#fff;
}
tbody>tr>td {
  border-right: 0px !important;
  border-left:0px !important;
  padding: 1em 1em !important;
}
thead>tr>th {
  border-right: 0px !important;
  border-left:0px !important;
  padding: 1.5em 1em !important;
}
tr:hover{
  cursor: pointer;
}

@media screen and (max-width: 767px) {
  table caption {
    border-bottom: 1px solid #ddd;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}

.btn {
  font-size:0.9em;
  text-transform:uppercase;
  font-weight:600;
  border: 0px;
}
.btn-success {
  background-color: #46A137;
}
.btn-warning {
  background-color:#F6B400;
}
.btn-danger {
  background-color:#DC3D30;
}
.btn-info{
  background-color: #168CFF;
}


</style>

<body>

<nav class="nav" style="">
      <i class="uil uil-bars navOpenBtn"></i>
      <a href="#" class="logo"><?php echo $email;  ?></a>
      <ul class="nav-links">
        <i class="uil uil-times navCloseBtn"></i>
        <li><a href="user_main.php">Home</a></li>
        <li><a href="edit_profile.php" id = "edit_profile">Edit Profile</a></li>
        <li><a href="#" id = "booking_details">Booking Details</a></li>
        <li><a href="#" id = "complaint_details">Complaint </a></li>
        <li><a href="index.php">Log Out </a></li>
      </ul>
    </nav>

    <!-- for using JavaScript  -->
    <!-- 1. edit profile -->

    <div id="edit">
<form action="edit_profile2.php" method="POST">
<div class="container">
    <div class="title">User Profile</div><br>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name = "full_name_edit" value = "<?php echo $user_details['fname'] ?>" placeholder="Enter your name" required style="width: 36rem">
            <?php 
                if (isset($_SESSION['full_name_edit'])) {
                    echo "<div style='margin-right: -10rem; position: fixed; color: red'>".$_SESSION['full_name_edit']."</div>";
                    unset($_SESSION['full_name_edit']);
                  }
            ?>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="text" name = "phone_no_edit"  value = "<?php echo $user_details['phone'] ?>" placeholder="Enter your username" required style="width: 36rem">

            <?php 
                if (isset($_SESSION['phone_no_edit'])) {
                    echo "<div style='position: fixed; color: red'>".$_SESSION['phone_no_edit']."</div>";
                    unset($_SESSION['phone_no_edit']);
                  }
            ?>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" value = "<?php echo $user_details['email'] ?>" placeholder="Enter your email" required disabled style="width: 36rem">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name = "password_edit"  value = "<?php echo $user_details['pass'] ?>" placeholder="Enter your email" required style="width: 36rem">
          </div>
          
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="M" <?php echo ($user_details['gender'] === 'M') ? 'checked' : ''; ?> required>
          <input type="radio" name="gender" id="dot-2" value="F" <?php echo ($user_details['gender'] === 'F') ? 'checked' : ''; ?> required>
          <input type="radio" name="gender" id="dot-3" value="O" <?php echo ($user_details['gender'] === 'O') ? 'checked' : ''; ?> required>
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit"  name = "submit" value="Register">
        </div>
      </form>
    </div>
  </div>
   
</form> 
</div>


<!-- 2. booking details -->


<div>
  <form action="#">

  <div  id="booking" style="margin-left: 0rem; margin-top: 0rem">
    <div class="row" >
      <div class="col-xs-12">
      <div class="table-responsive">
        <table  class="table table-bordered table-hover" style="padding: 2rem 1rem 1rem 1rem; margin-top: 0rem;  ">
        <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $db = 'tour';

                                $conn = mysqli_connect($dbhost, $dbuser, '', $db);

                                $query = "SELECT pname , full_name, phone_no, total_person, date, payement_status FROM booking_record where email = '$email'";
                          
                                $data = mysqli_query($conn, $query);

                                $total = mysqli_num_rows($data);

                                if ($total != 0) { ?>
          <thead >
            <tr>
              <th>Package</th>
              <th style="margin-left: 2rem">Pkg Name</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Total Person</th>
              <th>Date</th>
              <th>Booking Amount</th>
              <th>Payment Status</th>
            </tr>
         
          <tbody>
          <?php
                                       
          while ($result = mysqli_fetch_assoc($data)) {
          
           $query2 = "SELECT logo, CAST(REPLACE(REPLACE(price, '₹', ''), ',', '') AS SIGNED) AS converted_price from package_record where pname = '{$result['pname']}'";
           $r1 = mysqli_query($conn, $query2);
           $logo_price  = mysqli_fetch_assoc($r1);
          echo "<tr> 
          <td>"."<img src = ".$logo_price['logo']." style='width: 4rem'> </td>
          <td>" . $result['pname'] . "</td>
          <td>" . $result['full_name'] . "</td>
          <td>" . $result['phone_no'] . "</td>
          <td>" . $result['total_person'] . "</td>
          <td>" . $result['date'] . "</td>
          <td>" . $logo_price['converted_price']*$result['total_person'] . "</td>
          <td>" . $result['payement_status'] . "</td>
        </tr>
        </div>
        ";
                            
                                        }
                                } else {
                                    echo "NO record found";
                                }

                                ?>
          </tbody>
          </thead>
          <tfoot>
            
          </tfoot>
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>

  </form>
</div>



<!-- 3. for Complaint form  -->


<div id="complaint">
  <form action="complaint.php" method = "POST" enctype="multipart/form-data">
  <div class="container">
    <div class="title">Complaint/Feedback Form</div><br>
    <div class="content">
      <form >
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your name" value='<?php echo $email; ?>' style="width: 36rem" disabled>
          </div>
          <div class="input-box" >

          <select name="c_topics" id="option" style="margin-left: 0rem; width: 35.9rem; font-size: 1.3rem; border-radius: 5px; color: #393e46" required>
                    <option  disabled selected>Select</option>
                    <option   value="Booking Related" >Booking Related</option>
                    <option  value="Payment Related" >Payment Related</option>
                    <option value="Cancellation Related" >Cancellation Related</option>
                    <option value="General Enquiry Related" >General Enquiry Related</option>
                    <option value="Technical Issue Related" >Technical Issue Related</option>
                    <option value="Feedback" >Feedback</option>
            </select>
            <?php 
                if(isset( $_SESSION['c_topic_error'])) {
                  echo "<div style='color: red; width: 25rem; position: fixed'>" .$_SESSION['c_topic_error']."</div>";
                  unset( $_SESSION['c_topic_error']);
                }
            ?>
         
          </div>
          <div class="input-box">
            <span class="details">Upload File</span>
            <input type="file" name = "c_file" placeholder="Enter your email"  style="width: 36rem;">
          </div>
          <div class="input-box">
            <textarea name="c_message" id="" cols="61" rows="5" placeholder="Message....." style="font-size: 1.2rem" required></textarea>
          </div>
          
        </div>
        
        <div class="button" >
          <input type="submit" name = "c_submit" value="Submit">
        </div>
       
      </form>
      
    </div>
  </div>
  </form>
  <div class="button" id="status" style="margin-left: 2rem; margin-top: -3.3rem">
          <a href="check_previous.php"><input type="submit" name="check" value="Check Previous Complaint Status" style="width: 36rem; height: 2.6rem; font-size: 1.3rem; border-radius: 6px; border: none; color: white; background: linear-gradient(135deg, #a8896c, #acc6aa); cursor: pointer"></a>
        </div>
</div>

                                <!-- for check previous status -->
  


<script src="edit.js"></script>


</body>
</html>