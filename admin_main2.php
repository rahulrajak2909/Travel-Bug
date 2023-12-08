<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'tour';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (isset($_POST['submit'])) {
  // Retrieve form data
  $ptype = $_POST["ptype"];
  $pname = $_POST["package"];
  $duration = $_POST["duration"];
  $description =htmlspecialchars( $_POST["description"]);
  $price = $_POST["price"];
$logo = $_FILES['logo_file']['name'];





$q1 = "INSERT INTO package_record (ptype, pname, duration, description, price, logo) VALUES ('$ptype', '$pname', '$duration', '$description', '$price', '$logo')";  

   $r1 = mysqli_query($conn, $q1);
   if ($r1) {
    move_uploaded_file($_FILES['logo_file']['tmp_name'], "$logo");
   }    
}


$images = $_FILES['files']['name'];

for ($i = 0; $i < count($images); $i++) {
    $image = $images[$i];
    $q2 = "INSERT INTO package_images (pname, images) VALUES ('$pname', '$image')";
    $r2 = mysqli_query($conn, $q2);
    if ($r2) {
        move_uploaded_file($_FILES['files']['tmp_name'][$i], $image);
    }
}

echo '<script>alert("Package Added successfully."); window.location.href = "admin_main.php";</script>';

   
?>