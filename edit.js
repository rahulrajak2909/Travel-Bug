document.addEventListener("DOMContentLoaded", function() {
    var editbtn = document.getElementById("edit_profile");
    var bookingbtn = document.getElementById("booking_details");
    var complaintbtn = document.getElementById("complaint_details");
    var editform = document.getElementById("edit");
    var bookingform = document.getElementById("booking");
    var complaintform = document.getElementById("complaint");

    // Initially, display "Edit Profile" and hide "Booking Details" and "Complaint"
    editform.style.display = "block";
    bookingform.style.display = "none";
    complaintform.style.display = "none";

    bookingbtn.addEventListener("click", function() {
        // When "Booking Details" button is clicked, hide "Edit Profile" and "Complaint," and show "Booking Details"
        editform.style.display = "none";
        bookingform.style.display = "block";
        complaintform.style.display = "none";
    });

    editbtn.addEventListener("click", function() {
        // When "Edit Profile" button is clicked, hide "Booking Details" and "Complaint," and show "Edit Profile"
        editform.style.display = "block";
        bookingform.style.display = "none";
        complaintform.style.display = "none";
    });
    
    complaintbtn.addEventListener("click", function() {
        // When "Complaint" button is clicked, hide "Edit Profile" and "Booking Details," and show "Complaint"
        editform.style.display = "none";
        bookingform.style.display = "none";
        complaintform.style.display = "block";
    });
});
