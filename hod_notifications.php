<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> hod </title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="notification.css">


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
        href="hod_notifications.php" class="dashboard-nav-item active"style="color: #fff;"><i style='font-size:24px'style="color: #fff;" class='far'>&#xf0f3;</i>  Notifications </a>
          
    
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
    <div class="mainContent clearfix">
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                    <h1 style="color: var(--primary-color); font-size: 26px;">Notifications</h1>
       </div>
               
                    <div class='card-body'>
      


                    <?php

// Check if the user is logged in
if (isset($_SESSION['name']) && isset($_SESSION['username'])) {
    // Retrieve appointment details from the database
    $sql = "SELECT * FROM appointments ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<h2></h2>';

        // Loop through each row of the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="appointment-details">';
            echo "<p>Name: {$row['name']}</p>";
            echo "<p>Date: {$row['date']}</p>";
            echo "<p>Reason: {$row['reason']}</p>";
            echo "<p>Slot: {$row['slot']}</p>";
            echo "<p>Class: {$row['class']}</p>";
            echo '</div>';
        }
    } else {
        echo '<p>No details found.</p>';
    }

    mysqli_free_result($result);
} else {
    echo '<p>Please log in to view appointment details.</p>';
}
?>

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
    <style>
.appointment-details {
  background: linear-gradient(to bottom right, #472055, #a24059); /* Set default background color to #7782AB */
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  animation: fade-in 0.5s ease-in-out;
  transition: background-color 0.3s ease-in-out;
  color: #fff;
  opacity: 0.8 ;
}

.appointment-details:hover {
  background: linear-gradient(to bottom right, var(--primary-color), #F15A59);
  background-size: 200% auto;
  animation: gradient-hover 3s ease infinite;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  opacity: 1 ;
  color: #fff; /* Change font color to white when hovered */
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
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

.appointment-details h2 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #fff;
}

.appointment-details p {
  margin: 5px 0;
  color: #eee;
}
.appointment-details:hover h2,
.appointment-details:hover p {
  color: #eee; /* Change font color to white when .appointment-details is hovered */
}

.appointment-details p:first-child {
  font-weight: bold;
}

p.no-details {
  font-style: italic;
  color: #888;
}

    </style>