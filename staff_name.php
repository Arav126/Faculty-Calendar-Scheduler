<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> hod </title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
  <link rel="stylesheet"href="staff_name.css">
  <?php 
session_start(); 
include "db_conn.php";


if (isset($_SESSION['name']) && isset($_SESSION['username'])) 

 ?>
</head>
<body>
<!-- partial:index.partial.html -->
<div class='dashboard'>
<div class="dashboard-nav" style="background: linear-gradient(to bottom right, var(--primary-color), #F15A59);">
        <header><a href="#!" class="menu-toggle"><i class="fas fa-bars" style="color: #fff;"></i></a><a href="#"
                                                                                   class="brand-logo"> <i class="fas fa-anchor" style="color: #fff;"></i>
            <span style="color: #fff;">FCS</span></a></header>
        <nav class="dashboard-nav-list ">
            <a href="hod.php" class="dashboard-nav-item "style="color: #fff;"><i class="fas fa-home"style="color: #fff;"></i>
            Home </a>
        <a
        href="hod_notifications.php" class="dashboard-nav-item "style="color: #fff;"><i style='font-size:24px'style="color: #fff;" class='far'>&#xf0f3;</i>  Notifications </a>
          
    
        <div class='dashboard-nav-dropdown active' ><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-users"></i> Users </a>
                <div class='dashboard-nav-dropdown-menu'><a href="staff_name.php" style="color: #fff;"
                        class="dashboard-nav-dropdown-item">Staff</a><a
                        href="staff_timetable.php" style="color: #fff;"class="dashboard-nav-dropdown-item">Staff Timetable</a>
                    </div>
                    <div class='dashboard-nav-dropdown-menu'><a href="hod_leave.php" style="color: #fff;"
                        class="dashboard-nav-dropdown-item">leave management</a>
                      
                    </div>
            </div>
           <a href="hod_profile.php" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
          <div class="nav-item-divider"></div>
          <a
                    href="index.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
    <header class='dashboard-toolbar'>
        <a href="#!" class="menu-toggle" style="color: var(--primary-color);"><i class="fas fa-bars"></i></a> 
        <h2 style="color: var(--primary-color); font size: 50px; margin-top: 8px">Hello, <?php echo $_SESSION['name']; ?></h2>
    </header>
    <div class="mainContent clearfix">
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                    <h1 style="color: var(--primary-color); font-size: 26px;">Staff Details</h1>
       </div>
                    <div class='card-body'>
                        

                    <?php

	$sql = "SELECT * FROM faculty_users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table>";
		echo "<tr>";
		echo "<th>Name</th>";
		echo "<th>Department</th>";
		echo "<th>Phone</th>";
		echo "<th>Email</th>";
		echo "<th>Role</th>";
		echo "</tr>";

		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>" . $row["name"] . "</td>";
			echo "<td>" . $row["department"] . "</td>";
			echo "<td>" . $row["phone"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
			echo "<td>" . $row["role"] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	$conn->close();
	?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script><script  src="home.js"></script>
<style>

:root {
    --primary-color: #070A52;
    --error-color: #D21312;
    --error-bg-color: #F2DEDE;
    --success-color: #ED2B2A;
    --success-bg-color: #D4EDDA;
}
table {
    border-collapse: collapse;
    width: 100%;
    border-radius: 20px; 
  }
 
  table, td {
    border: 1px solid black;
    padding: 10px;
    height: 50px; /* Adjust the height value as per your requirement */
    transition: background-color 0.3s ease;
    font-size: 15px;
  }
   th{
    border: 1px solid black;
    padding: 10px;
    height: 60px; /* Adjust the height value as per your requirement */
    transition: background-color 0.3s ease;
    font-size: 18px;
  }
  
  th {
   background:  linear-gradient(to bottom right, #472156 , #a24059); 
    color: #fff;
  }
  
  tr:nth-child(even) {
    background: #e4d7dd;
    color:var(--primary-color);
        font-weight: bold;

  }
  tr:nth-child(odd){
    color:var(--primary-color);
        font-weight: bold;
  }
  
  tr:nth-child(1) {
    color: #eaeaea;
  }
  
  td:nth-child(1) {
    color: #000;
    /* font-weight: bold; */
  }
  
  /* tr:hover {
    /* background-color:  #181052; 
    opacity:0.8;
  } */
  
  td:hover {
    color: #fff;
    background: linear-gradient(to right, var(--primary-color), #F15A59);
  background-size: 200% auto;
  animation: gradient-hover 3s ease infinite;
}
  
@keyframes gradient-hover {
  0% {
    background-position: 0 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0 50%;
  }
}
  

    </style>
</body>
</html>
