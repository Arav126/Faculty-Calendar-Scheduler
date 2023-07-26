<?php
// Establish database connection
session_start(); 
include "db_conn.php";

// Prepare the SQL statement
$name = $_POST['name'];

$leave_type = $_POST['leave_type'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$reason = $_POST['reason'];


$sql = "INSERT INTO leave_requests (name,  leave_type, start_date, end_date, reason, status)
        VALUES ('$name', '$leave_type', '$start_date', '$end_date', '$reason', 'Pending')";


if ($conn->query($sql) === TRUE) {
    // Insertion successful, redirect back to home page

    header("Location: staff_leave_display.php");
    exit(); // Make sure to call exit after the header to prevent further execution
} 


// Close the database connection
$conn->close();
?>
