<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
  



  <style>
		/* Update color palette */
		:root {
			--primary-color: #070A52;
			--error-color: #D21312;
			--error-bg-color: #F2DEDE;
			--success-color: #ED2B2A;
			--success-bg-color: #D4EDDA;
		}
		
	</style>
</head>
<body>
<!-- partial:index.partial.html -->
<?php 
session_start(); 
include "db_conn.php";


if (isset($_SESSION['name']) ) 

 ?>


<div class='dashboard'>
<div class="dashboard-nav" style="background: linear-gradient(to bottom right, var(--primary-color), #F15A59);">
    <header >
        <a href="#!" class="menu-toggle">
            <i class="fas fa-bars" style="color: #fff;"></i>
        </a>
        <a href="#" class="brand-logo">
            <i class="fas fa-anchor" style="color: #fff;"></i>
            <span style="color: #fff;">FCS</span>
        </a>
    </header>
    <nav class="dashboard-nav-list a">
        <a href="staff.php" class="dashboard-nav-item " style="color: #fff;">
            <i class="fas fa-home" style="color: #fff;"></i> Home
        </a>
        <a href="timetable.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-tachometer-alt" style="color: #fff;"></i> Timetable
        </a>
        <a href="staff_notifications.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="far" style="font-size: 24px; color: #fff;">&#xf0f3;</i> Notifications
        </a>
        <div class='dashboard-nav-dropdown active'><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-users"></i> Management </a>
                <div class='dashboard-nav-dropdown-menu'><a href="staff_slot_management.php" style="color: #fff;"
                        class="dashboard-nav-dropdown-item">slot management</a>
     
                    </div>
                    <div class='dashboard-nav-dropdown-menu'><a href="staff_leave.php" style="color: #fff;"
                        class="dashboard-nav-dropdown-item">leave management</a>
                      
                    </div>
                    <div class='dashboard-nav-dropdown-menu'><a href="staff_leave_display.php" style="color: #fff;"
                        class="dashboard-nav-dropdown-item"> list of leave </a>
                      
                    </div>
            </div>
        <a href="staff_profile.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-user" style="color: #fff;"></i> Profile
        </a>
        <div class="nav-item-divider"></div>
        <a href="index.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-sign-out-alt" style="color: #fff;"></i> Logout
        </a>
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
                    <h1 style="color: var(--primary-color); font-size: 26px;">list of leave </h1>
       </div>
                    <div class='card-body'>
    


<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #f5f5f5;
    }
</style>


<div class='card'>
                   
                   <?php
                   
                   
                   
                   $sql = "SELECT * FROM leave_requests WHERE name='$_SESSION[name]'";
                   $result = $conn->query($sql);
               
                   // Check if there are any records
                   if ($result->num_rows > 0) {
                       // Start creating the table
                       echo '<table>';
                       echo '<tr>';
                       echo '<th>Name</th>';
             
                       echo '<th>Leave Type</th>';
                       echo '<th>Start Date</th>';
                       echo '<th>End Date</th>';
                       echo '<th>Reason</th>';
                       echo '<th>Status</th>';
                       echo '</tr>';
               
                       // Loop through each record and display the data in the table
                       while ($row = $result->fetch_assoc()) {
                           echo '<tr>';
                           echo '<td>' . $row['name'] . '</td>';
              
                           echo '<td>' . $row['leave_type'] . '</td>';
                           echo '<td>' . $row['start_date'] . '</td>';
                           echo '<td>' . $row['end_date'] . '</td>';
                           echo '<td>' . $row['reason'] . '</td>';
                           echo '<td>' . $row['status'] . '</td>';
                           echo '</tr>';
                       }
               
                       // End the table
                       echo '</table>';
                   } else {
                       // No records found
                       echo 'No leave requests found.';
                   }
 
               $conn->close();
               ?>                    
       
               
     
       </div>


                    </div>
                    
                </div>
            </div>
        </div>

</div>
    </div>
<section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
<script src="home.js"> </script>

</body>
</html>
