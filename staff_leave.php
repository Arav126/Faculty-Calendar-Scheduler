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


if (isset($_SESSION['name']) && isset($_SESSION['username'])) 

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
                    <h1 style="color: var(--primary-color); font-size: 26px;">Leave application  </h1>
       </div>
                    <div class='card-body'>
                  
 



<form action="leave.php" method="POST">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"  value="<?php echo $_SESSION['name']; ?> " readonly>


  <label for="leave_type">Leave Type:</label>
  <select id="leave_type" name="leave_type" required>
    <!-- <option value="annual">Annual Leave</option> -->
    <option value="sick">Sick Leave</option>
    <option value="personal">Personal Leave</option>
  </select>

  <label for="start_date">Start Date:</label>
  <input type="date" id="start_date" name="start_date" required>

  <label for="end_date">End Date:</label>
  <input type="date" id="end_date" name="end_date" required>

  <label for="reason">Reason:</label>
  <textarea id="reason" name="reason" required></textarea>

  <input type="submit" value="Submit">
</form>

<style>
   form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f1f1f1;
    border-radius: 5px;
  }

      body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
}

h2 {
  text-align: center;
  margin-top: 20px;
  color: #333;
  font-size: 24px;
  /* font-weight: bold; */
  /* text-transform: uppercase; */
}

.form-container {
  width: 1000px;
  margin: 0 auto;
  margin-top: 40px;
  background-color: #ffffff;
  padding: 50px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  animation: form-appear 0.5s ease-in-out;
}

label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
  color: var(--primary-color);
  font-size: 18px;
}

input[type="date"],
textarea,
select,
input[type="text"] {
  width: 100%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  transition: border-color 0.3s ease-in-out;
  font-size: 14px;
  font-family: Arial, sans-serif;
  border-color: var(--primary-color);
  border-width: 2px;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.1);
}



input[type="submit"] {
  margin-top: 10px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
  font-size: 16px;
  font-weight: bold;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.form-column {
  flex-basis: 45%;
}

textarea {
  height: 100px;
  resize: vertical;
}

@keyframes form-appear {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}


button {
	float: right;
	background: var(--primary-color);
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}

button:hover {
	opacity: .7;
}
</style>


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
