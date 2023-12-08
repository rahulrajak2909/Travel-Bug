<?php

require 'connect.php'; // Include your database connection or other necessary includes

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    $query = "SELECT c_file from complaint_record where cid = '$cid'";
    $r1 = mysqli_query($conn, $query);

    if ($r1 && mysqli_num_rows($r1) > 0) {
        $logo = mysqli_fetch_assoc($r1);
        $file = 'upload/' . $logo['c_file'];

        if (file_exists($file)) {
            // Set the appropriate content type for the download (in this case, it's a generic binary file)
            header('Content-Type: application/octet-stream');
            // Specify the file name for the download
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            // Send the file to the user
            readfile($file);
            exit; // Exit to prevent any additional output from the script
        } else {
            // File not found, handle this error accordingly
            echo "File not found.";
        }
    } else {
        // No matching record found in the database, handle this error accordingly
        echo "Complaint record not found.";
    }
} else {
    // Handle the case when $_GET['cid'] is not set
    echo "No complaint ID provided.";
}




 // // $file = basename($_GET['c_file']); // Sanitize the file input to prevent directory traversal attacks

    // // // Define the file path
    // // $file_path = 'upload/'.$file;

    // // // Check if the file exists
    // // if (file_exists($file_path)) {
    // //     // Set the headers for file download
    // //     header('Content-Description: File Transfer');
    // //     header('Content-Type: application/octet-stream');
    // //     header('Content-Disposition: attachment; filename="' . $file . '"'); // Use the sanitized file name
    // //     header('Content-Length: ' . filesize($file_path));

    // //     // Flush the output buffer to ensure the file is downloaded properly
    // //     ob_clean();
    // //     flush();

    // //     // Read the file and output it to the browser
    // //     readfile($file_path);

    //     exit;

    ?>