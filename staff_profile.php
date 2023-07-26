<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'><link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="profile_form.css">
 
<script href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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


if (isset($_SESSION['name']) && isset($_SESSION['username']) )

 ?>


 <?php
                        


                        $sql = "SELECT * FROM faculty_users where name='$_SESSION[name]'";
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                       
                    
                            while ($row = $result->fetch_assoc()) {
                             
                                $name = $row["name"] ;
                                $department = $row["department"] ;
                                $phone =  $row["phone"]; 
                                $role = $row['role'];
                                $education = $row['education'];
                                $address1 = $row['address1'];
                                $address2 = $row['address2'];
                                $state = $row['state'];
                                $country = $row['country'];
                                $pincode = $row['pincode'];
                                // $subject_handling = $row['subject_handling'];
                                // $sub_code = $row['sub_code'];
                                // $adviser = $row['adviser'];	
                                $email = $row['email'];
                     
                            }
                        }


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
        <a href="staff.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-home" style="color: #fff;"></i> Home
        </a>
        <a href="timetable.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-tachometer-alt" style="color: #fff;"></i> Timetable
        </a>
        <a href="staff_notifications.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="far" style="font-size: 24px; color: #fff;">&#xf0f3;</i> Notifications
        </a>
        <a href="staff_slot_management.php" class="dashboard-nav-item" style="color: #fff;">
            <i class="fas fa-file-upload" style="color: #fff;"></i> Slot Management
        </a>
        <a href="staff_profile.php" class="dashboard-nav-item active" style="color: #fff;">
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
        <!-- <h2 style="color: var(--primary-color); font size: 20px; margin-top: 8px">Hello, <?php echo $_SESSION['name']; ?></h2> -->
    </header>
    <div class="mainContent clearfix">
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                    <h1 style="color: var(--primary-color); font-size: 26px;">PROFILE SETTINGS</h1>
       </div>
                    <div class='card-body'>
                 

                 
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"> <?php echo $_SESSION['username']; ?> </span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
        <form id="myForm" style="margin-top:-40px">
            <div class="p-3 py-6">
                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div> -->
                

                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels" >Name</label><input type="text" class="form-control" placeholder="first name" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" name="phone" id="phone" value="<?php echo $phone ;?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" name="email" id="email" value="<?php echo $email ;?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" name="address1" id="address1" value="<?php echo $address1 ;?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" name="address2" id="address2" value="<?php echo $address2 ;?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Pin Code</label><input type="text" class="form-control" placeholder="pin code" name="address2" id="address2" value="<?php echo $pincode ;?>" readonly></div>
                    <!-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="state" name="state" id="state" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="" name="phone" id="phone" value=""></div> -->


                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" name="country" id="country"  value="<?php echo $country ;?>" readonly></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control"  name="state" id="state"  value="<?php echo $state ;?>" placeholder="state" readonly></div>
                </div>
              <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="submit" >Save Profile</button>

            </div> 
            </div>
        </div>

        <div class="col-md-4" style="margin-top:-60px">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Academic Details</span>
                
                 </div><br>
                <div class="col-md-12"><label class="labels">Department </label><input type="text" class="form-control" placeholder="experience" value="<?php echo $department ;?>" readonly></div> <br>
                <div class="col-md-12"><label class="labels">Role </label><input type="text" class="form-control" placeholder="additional details" value="<?php echo $role ;?>" readonly></div> <br>
                <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" name="education" id="education" value="<?php echo $education ;?>" readonly></div>
            </div>



  
</form>

   
            
        </div>
    </div>
 
</div>
</div>
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
