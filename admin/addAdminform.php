<?php
   include("../connection/connection.php");
   		if(isset($_POST['Submit'])) 
  {    
		$fname = $_POST['adminFname'];
		$mname = $_POST['adminMname'];
		$lname = $_POST['adminLname'];
		$phone = $_POST['adminPhone'];
		$email = $_POST['adminEmail'];
		$address = $_POST['adminAddress'];
		$username = $_POST['adminUsername'];
		$password = $_POST['adminUsername'];

		if(empty($fname) || empty($mname) || empty($lname) || empty($phone) || empty($email) || empty($address) || empty($username) || empty($password)) 
			{                
				echo "Product Name field is empty";
			}

		else 
			{
			$result = mysqli_query($conn, "INSERT INTO tbl_administrator (adminFname,adminMname,adminLname,adminPhone,adminEmail,adminAddress,adminUsername,adminPassword) VALUES('$fname','$mname','$lname','$phone','$email','$address','$username','$password')");
				header("Location: adminadmintable.php");
			}
	}
?>

<html>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>
		Healthcare
	</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/biginter.css">
<link rel="stylesheet" type="text/css" href="../css/background.css">
<link rel="stylesheet" type="text/css" href="../css/Admin.css">
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
		<h2>Add Administrator</h2>
	</div>
	<center>
		<div class="centerdiv" style="padding-bottom: 150px;">
	<form method="post"  name="adminForm">
		<label class="toplabel">First Name</label><br>
			<input type="text" class="adminText" name="adminFname" id="adminFname" required=""><br>
		
		<label class="toplabel">Middle Name</label><br>
			<input type="text" class="adminText" name="adminMname" id="adminMname" placeholder="Optional"><br>
		
		<label class="toplabel">Last Name</label><br>
			<input type="text" class="adminText" name="adminLname" id="adminLname" required=""><br>
		
		<label class="toplabel">Phone</label><br>
			<input type="text" class="adminText" name="adminPhone" id="adminPhone"required><br>
		
		<label class="toplabel">Email</label><br>
			<input type="text" class="adminText" name="adminEmail" id="adminEmail"required><br>
		
		<label class="toplabel">Address</label><br>
			<input type="text" class="adminText" name="adminAddress" id="adminAddress" required><br>
		
		<label class="toplabel">Username</label><br>
			<input type="text" class="adminText" name="adminUsername" id="adminUsername" required><br>
		
		<label class="toplabel">Password</label><br>
			<input type="text" class="adminText" name="adminPassword" id="adminPassword"required><br>

		<button name="Submit" id="Submit" class="add" value="Submit">Submit </button>
			</form>
		<button class="bth" onclick="parent.location='adminpanel.php'">Back to Admin Panel</button>

		</div>
	</center>

</body>
</html>