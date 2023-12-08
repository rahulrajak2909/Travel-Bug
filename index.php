<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="user_main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <!-- Owl Carousel css-->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <!-- Owl Carousel css-->
        <!-- jquery css-->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  
</head>
<style>
  /* for slider */



  .popular {
            color: white;
        }

        /*---------image_hover------*/
        .popular .box {
            position: relative;
            background: #221F1F;
            width: 14rem;
            cursor: pointer;
           margin-right:20rem;
        }

        .popular .box .imgBox {
            position: relative;
            /* height: 200px; */
            height: 20rem;
            overflow: hidden;
            /* margin-bottom: 0.5rem; */
        }

        .popular .box .imgBox img {
            width: 14rem;
            height: 20rem;
            transition: 0.5s;
        }

        .popular .box:hover .imgBox img {
            opacity: .6;
            transform: scale(1.2);
        } 

        .popular .box .content {
            position: absolute;
            width: 100%;
            top: 30%;
            left: 40%;
            z-index: 2;
        }

        .popular .box .content i {
            transition: 0.5s;
            opacity: 0;
            visibility: hidden;
        }

        .popular .box:hover .content i {
            opacity: 1;
            visibility: visible;
        }

        .popular #palybtn {
            width: 60px;
            height: 60px;
            line-height: 60px;
        }

        /*----icon------*/
        .popular .icon {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .popular .icon i {
            font-size: 20px;
            margin: 10px;
        }

        /*----text------*/
        .popular .text {
            padding: 20px;
        }

        .popular .time {
            margin: 0;
        }

        .popular .time a {
            color: #E50916;
        }

        .owl-s .dots span {
            font-size: 5rem;
            color: red;
        }

        .owl-nav span {
            font-size: 7rem;
            color: red;

        }

        .owl-prev,
        .owl-next {
            position: absolute;
            top: 25%;

        }

        .owl-prev {
            left: -20px;
            margin-left: -1rem;
        }

        .owl-next {
            right: -20px;
            margin-right: 0rem;

        }

        /* EDIT PROFILE CSS */

        .title {
            position: relative;
            font-size: 2rem;
            font-weight: 500;
            color: #333;
            margin-top: 2rem;
            margin-left: 5rem;
        }

        .title:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 25px;
            background: #7d2ae8;
        }
</style>

<body>
  <div class="head">
    <span><ion-icon name="call-outline"></ion-icon>
      <div style="margin-left: 1.5rem; margin-top: -1.5rem"> Toll Free - 1800 108 2234</div>
    </span>
    <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsLWQCVZKWjbzllDGPWCvgxcCDSBbDbdqdRNbfhpXWKvXlJzTkqpcLlwSRQqpPWZGmVvNrVG"
      target="_blank" style="text-decoration: none; color:white;"><span><ion-icon name="mail-open-outline"></ion-icon>
        <div style="margin-left: 1.5rem; margin-top: -1.5rem; ">support@travelbug.com</div></a>
    </span>
    <span style="margin-left: 48rem; cursor: pointer"><a href="user_login.php" style="text-decoration: none; color: white" target="_blank"><ion-icon name="people-circle-outline"></ion-icon><div style="margin-left: 1.5rem; margin-top: -1.5rem">USER</div></span></a>
    <a href="admin_login.php" style="text-decoration: none; color: white" target="_blank"><span><ion-icon
          name="person-circle-outline"></ion-icon>
        <div style="margin-left: 1.5rem; margin-top: -1.5rem"> ADMIN</div></a>
    </span>
  </div>
  <div>
    <div> <img src="image/tour1.jpg" style="width: 12rem"></div>
    <div style="margin-left: 2rem;"><img src="image/travelbug.png"
        style="width: 20rem; margin-left: 30rem; margin-top: -12rem"></div>
    <div style="margin-top: -2rem;"><img src="image/karo.png"
        style="width: 8rem; margin-left: 50rem; margin-top: -14rem"></div>
    <div style="margin-top: -1rem;"><img src="image/tour2.jpg"
        style="width: 15rem; margin-left: 78rem; margin-top: -10rem"></div>
  </div>
  <!-- <div style="margin-left: 1.2rem;">
        ________________________________________________________________________________________________________________________________________________________________________________________
    </div> -->
<div class="main">

  <div class="container" style="margin-left: -0.5rem;">
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="image/t1.jpg" style="height: 32rem;"></div>
        <div class="swiper-slide"><img src="image/t6.htm" style="height: 32rem;"></div>
        <div class="swiper-slide"><img src="image/t3.jpg" style="height: 32rem;"></div>
        <div class="swiper-slide"><img src="image/t4.jpg" style="height: 32rem;"></div>
        <div class="swiper-slide"><img src="image/t5.jpg" style="height: 32rem;"></div>
        <div class="swiper-slide"><img src="image/t2.jpg" style="height: 32rem;"></div>

      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->

    </div>
  </div>
  <div class="way">
    <span>Way to Holidays...</span>
  </div>
  <div style="margin-left: 40.7rem; margin-top: -0.5rem; color:rgb(102, 91, 91)">____________________</div>


  <div class="bus">
    <img src="image/Bus_logo copy.jpg" style="width: 15rem; margin-left: 10rem; margin-top: 0rem">
  </div>

  <div><img src="image/logo2.png" style="margin-left: 75rem; margin-top: -12rem; width: 15rem"></div>





  <div class="india">
    <span>Trending Indian Destinations</span>
  </div>
  <div style="margin-left: 35rem; margin-top: -0.5rem; color: darkblue">
    __________________________________________________</div>
  <DIV class="indian">

  <section class="popular mtop">
            <div class="container" style=" width:90rem; height:40vh;">

                <!-- <div class="title">Recommended Movies</div><br> -->

                <div class="owl-carousel owl-theme">
  <?php
  // session_start();
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'tour';
        $conn = mysqli_connect($dbhost, $dbuser, '', $db);

        $sql = "SELECT pname, duration, price, logo FROM package_record where ptype = 'Indian Destination' ";
        
        $q = mysqli_query($conn, $sql);
        $query = mysqli_fetch_all($q, MYSQLI_ASSOC);
      
        foreach ($query as $que) {
// new one
          echo "<div class='box' style='margin-left:2rem; margin-right:10rem;'>";
          echo "<div class='imgBox'>";


          echo "<a href='pkg_description2_nolog.php?pname=" . urlencode($que['pname']) . "' style='text-decoration: none; '  target='_blank'>";

          $_SESSION['pname']= $que['pname'];

          echo "<div style='margin-left: rem; color: #eaeaea; width:10rem;'>";

          echo "<div>" . "<img src='" . $que['logo'] . "' style='width: 14rem; margin-left: rem'>" . "</div>";
          // echo "<img src='" . $que['logo'] . "'>";

          echo "<div style='margin-left: 1rem; font-size: 1.4rem; margin-top: -17rem; font-weight: bold; font-family: \"Trebuchet MS\", \"Lucida Sans Unicode\", \"Lucida Grande\", \"Lucida Sans\", Arial, sans-serif'>" . $que['pname'] . "</div>";

          echo "<div style='margin-left: 1rem; font-size: 1.4rem; margin-top: 11.8rem; font-family: \"Trebuchet MS\", \"Lucida Sans Unicode\", \"Lucida Grande\", \"Lucida Sans\", Arial, sans-serif; font-weight: bold'>" . $que['price'] . "</div>";

          echo "</div>";
          echo "</a>";

          echo "</div>";
          echo "</div>";
      }
?>
</div>
            </div>

        </section>

  </DIV>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: -300,
        nav: true,  // Add this line to enable navigation
        dots: false,
        responsive: {
            411: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
});
</script>









  <br><br><br>
  <div class="india">
    <span>Trending International Destinations</span>
  </div>
  <div style="margin-left: 33rem; margin-top: -0.5rem; color: darkblue">
    _________________________________________________________</div>

  <DIV class="inter">
  <section class="popular mtop">
            <div class="container" style=" width:90rem; height:40vh;">

                <!-- <div class="title">Recommended Movies</div><br> -->

                <div class="owl-carousel owl-theme">
  <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'tour';
        $conn = mysqli_connect($dbhost, $dbuser, '', $db);

        $sql = "SELECT pname, duration, price, logo FROM package_record where ptype = 'International Destinations' ";
        
        $q = mysqli_query($conn, $sql);
        $query = mysqli_fetch_all($q, MYSQLI_ASSOC);

        foreach($query as $que) {

          echo "<div class='box' style='margin-left:2rem; margin-right:10rem;'>";
          echo "<div class='imgBox'>";




          echo "<a href='pkg_description2_nolog.php?pname=" . urlencode($que['pname']) . "' style='text-decoration: none; 'target='_blank'>";
         echo "<div style='margin-left: rem; color: #eaeaea'>";
          echo "<div>"."<img  src = '".$que['logo']."' style='width: 14rem' >"."</div>"; 
          echo "<div style='margin-left: 1rem; font-size: 1.4rem; margin-top: -17rem ;font-weight: bold; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif'>".$que['pname']."</div>";
          echo "<div style='margin-left: 1rem; font-size: 1.4rem; margin-top: 11.8rem ;font-family: \"Trebuchet MS\", \"Lucida Sans Unicode\", \"Lucida Grande\", \"Lucida Sans\", Arial, sans-serif; font-weight: bold'>".$que['price']."</div>";
          echo "</div>";
          echo "</a>";

          echo "</div>";
          echo "</div>";
       
        }
?>

</div>
            </div>

        </section>

  </DIV>


  <br><br><br>
  <div class="india">
    <span>Travelbug Special</span>
  </div>
  <div style="margin-left: 38rem; margin-top: -0.5rem; color: darkblue">
    ____________________________________</div>


  <DIV class="inter">
  <section class="popular mtop">
            <div class="container" style=" width:90rem; height:40vh;">

                <!-- <div class="title">Recommended Movies</div><br> -->

                <div class="owl-carousel owl-theme">
  <?php
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'tour';
        $conn = mysqli_connect($dbhost, $dbuser, '', $db);

        $sql = "SELECT pname, duration, price, logo FROM package_record where ptype = 'Travelbug Special' ";
        
        $q = mysqli_query($conn, $sql);
        $query = mysqli_fetch_all($q, MYSQLI_ASSOC);

        foreach($query as $que) {
          echo "<div class='box' style='margin-left:2rem; margin-right:10rem;'>";
          echo "<div class='imgBox'>";


          echo "<a href='pkg_description2_nolog.php?pname=" . urlencode($que['pname']) . "' style='text-decoration: none; 'target='_blank'>";
         echo "<div style='margin-left: rem; color: #eaeaea'>";
          echo "<div>"."<img  src = '".$que['logo']."' style='width: 14rem' >"."</div>"; 
          echo "<div style='margin-left: 1rem; font-size: 1.4rem; margin-top: -17rem ;font-weight: bold; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif'>".$que['pname']."</div>";
          echo "<div style='margin-left: 1rem; font-size: 1.4rem; margin-top: 11.8rem ;font-family: \"Trebuchet MS\", \"Lucida Sans Unicode\", \"Lucida Grande\", \"Lucida Sans\", Arial, sans-serif; font-weight: bold'>".$que['price']."</div>";
          echo "</div>";
          echo "</a>";

          echo "</div>";
          echo "</div>";
       
        }
?>
</div>
            </div>

        </section>


  </DIV>

  
  <br><br><br>
  <div
    style="margin-left: 38REM; font-size: 1.6rem; color: rgb(18, 18, 153); font-weight: bold; font-family: sans-serif;">
    THE BEAUTIFUL JOURNEY</div>
  <div style="margin-left: 36rem; margin-top: -0.5rem; color: darkblue">
    ____________________________________________________</div>
  
  <video src="tour_video.mp4" style="width: 50rem;margin-top: 2rem; margin-left: 3rem" autoplay loop muted>
  </video>
  <div style="margin-top: -1.15rem;"><img src="image/couple.jpg"
      style="width: 38rem; height: 28.15rem; margin-left: 54rem; margin-top: -40rem"></div>

  <br><br>
  

  <div><img src="image/ship.jpg" style="margin-left: 3rem; width: 89rem; height: 27rem"></div>



  <!-- footer -->

  <div class="full">
    <div class="explor">
      <div style="color: white;">CONTACT</div>
      <div style="margin-left: -3.5rem; color: rgb(243, 237, 237)">_________________________</div>
    </div>
    <div class="footer">
      <SPAN style="font-size:1.5rem">1800-565-1564</SPAN>
    </div> <br>
    <div style="font-size: 1.7rem; margin-left: 7.8rem; color: rgb(224, 217, 217)">Support@trivago.com</div>

    


    <div style="margin-left: 3rem; margin-top: 5rem; width: 40rem; font-size: 1.3rem; color: white ">© Copyright © 2023
      Trivago Corporate Identification no: 2001PLC131691</div>
  </div>
  <div style="color: white; margin-left: 34rem; margin-top: -24rem; font-size: 1.2rem; ">PLAN YOUR HOLIDAYS WITH OUR
    ASSISTANCE, </div>




 

  
  <div style="margin-top: 1rem; margin-left: 25rem"><img src="image/assistant.webp" style="width: 20rem; margin-left: 45rem; margin-top: 5rem" ></div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      autoplay: {},
      loop: true,

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });
  </script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>