<?php
	include_once('../connection/connection.php');
	$adminpatienttable="SELECT * FROM tbl_patient";
	$result=mysqli_query($conn, $adminpatienttable);
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
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
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
		<h2>Patient Management</h2>
	</div>

	<img class="dashboardicon" src="../icons/list.png" onclick="showdashboard()">
	<br><br><br>


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

		 	 	<br>
		 	 	<a class="aaa"href="adminpanel.php">Home</a>

		 	 	<br>
		 	 	<a class="aaa"href="adminNotifications.php">Notifications</a>

		 	 	<br>
		 	 	<a class="aaa"href="adminSettings.php">Admin Profile</a>

				<br>
		 	 	<a class="aaa"href="logout.php">Log Out</a>


		 </div>

			 <div class="main">
			 	<center>
					<button class="Addadmin" onclick="parent.location='AdminAddPatient.php'">Add Patient</button>
				</center>
					<br><br>
		 		<table class="aamtbl">
		 			<thead>
		 				<th hidden="">Patient ID#</th>
		 				<th>First Name</th>
		 				<th>Middle Name</th>
		 				<th>Last Name</th>
		 				<th>Contact #</th>
		 				<th>Email</th>
		 				<th>Address</th>
		 				<th>Actions</th>
		 			</thead>
		 			
				<?php
		 			while ($rows=mysqli_fetch_assoc($result)) 
		 			{
		 		?>	
		 		<tbody>
		 			<tr>
		 				<td hidden="" style="color: transparent;"><?php echo $rows['patient_id']; ?></td>
		 				<td data-label="First Name"><?php echo $rows['p_firstname']; ?></td>
		 				<td data-label="Last Name"><?php echo $rows['p_midname']; ?></td>
		 				<td data-label="Middle Name"><?php echo $rows['p_lastname']; ?></td>
		 				<td data-label="Contact #"><?php echo $rows['p_phone']; ?></td>
		 				<td data-label="Email"><?php echo $rows['p_email']; ?></td>
		 				<td data-label="Address"><?php echo $rows['p_address']; ?></td>
		 				<td data-label="Actions"><button class="disablebtn" onclick="">Disable</button></td>
		 			</tr>
		 		</tbody>
		 	 	<?php
		 			}
		 		?>
		 		</table>

		 	</div>

</body>
</html>