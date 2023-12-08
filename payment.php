<?php
    session_start();
    require('connect.php');
   $pname =  $_SESSION['pname'];

   $q1 = "SELECT logo , pname , CAST(REPLACE(REPLACE(price, '₹', ''), ',', '') AS SIGNED) AS converted_price  from package_record where pname = '$pname'";
   $q2  = "SELECT total_person FROM booking_record WHERE bid = (SELECT MAX(bid) FROM booking_record)";
   $query2 = mysqli_query($conn , $q2);
   $total_person = mysqli_fetch_assoc($query2);

   $query = mysqli_query($conn , $q1);
   $logo = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css">
    <style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);
body,html {
  height:100%;
  margin:0;
  font-family:lato;
}

h2 {
  margin-bottom:0px;
  margin-top:25px;
  text-align:center;
  font-weight:200;
  font-size:19px;
  font-size:1.2rem;
  
}
.container {
  height:100%;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  /* background:-webkit-linear-gradient(#c5e5e5, #ccddf9);
  background:linear-gradient(#c9e5e9,#ccddf9); */
}
.dropdown-select.visible {
  display:block;
}
.dropdown {
  position:relative;
}
ul {
  margin:0;
  padding:0;
}
ul li {
  list-style:none;
  padding-left:10px;
  cursor:pointer;
}
ul li:hover {
  background:rgba(255,255,255,0.1);
}
.dropdown-select {
  position:absolute;
  background:#77aaee;
  text-align:left;
  box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
  border-bottom-right-radius:5px;
  border-bottom-left-radius:5px;
  width:90%;
  left:2px;
  line-height:2em;
  margin-top:2px;
  box-sizing:border-box;
}
.thin {
  font-weight:400;
}
.small {
  font-size:12px;
  font-size:.8rem;
}
.half-input-table {
  border-collapse:collapse;
  width:100%;
}
.half-input-table td:first-of-type {
  border-right:10px solid #4488dd;
  width:50%;
}
.window {
  height:540px;
  width:800px;
  background:#fff;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  border-radius:30px;
  z-index:10;
}
.order-info {
  /* height:100%; */
  /* width:50%; */
  padding-left:25px;
  padding-right:25px;
  box-sizing:border-box;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  position:relative;
}
.price {
  bottom:0px;
  position:absolute;
  right:0px;
  color:#4488dd;
}
.order-table td:first-of-type {
  width:25%;
}
.order-table {
    position:relative;
}
.line {
  height:1px;
  width:100%;
  margin-top:10px;
  margin-bottom:10px;
  background:#ddd;
}
.order-table td:last-of-type {
  vertical-align:top;
  padding-left:25px;
}
.order-info-content {
  table-layout:fixed;

}

.full-width {
  width:100%;
}
.pay-btn {
  border:none;
  background:#22b877;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:25px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.btnn{
  border:none;
  background:#22b877;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:25px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;

}
.btnn:hover{
  background:#22a877;
  color:#eee;
-webkit-transition:all .2s ease;
        transition:all .2s ease;

}
.pay-btn:hover {
  background:#22a877;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}

.total {
  margin-top:25px;
  font-size:20px;
  font-size:1.3rem;
  position:absolute;
  bottom:30px;
  right:27px;
  left:35px;
}
.dense {
  line-height:1.2em;
  font-size:16px;
  font-size:1rem;
}
.input-field {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}
.credit-info {
  background:#4488dd;
  
  width: 25rem; 
  color:#eee;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  font-size:14px;
  font-size:.9rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-sizing:border-box;
  padding-left:25px;
  padding-right:25px;
  border-top-right-radius:30px;
  border-bottom-right-radius:30px;
  position:relative;
}
.dropdown-btn {
  background:rgba(255,255,255,0.1);
  width:100%;
  border-radius:5px;
  text-align:center;
  line-height:1.5em;
  cursor:pointer;
  position:relative;
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-btn:after {
  content: '\25BE';
  right:8px;
  position:absolute;
}
.dropdown-btn:hover {
  background:rgba(255,255,255,0.2);
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-select {
  display:none;
}
.credit-card-image {
  display:block;
  max-height:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:35px;
  margin-bottom:15px;
}
.credit-info-content {
  margin-top:25px;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:25rem ;
  margin-left: 0.5rem;
}
@media (max-width: 600px) {
  .window {
    width: 100%;
    height: 100%;
    display:block;
    border-radius:0px;
  }
  .order-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .credit-info {
    width:100%;
    height:auto;
    padding-bottom:100px;
    border-radius:0px;
  }
  .pay-btn {
    border-radius:0px;
    
  }
}
</style>
</head>
<body>
<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Booking Summary</h2>
                <div class='line'></div>
        <table class='order-table'>
          <tbody>
           
                <?php
                echo "<img src='".$logo['logo']."' style='margin-top: -0.5rem; width: 17rem'>";
                ?>
                <div style="margin-top: -22rem; margin-left: 1.5rem; font-size: 1.3rem; color: white; font-weight: bold; font-family: \'Trebuchet MS\', \'Lucida Sans Unicode\', \'Lucida Grande\', \'Lucida Sans\', Arial, sans-serif'"><?php echo $logo['pname']; ?></div>
            </div>
          </tbody>

        
        </table>
        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>
            <div class='thin dense'>PRICE </div>
            <div class='thin dense'>Total Person </div>
            TOTAL AMOUNT
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'><?php echo $logo['converted_price']; ?></div>
            <div class='thin dense'><?php echo $total_person['total_person'];?></div>
            ₹<?php echo $logo['converted_price']*$total_person['total_person'];  ?>
          </span>
        </div>
</div>
</div>

<form action="final.php" method="POST" id="myForm">
        <div class='credit-info'>
          <div class='credit-info-content' style="margin-top: 0.5rem">
            <table class='half-input-table'>
              <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                <ul>
                  <li>Master Card</li>
                  <li>American Express</li>
                  </ul></div>
                </div>
               </td></tr>
            </table>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            
           <div style="margin-top: -1rem">
            Card Number  <?php 
                if (isset($_SESSION['card_number'])) {
                    echo "<div style='color: red; margin-left: 8rem; margin-top: -1rem;'>".$_SESSION['card_number']."</div>";
                    unset($_SESSION['card_number']);
                }
            ?>
            <input name = "card_number" class='input-field' required ></input>

            
            Card Holder Name 
            <input name = "card_holder"class='input-field' required></input>
            <?php 
                if (isset($_SESSION['card_holder_error'])) {
                    echo"<div style='color: red; margin-top: -0.5rem; '>". $_SESSION['card_holder_error']."</div>";
                    unset($_SESSION['card_holder_error']);
                }
            ?>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input class='input-field' required></input>
                </td>
                <td> <div style="margin-top: 0.5rem">CVC</div>
                  <input class='input-field' type="password" name = 'cvv' required ></input>
                 <?php 
                        if (isset($_SESSION['cvv'])) {
                            echo "<div style='color: red; margin-top: -0.5rem; position: fixed'>".$_SESSION['cvv']."</div>";
                            unset($_SESSION['cvv']);
                        } 
                 ?>
    
                </td>
              </tr>
            </table>
            </div>
          </table>

          
            <button class='pay-btn' type = "submit" name="checkout" style="margin-bottom: 3.5rem;">Checkout</button>
          <br><br>
           
           
          
         
          
          </form>
         <button style="margin-top: 4rem; width: 22rem; height: 2.3rem; font-size: 1.2rem; color: white;  border:none;
  background:#22b877; border-radius: 10px; cursor: pointer;" id = "payLaterButton">Pay Later </button>
        </div>
      </div>
</div>

   <script>
    document.getElementById('payLaterButton').addEventListener('click', function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Redirect to final.php with the id parameter
        window.location.href = 'final.php?id=1';
    });
</script>

<script>
        document.getElementById("payLaterButton").addEventListener("click", function () {
            var form = document.getElementById("myForm");
            var elements = form.elements;

            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                if (element.hasAttribute("required")) {
                    element.removeAttribute("required");
                }
            }
        });
</script>

  <script src="payment.js"></script>  
</body>
</html>