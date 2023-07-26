
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: index.php?error=User Name is required");
		exit();
	} else if (empty($password)) {
		header("Location: index.php?error=Password is required");
		exit();
	} else {
		// hashing the password
		// $pass = md5($pass);


		$sql = "SELECT * FROM faculty_users WHERE username='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);


		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			// print_r($row);
			
		



				if ($row['username'] === $username && $row['password'] === $password ){
					$_SESSION['username'] = $row['username'];
					$_SESSION['name'] = $row['name'];
				
				
					// Determine the user's role (you need to have a 'role' column in your database table)
					$role = $row['role'];
				
					if ($role === 'staff') {
						header("Location: staff.php"); // Redirect to the admin home page
						exit();
					} elseif ($role === 'hod') {
						header("Location: hod.php"); // Redirect to the faculty home page
						exit();
					} 
					 else {
						header("Location: index.php?error=Unknown role"); // Redirect to a generic error page if the role is unknown
						exit();
					}
				}
			}
			else{ 
				header("Location: index.php?error= incorrect username or password");
				exit();
			}
		}

	}else{
	header("location: index.php");
	exit();
	
}	