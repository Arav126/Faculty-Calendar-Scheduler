<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> hod </title>
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
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
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
                    <h1 style="color: var(--primary-color); font-size: 26px;">Welcome Back <?php echo $_SESSION['username']; ?></h1>
       </div>
                    <div class='card-body'>
                    <?php

$sql = "SELECT * FROM leave_requests where status='Pending'";
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
    echo '<th>Action</th>';
    echo '</tr>';

    // Loop through each record and display the data in the table
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';

        echo '<td>' . $row['leave_type'] . '</td>';
        echo '<td>' . $row['start_date'] . '</td>';
        echo '<td>' . $row['end_date'] . '</td>';
        echo '<td>' . $row['reason'] . '</td>';
        echo '<td>';
        echo '<button class="accept-button" onclick="acceptLeave(' . $row['leave_id'] . ')">Accept</button>';
        echo '<button class="reject-button" onclick="rejectLeave(' . $row['leave_id'] . ')">Reject</button>';        
        echo '</td>';
        echo '</tr>';
    }

    // End the table
    echo '</table>';
    
} else {
    // No records found
    echo 'No leave requests found.';
}

// Close the database connection
$conn->close();
?>
<script>
function acceptLeave(leaveId) {
  // Redirect to leave_update.php with the leave ID as a query parameter
  window.location.href = 'leave_accept.php?leaveId=' + leaveId;
}

function rejectLeave(leaveId) {
  // Redirect to b.html
  window.location.href = 'leave_reject.php?leaveId=' + leaveId;
}
</script>





<style>
    table {
        width: 100%;
        border-collapse: collapse;
        animation: fade-in 0.5s ease-in-out;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        transition: background-color 0.3s ease;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover td {
        background-color: #f9f9f9;
    }

    @keyframes fade-in {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .accept-button,
    .reject-button {
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .accept-button {
        background-color: #4CAF50;
        color: white;
    }

    .reject-button {
        background-color: #FF0000;
        color: white;
    }

    /* .accept-button:hover,
    .reject-button:hover {
        background-color: black  ;
    } */
</style>



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
