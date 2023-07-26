<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
  
  <link rel="stylesheet" href="calendar.css">


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
        <a href="staff.php" class="dashboard-nav-item active" style="color: #fff;">
            <i class="fas fa-home" style="color: #fff;"></i> Home
        </a>
        <a href="timetable.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-tachometer-alt" style="color: #fff;"></i> Timetable
        </a>
        <a href="staff_notifications.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="far" style="font-size: 24px; color: #fff;">&#xf0f3;</i> Notifications
        </a>
   

        <div class='dashboard-nav-dropdown '><a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
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
                    <h1 style="color: var(--primary-color); font-size: 26px;">Welcome Back <?php echo $_SESSION['username']; ?></h1>
       </div>
                    <div class='card-body'>
                    <h3 style="margin-left: 85%;">
	<script>
		// Get the current date
        var currentDate = new Date();

// Print the current date
function printDate() {
    document.getElementById("date").textContent = currentDate.toLocaleDateString();
}

		// Print the current weekday
		function printWeekday() {
			var weekday = currentDate.toLocaleDateString("en-US", { weekday: 'long' });
			document.getElementById("weekday").textContent = weekday;
		}
	</script>

<body onload="printDate(); printWeekday();">

	<p>Date: <span id="date"></span></p>
	<p>Weekday: <span id="weekday"></span></p>
</body>



</h3>
<br><br><br><br>

<div class="handle"> 
<?php
                        
                        
                        $sql1 = "SELECT * FROM faculty_course  where name = '$_SESSION[name]' ";
                        $result1 = $conn->query($sql1);
                        
                        if ($result1->num_rows > 0) {
                            echo "<table><tr> <th> HANDLING COURSE </th>  </tr>";
                            // output data of each row
                            while($row = $result1->fetch_assoc()) {
                                echo "<tr>  <td>" . $row["course"]. "</td>   </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "no course ";
                        }
                        
                        $conn->close();
                        
                        ?>
</div>



<style>
:root {
  --primary-color: #070A52;
  --error-color: #D21312;
  --error-bg-color: #F2DEDE;
  --success-color: #ED2B2A;
  --success-bg-color: #D4EDDA;
}

.handle table {
  width: 470px;
  border-collapse: collapse;
  margin-bottom: 20px;
  margin-left: 40px;
  margin-top: -40px;
  letter-spacing: 2px;
}

.handle th, td {
  padding: 10px;
  text-align: center;
  border-bottom: 1px solid #ccc;
  border-radius: 5px;
}

.handle th {
    /* background: radial-gradient(circle, var(--primary-color), var(--primary-color) 70%, #F15A59); */
    background:  linear-gradient(to bottom right, #472156 , #a24059); 

  font-weight: bold;
  color: #fff;/* Change header color to primary color */
  height: 100px;
  font-size:1.2em;
}

.handle tr:hover {
  background: linear-gradient(to right, var(--primary-color), #F15A59);
  background-size: 200% auto;
  animation: gradient-hover 1s ease infinite;
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

.handle td:hover {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.handle td:not(:last-child) {
  margin-right: 10px; /* Leave some gap between table cells */
}

.handle td:hover {
  color: #fff; /* Change font color to white when hovered */
}

.handle .no-course {
  font-style: italic;
  color: #999;
}

      .handle {
    display: flex;
    align-items: flex-start;
  }

    .handle {
    float: left;
    width: 50%;
  }

  .calendar {
    float: left;
    width: 100%;
  }

  .clearfix::after {
    content: "";
    display: table;
    clear: both;
  }

  .event-list {
        margin-top: 20px;
    }

    .event-list h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .event-list ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .event-list li {
        margin-bottom: 10px;
    }

    .event-list strong {
        font-weight: bold;
    }

    .event-list table {
        width: 100%;
        border-collapse: collapse;
    }

    .event-list th,
    .event-list td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .event-list th {
        background-color: #f2f2f2;
    }

    .event-list tr:hover {
        background-color: #f5f5f5;
    }

</style>



<div class="calendar">
  <script>
    function showEventDetails(date) {
      var eventDetails = document.getElementById("event-details");
      eventDetails.innerHTML = "";

      // Check if events exist for the selected date
      if (events[date]) {
        var eventList = events[date];

        // Display the event details
        for (var i = 0; i < eventList.length; i++) {
          var event = eventList[i];
          var eventDiv = document.createElement("div");
          eventDiv.className = "event-details";
          eventDiv.innerHTML = event;
          eventDetails.appendChild(eventDiv);
        }
      } else {
        eventDetails.innerHTML = "<p>No events for this date.</p>";
      }
    }
  </script>

  <div class="calendar">
    <h2>Calendar</h2>
    <?php
    // Database connection
include "db_conn.php";

    // Get the current year and month
    $currentYear = date('Y');
    $currentMonth = date('m');

    // Get the total number of days in the current month
    $totalDays = date('t', strtotime($currentYear . '-' . $currentMonth . '-01'));

    // Get the first day of the month
    $firstDay = date('N', strtotime($currentYear . '-' . $currentMonth . '-01'));

    // Create an array to store event dates and descriptions
    $events = array();
    
    // Retrieve events from the database
    $sql = "SELECT event_date, event_description FROM events WHERE YEAR(event_date) = '$currentYear' AND MONTH(event_date) = '$currentMonth'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $date = $row['event_date'];
        $description = $row['event_description'];

        if (isset($events[$date])) {
          $events[$date][] = $description;
        } else {
          $events[$date] = array($description);
        }
      }
    }

    // Handle form submission to add new events
    if (isset($_POST['event_date']) && isset($_POST['event_description'])) {
      $eventDate = $_POST['event_date'];
      $eventDescription = $_POST['event_description'];

      // Insert event into the database
      $insertSql = "INSERT INTO events (event_date, event_description) VALUES ('$eventDate', '$eventDescription')";
      $insertResult = mysqli_query($conn, $insertSql);

      if ($insertResult) {
        // If the event is successfully inserted, update the events array
        if (isset($events[$eventDate])) {
          $events[$eventDate][] = $eventDescription;
        } else {
          $events[$eventDate] = array($eventDescription);
        }
      }
    }

    // Generate the calendar table
    echo '<table>';
    echo '<tr>';
    echo '<th>Mon</th>';
    echo '<th>Tue</th>';
    echo '<th>Wed</th>';
    echo '<th>Thu</th>';
    echo '<th>Fri</th>';
    echo '<th>Sat</th>';
    echo '<th>Sun</th>';
    echo '</tr>';

    // Start with empty cells before the first day
    echo '<tr>';
    for ($i = 1; $i < $firstDay; $i++) {
      echo '<td></td>';
    }

    // Fill in the days of the month
    $day = 1;
    for ($i = $firstDay; $i <= 7; $i++) {
      echo '<td onclick="showEventDetails(\'' . $currentYear . '-' . $currentMonth . '-' . $day . '\')">' . $day . getEventMarkup($currentYear . '-' . $currentMonth . '-' . $day, $events) . '</td>';
      $day++;
    }
    echo '</tr>';

    while ($day <= $totalDays) {
      echo '<tr>';
      for ($i = 1; $i <= 7 && $day <= $totalDays; $i++) {
        echo '<td onclick="showEventDetails(\'' . $currentYear . '-' . $currentMonth . '-' . $day . '\')">' . $day . getEventMarkup($currentYear . '-' . $currentMonth . '-' . $day, $events) . '</td>';
        $day++;
      }
      echo '</tr>';
    }

    echo '</table>';

    function getEventMarkup($date, $events) {
      if (isset($events[$date])) {
        return '<div class="event"></div>';
      } 
    }
  
    ?>

    <div id="event-details"></div>

    <!-- <div class="add-event-form">
      <h3>Add Event</h3>
      <form method="POST" action="">
        <input type="date" name="event_date" required>
        <input type="text" name="event_description" placeholder="Event description" required>
        <button type="submit" value="Add">add </button>
      </form>
    </div> -->

    <div class="event-list">
      <h3>Event List</h3>
      <ul>
        <?php
        // Display the event list   
        // make it as table 
        foreach ($events as $date => $eventList) {
          echo '<li><strong>' . $date . '</strong>';
          echo '<ul>';
          foreach ($eventList as $event) {
            echo '<li>' . $event . '</li>';
          }
          echo '</ul>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </div>


</div>

<div class="clearfix"></div>





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
