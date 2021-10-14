<?php

include('../connection/adminsession.php'); 

include("../connection/connection.php");

if (isset($_POST['Update'])) 
{
	$id= $_POST['cc_id'];

	$query="UPDATE tbl_contact_contents SET cc_town='$_POST[cc_town]', cc_location='$_POST[cc_location]', cc_phone='$_POST[cc_phone]', cc_hours='$_POST[cc_hours]', cc_email='$_POST[cc_email]', cc_description='$_POST[cc_description]' WHERE cc_id='$_POST[cc_id]'";
	$query_update = mysqli_query($conn,$query);	

	if ($query_update)
	{
		echo "<script>alert('Data Updated')</script>";
	}
	else
	{
		echo "<script>alert('Data Update Failed')</script>";
	}
}

?>
<html>
<title>Healthcare</title>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/background.css">
	<link rel="stylesheet" type="text/css" href="../css/biginter.css">
	<link rel="stylesheet" type="text/css" href="../css/icons.css">
	<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
	<link rel="stylesheet" type="text/css" href="../css/protected.css">

	<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
</head>
<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
			<h2>Contact Contents</h2>
	</div>
		</center>
	</div>
	<center>
		<form method="post" class="updatecontactcontents">
			

				<input type="hidden" class="contacttext" name="cc_id" id="cc_id" value="1">

				<label class="label">City/Town</label><br>
				<input type="text" class="contacttext" name="cc_town" id="cc_town" required=""><br>
				

				<label class="label">City/Town Location</label><br>
				<input type="text" class="contacttext" name="cc_location" id="cc_location" required=""><br>
				

				<label class="label">Phone</label><br>
				<input type="number" class="contacttext" name="cc_phone" id="cc_phone" required=""><br>
				

				<label class="label">Contact Hours</label><br>
				<select class="contacttext" name="cc_hours" id="cc_hours" required="">
					<option value="10:00am to 6:00pm">--SELECT--</option>
					<option value="10:00am to 6:00pm">10:00am to 6:00pm</option>
				</select>
				<br>


				<label class="label">Email</label><br>
				<input type="email" class="contacttext" name="cc_email" id="cc_email" required=""><br>
				

				<label class="label">Email Description</label><br>
				<input type="text" class="contacttext" name="cc_description" id="cc_description"required><br>
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				


			
			<center>
				<button class="updatecontactbtn" id="Update" name="Update">
					Update
				</button>
			</center>
		</form>
			<center>
				<button class="bth" onclick="parent.location='adminpanel.php'">
						Back to Home
				</button>
			</center>		
			
		
	</center>

</body>
</html>