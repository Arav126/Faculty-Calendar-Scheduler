<?php
session_start();
include "db_conn.php";

// Get the leave ID from the URL query parameter
$leaveId = $_GET['leaveId'];

// Update the status to "accept" in the database
$sql = "UPDATE leave_requests SET status='rejected' WHERE leave_id='$leaveId'";
if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();
    // Redirect to ab.php
    header("Location: hod_leave.php");
    exit(); // Make sure to call exit after the header to prevent further execution
} 


// Close the database connection
$conn->close();
?>
