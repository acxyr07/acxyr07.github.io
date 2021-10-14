<?php
	include('../connection/adminsession.php'); 
?>
<html>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>
		Healthcare
	</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/background.css">
<link rel="stylesheet" type="text/css" href="../css/biginter.css">
<link rel="stylesheet" type="text/css" href="../css/icons.css">
<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">

<script type="text/javascript" src="../js/dashboard.js"></script>

<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>Administrator's Panel</h2>
	</div>
		<img class="dashboardicon" src="../icons/list.png" onclick="showdashboard()"><br>


		 <div id="dashboard" class="dashboard">
		 	 <img src="../icons/close.png" class="closebtn2" onclick="closedashboard()"></a>
		 	 <ul>
		 	 	Contents Management
		 	 </ul>
		 	 	<a class="aaa" href="updatehealthcare.php">Healthcare</a>
		 	 	<a class="aaa" href="updateabout.php">About Us</a>
		 	 	<a class="aaa" href="updatecontact.php">Contact Us</a>
		 	 	<a class="aaa" href="chatbotmanagement.php">Chatbot Management</a>
		 	 <ul>
		 	 	Users Management
		 	 </ul>
		 		<a class="aaa" href="adminadmintable.php">Administrator Management</a>
		 	 	<a class="aaa" href="admindoctortable.php">Doctor Management</a>
		 	 	<a class="aaa" href="adminpatienttable.php">Patient Management</a>

		 	 	<br>
		 	 	<a class="aaa"href="AdminMessages.php">Messages</a>

		 	 	<a class="aaa"href="adminpanel.php">Home</a>

		 	 	<a class="aaa"href="adminNotifications.php">Notifications</a>

		 	 	<a class="aaa"href="adminSettings.php">Admin Profile</a>

		 	 	<a class="aaa"href="logout.php">Log Out</a>

		 </div>

		 <div class="main">
		 	<div class="headerwelcome">
		 		<center>
		 		<h4 class="welcome">Welcome!</h4>
		 		</center>
		 	</div>
		 	<br>
		 	<center>
		 	<div class="contentdiv" onclick="parent.location='adminadmintable.php'">
		 		<img class="icon" src="../image/profileicon.jpeg">
		 		<?php  
		 		require_once('../connection/connection.php');
				$sql = "SELECT * FROM tbl_administrator";
				if ($result=mysqli_query($conn,$sql)) {
    			$adminrowcount=mysqli_num_rows($result);
		 		?>
		 		<h2><?php echo "".$adminrowcount;?></h2>
		 		<?php 
		 		}?>
		 		<label>Administrators</label>




		 	</div>





		 	<div class="contentdiv" onclick="parent.location='admindoctortable.php'">
		 		<img class="icon" src="../image/profileicon.jpeg">
		 		<?php  
		 		require_once('../connection/connection.php');
				$sql = "SELECT * FROM tbl_doctor";
				if ($result=mysqli_query($conn,$sql)) {
    			$doctorrowcount=mysqli_num_rows($result);
		 		?>
		 		<h2><?php echo "".$doctorrowcount;?></h2>
		 		<?php 
		 		}?>
		 		<label>Doctor Registered</label>
		 	</div>



		 	<div class="contentdiv" onclick="parent.location='adminpatienttable.php'">
		 		<img class="icon" src="../image/profileicon.jpeg">
		 		<?php  
		 		require_once('../connection/connection.php');
				$sql = "SELECT * FROM tbl_patient";
				if ($result=mysqli_query($conn,$sql)) {
    			$patientrowcount=mysqli_num_rows($result);
		 		?>
		 		<h2><?php echo "".$patientrowcount;?></h2>
		 		<?php 
		 		}?>
		 		<label>Patient Registered</label>
		 	</div>
		 	</center>
		 </div>

</body>
</html>