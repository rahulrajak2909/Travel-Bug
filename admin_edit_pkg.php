<?php 
    require 'connect.php';
    if (isset($_GET['pname'])) {
   $pname =  $_GET['pname'];
   $query =  "SELECT ptype, description, duration, price, logo FROM package_record WHERE pname = '$pname'";

   $data = mysqli_query($conn, $query);

  $q_data = mysqli_fetch_assoc($data);

    } else {
        echo "Get funtion is not working correctly!!!";
    }

  


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="admin_main.css">
    
    <style>
        .demo {
            font-family: "Poppins", sans-serif;
            color: black;
        }

        .panel {
            background: #53a8b6;
          
            padding: 0;
            /* width : 75%; */
            margin-left: 18rem;
            /* margin-top: -3rem; */
            /* border-radius: 10px; */
            border: none;
            box-shadow: white;
            font-size: 1.5rem;
        }

        .panel .panel-heading {
            /* padding: 20px 15px; */
            border-radius: 10px 10px 0 0;
            margin: 0;
        }

        .panel .panel-heading .title {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 40px;
            margin: 0;
        }

        .panel .panel-heading .btn {
            color: rgba(255, 255, 255, 0.5);
            background: transparent;
            font-size: 16px;
            text-transform: capitalize;
            border: 2px solid #fff;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .btn:hover {
            color: #fff;
            text-shadow: 3px 3px rgba(255, 255, 255, 0.2);
        }

        .panel .panel-heading .form-control {
            color: #fff;
            background-color: transparent;
            width: 35%;
            height: 40px;
            border: 2px solid #fff;
            border-radius: 20px;
            display: inline-block;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            outline: none;
        }

        .panel .panel-heading .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
            font-size: 15px;
            font-weight: 500;
        }

        .panel .panel-body {
            padding: 0;
            /* margin-left:25rem; */
            /* background: black; */
            width: 37%;
        }

        .panel .panel-body .table thead tr th {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 12px;
            border: none;
        }

        .panel .panel-body .table tbody tr td {
            color: #fff;
            font-size: 15px;
            padding: 10px 12px;
            vertical-align: middle;
            border: none;
        }

        .panel .panel-body .table tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .panel .panel-body .table tbody .action-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .panel .panel-body .table tbody .action-list li {
            display: inline-block;
            margin: 0 5px;
        }

        .panel .panel-body .table tbody .action-list li a {
            color: #fff;
            font-size: 15px;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:hover {
            text-shadow: 3px 3px 0 rgba(255, 255, 255, 0.3);
        }

        .panel .panel-body .table tbody .action-list li a:before,
        .panel .panel-body .table tbody .action-list li a:after {
            content: attr(data-tip);
            color: #fff;
            background-color: #111;
            font-size: 12px;
            padding: 5px 7px;
            border-radius: 4px;
            text-transform: capitalize;
            display: none;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -32px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:after {
            content: '';
            height: 15px;
            width: 15px;
            padding: 0;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -18px;
            z-index: -1;
        }

        .panel .panel-body .table tbody .action-list li a:hover:before,
        .panel .panel-body .table tbody .action-list li a:hover:after {
            display: block;
        }

        .panel .panel-footer {
            color: #fff;
            background-color: transparent;
            padding: 15px;
            border: none;
        }

        .panel .panel-footer .col {
            line-height: 35px;
        }

        .pagination {
            margin: 0;
        }

        .pagination li a {
            color: #fff;
            background-color: transparent;
            border: 2px solid transparent;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 31px;
            width: 35px;
            height: 35px;
            padding: 0;
            margin: 0 3px;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .pagination li a:hover {
            color: #fff;
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.2);
        }

        .pagination li a:focus,
        .pagination li.active a,
        .pagination li.active a:hover {
            color: #fff;
            background-color: transparent;
            border-color: #fff;
        }

        .pagination li:first-child a,
        .pagination li:last-child a {
            border-radius: 50%;
        }

        @media only screen and (max-width:767px) {
            .panel .panel-heading .title {
                text-align: center;
                margin: 0 0 10px;
            }

            .panel .panel-heading .btn_group {
                text-align: center;
            }
        }

        thead#th {
            font-family: "Poppins", sans-serif;
            font-size: 10rem;
           
        }

        .i {
            font-size: 2rem;
            border-right: 1px solid #ffffff;
            color: white;
            width: 3rem;
        }

        .g {
            font-size: 1.5rem;
            border-right: 1px solid #ffffff;
            color: white;
            width: 14rem;
        }

        .c {
            font-size: 1.5rem;
            border-right: 1px solid #ffffff;
            color: white;
            width: 15rem;
        }

        .e {
            font-size: 1.5rem;
            color: white;
            width: 12rem;
            border-right: 1px solid #ffffff;
        }
        .m {
            font-size: 1.5rem;
            color: white;
            width: 20rem;
            border-right: 1px solid #ffffff;
        }
        .n {
            font-size: 1.5rem;
            color: white;
            /* width: rem; */
            border-right: 1px solid #ffffff;
        }



        .pkg{
            font-size: 1.5rem;
            color: white;
            /* width: 35rem; */
            border-right: 1px solid #ffffff;
        }
        .name{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .phone{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .email{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .date{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .total{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .emer{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .add{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }
        .paye{
            font-size: 1.5rem;
            color: white;
            width: 35rem;
            border-right: 1px solid #ffffff;
        }

        /* response css */

        .message {
            border: none;
            outline: none;
            resize: none;
            background: #eee;
            padding: 20px;
            border-radius: 6px;
            width: 10rem;
            font-size: 100%;
            margin-right: 8rem;
        }

        .submitt {
          
       
                    color: #fff;
                    padding: 15px 25px;
                    background-color: #38D2D2;
                    background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 66% at 26% 20%, rgba(255, 255, 255, 0.55) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
                    box-shadow: inset -3px -3px 9px rgba(255, 255, 255, 0.25), inset 0px 3px 9px rgba(255, 255, 255, 0.3), inset 0px 1px 1px rgba(255, 255, 255, 0.6), inset 0px -8px 36px rgba(0, 0, 0, 0.3), inset 0px 1px 5px rgba(255, 255, 255, 0.6), 2px 19px 31px rgba(0, 0, 0, 0.2);
                    border-radius: 14px;
                    font-weight: bold;
                    font-size: 16px;
                    border: 0;
                    user-select: none;
                    -webkit-user-select: none;
                    touch-action: manipulation;
                    cursor: pointer;
                    width: 6rem;
                    margin-left:-7rem;
                    /* margin-top: 4rem; */
        }

        .submitt:hover {
            cursor: pointer;
            background: #7F69EE;
            transform: translateY(-2px);
        }

       
    </style>
</head>

<body style="background:#bac9dc">
    <div style=" border:2rem black; margin-top: -1rem; " class="main">
        <div style="margin-left:1rem"><ion-icon name="earth-outline" style="font-size:1.5rem"></ion-icon></div>
        <div style="margin-left: 3rem; font-size:1.2rem; margin-top:-1.5rem">TravelBug</div>
        <a href="index.php" style='text-decoration: none; color: white'><div style="margin-left: 86rem; font-size: 1.7rem; margin-top: -1.5rem"><ion-icon
                name="log-out-outline"></ion-icon></div>
        <div style="margin-left: 89rem; font-size: 1.2rem; margin-top: -2rem">Logout</div></a>
    </div>

    <!-- For side panel -->
    
        <div style="margin-bottom: -2rem; padding: 1rem 1.5rem 30rem 1rem ; margin-right: 79rem;  margin-left: -1rem; border-right: 1px solid black; font-family: Optima, sans-serif; background-color:white; margin-top: 0rem; cursor:pointer;  ">

            <div style="margin-top: -2rem; margin-left: 1.8rem">
            <img src="image/travelbug.png" style="width: 10rem; height:7rem; margin-top: 1rem"></div>
        
            
            <div style="margin-top: 2rem; margin-left:1rem; cursor: ">
            <img src="image/admin_main.png" style="width: 4rem;"></div>
        

            <div style="margin-left: 5rem; margin-top: -2rem; font-size:1.2rem; font-weight: bold;">ADMIN</div>

            <div style=" font-size: 1.2rem; margin-left: 1.5rem;  margin-top: 3rem; cursor: pointer">

               

              

             
               
   
            
            </div> 
        </div> 
     
        


        <!--  Using JS all the pages in one place  -->
        <!-- 1. for add packages -->

        
        <form action="pkg_update_form.php" method="POST" enctype="multipart/form-data" id="add_pkg"  style=" width:40%; background-color: white;  margin-top: -40rem; border-radius:15px; margin-right: 23.5rem; margin-left: 37rem; ">
    <div>
        <div style=" margin-left: -37rem;">
            <div style="margin-left: 40rem; margin-top: -38rem;">
                <br><ion-icon name="bag-add-outline" style="font-size: 1.8rem"></ion-icon>
                <div style="margin-left: 2.5rem; font-size: 1.5rem; margin-top: -1.8rem">Edit Packages</div>
            </div>
            <br><br><br>
            <div>
                <select name="ptype" id="option" style="margin-left: 40rem; width: 31rem; font-size: 1.3rem; border-radius: 5px; color: #393e46" required>
                    <option>Select</option>
                    <option value="Indian Destination" <?php if ($q_data['ptype'] == "Indian Destination") echo "selected" ?> >Indian Destinations</option>
                    <option value="International Destinations" <?php if ($q_data['ptype'] == "International Destinations") echo "selected" ?>>International Destinations</option>
                    <option value="Travelbug Special" <?php if ($q_data['ptype'] == "Travelbug Special") echo "selected" ?>>Travelbug Special</option>
                </select>
            </div>
            <br>
            <div><input type="text" name="duration" placeholder="Duration" style="margin-left: 56rem; font-size: 1.2rem; border-radius: 5px" value="<?php  echo $q_data['duration'] ?>" required></div>
            <div style="margin-top: -1.7rem">
                <input type="text" placeholder="Package Name" name="pname" style="margin-left: 40rem; font-size: 1.2rem; border-radius: 5px;" value="<?php echo $pname ?>" required>
            </div>
            <br>
            <div>
                <input type="text" placeholder="description" name="description" style="margin-left: 40rem; font-size: 1.2rem; border-radius: 5px; width: 30.8rem; height: 7rem" value="<?php  echo $q_data['description'] ?>">
            </div>
            <br>
            <div style="margin-top: -0.5rem">
                <input type="file" value="<?php echo basename($q_data['logo']); ?>" style="margin-left: 56rem; font-size: 1.2rem" name="logo_file">
            </div>
            <div style="margin-top: -1.5rem">
                <div style="margin-left: 52rem; font-size: 1.2rem;">Logo</div>
            </div>
            <div style="margin-top: -1.5rem ">
                <input type="text" placeholder="Price" name="price" style="margin-left: 40rem; font-size: 1.2rem; width: 10rem; border-radius: 5px;" value="<?php  echo $q_data['price'] ?>">
            </div>
           
            <br>
           
            <br>
            <br>
            <button type="submit" name="submit" style="margin-left: 40rem; font-size: 1.4rem; border-radius: 5px; width: 31rem; color: white; background-color: #2c786c; cursor: pointer">Submit</button>
            <br><br><br>
        </div>
    </div>
</form>

    
         
       
       

      




   


<script src="admin_main.js"></script>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>