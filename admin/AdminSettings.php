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
<link rel="stylesheet" type="text/css" href="../css/AdminProfile.css">
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
		<h2>Admin Profile Settings</h2>
	</div>
	<img class="dashboardicon" src="../icons/list.png" onclick="showdashboard()"> <br><br><br>

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
		 <center>
		 		<div class="main">
		 	<?php
            
                $conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

                $result = $conn2->prepare("SELECT * FROM tbl_administrator WHERE admin_id='$session_id'");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['admin_id'];
          ?>

        <?php if($row['adminPhoto'] != ""): ?>
          <img class="profileImage" src="../uploads/<?php echo $row['adminPhoto']; ?>">
        <?php else: ?>
          <img class="profileImage"src="../image/default.png"><br>
        <?php endif; ?>
        	<?php } ?>


        	<?php 
        		require_once('../connection/connection.php');
        		$adminInfo="SELECT * FROM tbl_administrator WHERE admin_id ='$session_id'";
						$result=mysqli_query($conn, $adminInfo);
        	?>
        	<?php
		 			while ($rows=mysqli_fetch_array($result)) { ?>
		 				<br><br>
		 				<form class="readonly">
		 				<label class="sideName">Admin ID#: </label>
		 				<input class="textbox" type="text" name="admin_id" placeholder="Admin Id" readonly value="<?php echo $rows['admin_id'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Name: </label>
		 				<input class="textbox" type="text" name="" placeholder="Name" readonly value="<?php echo $rows['adminFname']," ",$rows['adminMname']," ",$rows['adminLname'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Phone: </label>
		 				<input class="textbox" type="text" name="" placeholder="Phone" readonly value="<?php echo $rows['adminPhone'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Email: </label>
		 				<input class="textbox" type="text" name="" placeholder="Email" readonly value="<?php echo $rows['adminEmail'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Address: </label>
		 				<input class="textbox" type="text" name="" placeholder="Address" readonly value="<?php echo $rows['adminAddress'];?>">
		 				</form>


		 				<br>
		 				<br>
		 				<button class="updadminfobtn" onclick="parent.location='updateAdminInfo.php'">Update Information</button><br><br>
		 				<a href="adminpanel.php" class="bthlink">Back to Admin Panel</a>
		 				
		 			<?php } ?>


		 		</div>
		 </center>
</body>
</html>