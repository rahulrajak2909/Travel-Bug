<?php
require 'connect.php';

if (isset($_POST['submit'])) {
    $pname = $_POST['pname'];
    $new_ptype = $_POST['ptype'];
    $new_duration = $_POST['duration'];
    $new_description = $_POST['description'];
    $new_price = $_POST['price'];
    $new_logo = $_FILES['logo_file']['name'];

    // Prepare the SQL statement
    $query = "UPDATE package_record SET ptype = ?, duration = ?, description = ?, price = ?, logo = ? WHERE pname = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $new_ptype, $new_duration, $new_description, $new_price, $new_logo, $pname);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            move_uploaded_file($_FILES['logo_file']['tmp_name'], $new_logo);
            echo '<script>alert("' . $pname . ' Package Updated successfully!!!!!!!"); window.location.href = "admin_main.php";</script>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
}
?>
