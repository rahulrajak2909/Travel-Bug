<?php 
    require 'connect.php';
    if(isset($_GET['pname'])) {
        $pname = $_GET['pname'];

        $query = "DELETE FROM package_record WHERE pname = '$pname'";
        $query2 = "DELETE FROM package_images WHERE pname = '$pname'";

        $r1 = mysqli_query($conn, $query);
        $r2 = mysqli_query($conn, $query2);

        if ($r1) {
           echo '<script>alert("' . $pname . ' Package Deleted successfully!!!!!!!"); window.location.href = "admin_main.php";</script>';
        } else {
            echo "Something Gone wrong!!!";
        }

    } else {
        echo "pname is fetched incorrectly!!";
    }





 
    
?>