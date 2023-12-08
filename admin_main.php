<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-Home</title>
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
            padding: 10px 8px;
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
    
        <div style="margin-bottom: -2rem; padding: 1rem 1.5rem 15.9rem 1rem ; margin-right: 79rem;  margin-left: -1rem; border-right: 1px solid black; font-family: Optima, sans-serif; background-color:white; margin-top: 0rem; cursor:pointer;  ">

            <div style="margin-top: -2rem; margin-left: 1.8rem">
            <img src="image/travelbug.png" style="width: 10rem; height:7rem; margin-top: 1rem"></div>
        
            
            <div style="margin-top: 2rem; margin-left:1rem; cursor: ">
            <img src="image/admin_main.png" style="width: 4rem;"></div>
        

            <div style="margin-left: 5rem; margin-top: -2rem; font-size:1.2rem; font-weight: bold;">ADMIN</div>

            <div style=" font-size: 1.2rem; margin-left: 1.5rem;  margin-top: 3rem; cursor: pointer">

               <div id="user_detail"> <ion-icon name="people-circle-outline" style="font-size: 1.6rem;"></ion-icon><div style="margin-left: 2rem; margin-top:-1.6rem">User Details</div></div> <br>

               <div id="pkg"> <ion-icon name="bookmarks-outline" style="font-size: 1.6rem;"></ion-icon> <div style="margin-left: 2rem; margin-top:-1.6rem; cursor: pointer">Packages</div> </div><br>

               <div id="Add_pkg" style="cursor: pointer"> <ion-icon name="duplicate-outline" style="font-size: 1.6rem;"></ion-icon><div style="margin-left: 2rem; margin-top:-1.6rem; cursor: pointer">Add Packages</div></div> <br>

               <div id="booking" style="cursor: pointer"> <ion-icon name="boat-outline" style="font-size: 1.6rem;"></ion-icon><div style="margin-left: 2rem; margin-top:-1.6rem; cursor: pointer">Booking Details</div></div> <br>

               
               <div > <ion-icon name="help-circle-outline" style="font-size: 1.6rem;"></ion-icon>
               <div style="margin-left: 2rem; margin-top:-1.6rem; cursor: pointer"id="complaint_detail" >Complaint Details</div> </div>
              
   
            
            </div> 
        </div> 
     
        


        <!--  Using JS all the pages in one place  -->
        <!-- 1. for add packages -->

        
        <form action="admin_main2.php" method="POST" enctype="multipart/form-data" id="add_pkg"  style=" width:40%; background-color: white;  margin-top: -40rem; border-radius:15px; margin-right: 23.5rem; margin-left: 37rem; ">
    <div>
        <div style=" margin-left: -37rem;">
            <div style="margin-left: 40rem; margin-top: -38rem;">
                <br><ion-icon name="bag-add-outline" style="font-size: 1.8rem"></ion-icon>
                <div style="margin-left: 2.5rem; font-size: 1.5rem; margin-top: -1.8rem">Add Packages</div>
            </div>
            <br><br><br>
            <div>
                <select name="ptype" id="option" style="margin-left: 40rem; width: 31rem; font-size: 1.3rem; border-radius: 5px; color: #393e46" required>
                    <option>Select</option>
                    <option value="Indian Destination">Indian Destinations</option>
                    <option value="International Destinations">International Destinations</option>
                    <option value="Travelbug Special">Travelbug Special</option>
                </select>
            </div>
            <br>
            <div><input type="text" name="duration" placeholder="Duration" style="margin-left: 56rem; font-size: 1.2rem; border-radius: 5px" required></div>
            <div style="margin-top: -1.7rem">
                <input type="text" placeholder="Package Name" name="package" style="margin-left: 40rem; font-size: 1.2rem; border-radius: 5px;" required>
            </div>
            <br>
            <div>
                <input type="text" placeholder="Description" name="description" style="margin-left: 40rem; font-size: 1.2rem; border-radius: 5px; width: 30.8rem; height: 7rem">
            </div>
            <br>
            <div style="margin-top: -0.5rem">
                <input type="file" value="Logo" style="margin-left: 56rem; font-size: 1.2rem" name="logo_file">
            </div>
            <div style="margin-top: -1.5rem">
                <div style="margin-left: 52rem; font-size: 1.2rem;">Logo</div>
            </div>
            <div style="margin-top: -1.5rem ">
                <input type="text" placeholder="Price" name="price" style="margin-left: 40rem; font-size: 1.2rem; width: 10rem; border-radius: 5px;">
            </div>
            <div style="margin-top: 2rem">
                <input type="file" style="margin-left: 56rem; font-size: 1.2rem; border-radius: 5px;" id="fileUpload" name="files[]" multiple accept="image/*">
            </div>
            <br>
            <div style="margin-top: -2.7rem">
                <input value="Add Images" style="margin-left: 40rem; width: 6rem; font-size: 1rem; color: white; background-color: darkred; cursor: pointer" type="button" onclick="addFileInput()">
                <button type="button" style="margin-left: 5rem; font-size: 1rem; color: white; background-color: darkgreen; cursor: pointer" onclick="removeLastFileInput()">Delete</button>
            </div>
            <br>
            <br>
            <button type="submit" name="submit" style="margin-left: 40rem; font-size: 1.4rem; border-radius: 5px; width: 31rem; color: white; background-color: #2c786c; cursor: pointer">Submit</button>
            <br><br><br>
        </div>
    </div>
</form>

    
         
       
           <!-- 2.for user details  -->

            

        <div class="container" >
            <div class="row">
                <div style="font-family: 'Poppins', sans-serif; ">
                    <div class="panel">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body table-responsive" id="user">
                            <table class="table" 
                                style="width: 77rem; height: 3rem;text-align: center;font-size: 1.6rem; margin-top: -43rem;  ">
                                <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $db = 'tour';

                                $conn = mysqli_connect($dbhost, $dbuser, '', $db);

                                $query = "SELECT * FROM user_record ";
                                $data = mysqli_query($conn, $query);

                                $total = mysqli_num_rows($data);

                                if ($total != 0) { ?>
                                    <thead id="th">
                                        <tr>
                                            <th class="i">S.No</th>
                                            <th class="g">Name</th>
                                            <th class="c">Phone</th>
                                            <th class="e">Email</th>

                                        </tr>

                                    <tbody>
                                        <?php
                                        $n = 1;
                                        while ($result = mysqli_fetch_assoc($data)) {
                                            echo "<tr> 
          <td>" . $n . "</td>
          <td>" . $result['fname'] . "</td>
          <td>" . $result['phone'] . "</td>
          <td>" . $result['email'] . "</td>
        </tr>
        </div>
        ";
                                            $n++;
                                        }
                                } else {
                                    echo "NO record found";
                                }

                                ?>
                                </tbody>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        
    

                                    <!-- 3. For complaint details -->

     
                                
        <div class="container" >
            <div class="row">
                <div style="font-family: 'Poppins', sans-serif;  ">
                    <div class="panel" >
                        <div class="panel-heading" >

                        </div>
                        <div class="panel-body table-responsive" id="com" >
                            <table class="table" 
                                style="width: 77rem; height: 3rem;text-align: center;font-size: 1.6rem; margin-top: -43rem;  ">
                                <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $db = 'tour';

                                $conn = mysqli_connect($dbhost, $dbuser, '', $db);
                                if (isset($_POST['submit_reply'])) {
                                    $feedbackId = $_POST['cid'];
                                    $reply = $_POST['reply'];

                                    // Use prepared statements to prevent SQL injection
                                    $updateSql = "UPDATE complaint_record SET reply = ? WHERE cid = ?";
                                    $stmt = mysqli_stmt_init($conn);

                                    if (mysqli_stmt_prepare($stmt, $updateSql)) {
                                        mysqli_stmt_bind_param($stmt, 'si', $reply, $feedbackId);
                                        if (mysqli_stmt_execute($stmt)) {
                                            // echo "<script>alert('Reply added successfully.')</script>";
                                
                                            // You can also redirect the user back to the page with the feedback table here.
                                        } else {
                                            echo "<script>alert('Error occurred while adding the reply.')</script>";
                                        }
                                    }
                                }
                                
                                $query = "SELECT * FROM complaint_record ";
                                $data = mysqli_query($conn, $query);

                                $total = mysqli_num_rows($data);

                             ?>
                                    <thead id="th">
                                        <tr>
                                            <th class="i">C id</th>
                                            <th class="g">email</th>
                                            <th class="c">Category</th>
                                            <th class="e">File</th>
                                            <th class="e">Image</th>
                                            <th class="m">Messages</th>
                                            <th class="n" >Response</th>

                                        </tr>

                                    <tbody>
                                        <?php
                                     $n=1;
                                        while ($result = mysqli_fetch_assoc($data)) {

                                            $query = "SELECT reply FROM complaint_record where cid = '{$result['cid']}'";
                                            $r = mysqli_query($conn, $query);
                                             $reply = mysqli_fetch_assoc($r);

                                            echo "<tr> 
                                            <td>" . $n . "</td>
                                            <td>" . $result['email'] . "</td>
                                            <td>" . $result['c_topics'] . "</td>
                                            <td>" . $result['c_file'] . "</td>
                                            <td><a href='path_to_download_script.php?cid=".$result['cid']."'>Download</a></td>
                                            <td>" . $result['c_message'] . "</td>
                                            <td>
            <form method='post' action='admin_main.php' style='width = 10rem;'>
              <input type='hidden' name='cid' value='" . $result['cid'] . "'>
              <input  type = 'text'class='message' value = '".$reply['reply']."' name='reply' rows='2' cols='30'></input>
              <div style='margin-top: -3.5rem; margin-left: 25rem; width: 5rem; '><input class='submitt' type='submit' name='submit_reply' value='Reply !'></div>
            </form>
          </td>
                                          </tr>";
                                          
                                         $n++;
                                        }
                              
                                   
                                

                                ?>
                                </tbody>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <!-- 4. for Booking Details-->


        

        <div class="container" >
            <div class="row">
                <div style="font-family: 'Poppins', sans-serif; ">
                    <div class="panel" style="width = 90rem;">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body table-responsive" id="book">
                            <table class="table" 
                                style="width: 77rem; height: 3rem;text-align: center;font-size: 1.6rem; margin-top: -40rem;  ">
                                <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $db = 'tour';

                                $conn = mysqli_connect($dbhost, $dbuser, '', $db);

                                $query = "SELECT * FROM booking_record ";
                                $data = mysqli_query($conn, $query);

                                $total = mysqli_num_rows($data);

                                if ($total != 0) { ?>
                                    <thead id="th">
                                        <tr>
                                            <th  style="width:2rem;">Package Name</th>
                                            <th style="width:2rem;">Name</th>
                                            <th >Phone</th>
                                            <th >Email</th>
                                            <th style="width:10rem;">Date</th>
                                            <th >Total Person</th>
                                            <th>Emergency Contect</th>
                                            <th style="width:25rem;">Address</th>
                                            <th  >Payment Status</th>

                                        </tr>

                                    <tbody>
                                        <?php
                                     
                                        while ($result = mysqli_fetch_assoc($data)) {
                                            echo "<tr> 
        
          <td>" . $result['pname'] . "</td>
          <td style='width:20rem;'>" . $result['full_name'] . "</td>
          <td>" . $result['phone_no'] . "</td>
          <td>" . $result['email'] . "</td>
          <td>" . $result['date'] . "</td>
          <td>" . $result['total_person'] . "</td>
          <td>" . $result['e_contact'] . "</td>
          <td>" . $result['address'] . "</td>
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
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- 5. for Packgage show -->


        <!-- 5. for Packgage show -->


        <div class="container" style='margin-left: -1.7rem'>
        
            <div class="row">
                <div style="font-family: 'Poppins', sans-serif; ">
                    <div class="panel" style="width: 76.15rem;" >
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body table-responsive" id="pkgform">
                            <table class="table" 
                                style="width: 76.3rem; height: 3rem;text-align: center;font-size: 1.6rem; margin-top: -43rem;  ">
                                <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $db = 'tour';

                                $conn = mysqli_connect($dbhost, $dbuser, '', $db);

                                $query = "SELECT * FROM package_record ";   
                                $data = mysqli_query($conn, $query);

                                $total = mysqli_num_rows($data);

                                if ($total != 0) { ?>
                                    <thead id="th">
                                        <tr>
                                            <th  style="width:2rem;">logo</th>
                                            <th style="width:0rem;">Package Type</th>
                                            <th >Package Name</th>
                                            <th >Duration</th>
                                            <!-- <th style="width:15rem;">Description</th> -->
                                            <th > Price</th>
                                            <th > Edit</th>
                                            <th > Delete</th>
                                         

                                          

                                        </tr>

                                    <tbody>
                                       <?php
while ($result = mysqli_fetch_assoc($data)) {
    echo "<tr> 
        <td><img src=" . $result['logo'] . " style='width: 4rem'></td>
        <td style='width:20rem;'>" . $result['ptype'] . "</td>
        <td>" . $result['pname'] . "</td>
        <td>" . $result['duration'] . "</td>
        <td>" . $result['price'] . "</td>

        <td>
        <a href='admin_edit_pkg.php?pname=" . $result['pname'] . "'>
            <button class='button-91' role='button' style=' 
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
            '>Edit</button>
        </a>
    </td>

        <td>
            <a href='pkg_delete.php?pname=" . $result['pname'] . "'>
                <button class='button-91' role='button' style=' 
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
                '>Delete</button>
            </a>
        </td>

       

    </tr>";
}
} else {
    echo "NO record found";
}

?>

                                </tbody>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
       
        </div>







   <script>
        function addFileInput() {
            const fileUpload = document.getElementById('fileUpload');
            const newFileInput = document.createElement('input');
            newFileInput.type = 'file';
            newFileInput.name = 'files[]';
            newFileInput.accept = 'image/*';
            newFileInput.style.marginLeft = '56rem';
            newFileInput.style.fontSize = '1.2rem';
            newFileInput.style.borderRadius = '5px';
            fileUpload.parentElement.insertBefore(newFileInput, fileUpload.nextSibling);
        }

        function removeLastFileInput() {
            const fileInputs = document.querySelectorAll('input[name="files[]"]');
            if (fileInputs.length > 1) {
                const lastFileInput = fileInputs[fileInputs.length - 1];
                lastFileInput.remove();
            }
        }
    </script>

    <script>
             document.addEventListener("DOMContentLoaded", function() {
            var userBtn = document.getElementById("user_detail");
            var addpkgButton = document.getElementById("Add_pkg");
            var complaintButton = document.getElementById("complaint_detail");
            var bookingButton = document.getElementById("booking");
            var pkgButton = document.getElementById("pkg");

            var addpkg = document.getElementById("add_pkg");
            var udetail = document.getElementById("user");
            var cform = document.getElementById("com");
            var bookform = document.getElementById("book");
            var pkgform = document.getElementById("pkgform");

            // Initially display user details and hide other sections
            udetail.style.display = "block";
            addpkg.style.display = "none";
            cform.style.display = "none";
            bookform.style.display = "none";
            pkgform.style.display = "none";
       

            userBtn.addEventListener("click", function() {
                udetail.style.display = "block";
                addpkg.style.display = "none";
                cform.style.display = "none";
                bookform.style.display = "none";
                pkgform.style.display = "none";
            });

            addpkgButton.addEventListener("click", function() {
                addpkg.style.display = "block";
                udetail.style.display = "none";
                cform.style.display = "none";
                bookform.style.display = "none";
                pkgform.style.display = "none";
            });
            
            complaintButton.addEventListener("click", function() {
                 cform.style.display = "block";
                udetail.style.display = "none";
                addpkg.style.display = "none";
                bookform.style.display = "none";
                pkgform.style.display = "none";
               
            });
            bookingButton.addEventListener("click", function() {
                bookform.style.display = "block";
                udetail.style.display = "none";
                addpkg.style.display = "none";
                cform.style.display = "none";
                pkgform.style.display = "none";
               
            });
            pkgButton.addEventListener("click", function() {
                pkgform.style.display = "block";
                udetail.style.display = "none";
                addpkg.style.display = "none";
                cform.style.display = "none";
                bookform.style.display = "none";
               
            });
        });

    </script>


<script src="admin_main.js"></script>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>