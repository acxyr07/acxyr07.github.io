<?php

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

<script type="text/javascript" src="../js/dashboard.js"></script>
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>Notifications</h2>
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
		 		<div class="notdiv">
		 			<center>
		 			<table class="aamtbl">
		 				<tr>
		 					<th class="header" style="border: 1px solid white;">
		 						Notification
		 					</th>
		 					<th class="header" style="border: 1px solid white;">
		 						From
		 					</th>
		 					<th class="header" style="border: 1px solid white;">
		 						Subject
		 					</th>
		 					<th class="header" style="border: 1px solid white;">
		 						Date & time
		 					</th>
		 					<th class="header" style="border: 1px solid white;">
		 						Action
		 					</th>
		 				</tr>
		 				<tr>
		 					<td>
		 						
		 					</td>
		 					<td>

		 					</td>
		 					<td>

		 						
		 					</td>
		 					<td>
		 						
		 					</td>
		 					<td>
		 						
		 							<button class="dm"><img class="tableicons" src="../icons/delete.png"></button>
		 							<button class="mar"><img class="tableicons" src="../icons/view.png"></button>
		 						
		 					</td>
		 				</tr>
		 			</table>
		 		</center>
		 		</div>
		 </div>

</body>
</html>