<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> hod </title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
  <link rel="stylesheet"href="form.css">
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
            <a href="hod.php" class="dashboard-nav-item"style="color: #fff;"><i class="fas fa-home"style="color: #fff;"></i>
            Home </a>
        <a
        href="hod_notifications.php" class="dashboard-nav-item "style="color: #fff;"><i style='font-size:24px'style="color: #fff;" class='far'>&#xf0f3;</i>  Notifications </a>
          
    
        <div class='dashboard-nav-dropdown'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
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
        <div class='dashboard-content'>
            
            <div class='container'>
                
                <div class='card'>

                
                    <div class='card-header'>

                        
               
<form method="POST" action="display.php">
		<label for="name">Name:</label>
		<select id="namey" name="namey">
			<option value="">Select a name</option>
			<?php
			include "db_conn.php"; 

	
			$sql = "SELECT name FROM faculty_users";
			$result = $conn->query($sql);

			while ($row = $result->fetch_assoc()) {
				echo "<option value=\"" . $row["name"] . "\">" . $row["name"] . "</option>";
			}

			$conn->close();
			?>
		</select>
		<button type="submit" style="background: var(--primary-color);">Check</button>
	</form>
                    </div>
                    <br>
                    <div class='card-body'>
  <center>   <h3> no staff name are selected</h3> </center>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script><script  src="home.js"></script>

</body>
</html>
