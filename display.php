
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['namey'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$namey = validate($_POST['namey']);




		$sql = "SELECT * FROM faculty_users WHERE name='$namey' ";

		$result = mysqli_query($conn, $sql);


		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			// print_r($row);
			
		



				if ($row['name'] === $namey  ){
					$_SESSION['namey'] = $row['name'];
					header("Location: staff_display.php"); // Redirect to the admin home page
						exit();
					// Determine the user's role (you need to have a 'role' column in your database table)
			
					
				}
			}
			else{ 
				header("Location:staff_timetable.php ");
				exit();
			}
		}

	else{
	header("location:staff_timetable.php");
	exit();
	
}	
			

