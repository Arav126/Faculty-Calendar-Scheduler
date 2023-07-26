<?php
session_start();
include "db_conn.php";

if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_SESSION['name'];
        $date = $_POST['date'];
        $reason = $_POST['reason'];
        $slot = $_POST['slot'];
        $class = $_POST['class'];

        // Insert the form values into the database
        // Customize this query according to your database structure
        $sql = "INSERT INTO appointments (name, date, reason, slot,class) VALUES ('$name', '$date', '$reason', '$slot', '$class')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // Show success alert message using JavaScript

            header("Location: staff_notifications.php");
     
            exit();
        } else {
            // Show error alert message using JavaScript
            echo '<script>alert("Error inserting  details: ' . mysqli_error($conn) . '");</script>';
        }
    }
} else {
    // Show error alert message using JavaScript
    echo '<script>alert("Session not set. Make sure you are logged in.");</script>';
}
?>
