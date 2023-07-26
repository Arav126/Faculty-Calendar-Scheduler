<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "faculty_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


// $sname= "localhost";
// $unmae= "root";
// $password = "";

// $db_name = "tests";

// $conn = new mysqli($sname, $unmae, $password, $db_name);

// if (!$conn) {
// 	die(mysqli_error($conn));
// }