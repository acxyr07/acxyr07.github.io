<?php
			include ('../connection/patientsession.php');
			include ('../connection/connection.php');
			$displayprofileinfo="SELECT * FROM tbl_patient WHERE patient_id='$session_id'";
			$result2=mysqli_query($conn, $displayprofileinfo);
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
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/panel.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="header">
		<center>
			<h1 class="headerh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="div2">
		<center>
			<h3>My Profile</h3>
		</center>
	</div>

	<center>
		<div class="division">
			<br><br>
			<?php
						
								$conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

								$result = $conn2->prepare("SELECT * FROM tbl_patient WHERE patient_id ='$session_id'");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['patient_id'];
					?>

				<?php if($row['p_profile'] != ""): ?>
					<img class="PatientProfileImage" src="../uploads/<?php echo $row['p_profile']; ?>">
				<?php else: ?>
					<img class="PatientProfileImage"src="../image/default.png"><br>
				<?php endif; ?>

				<?php } ?>



			<?php
		 			while ($rows=mysqli_fetch_assoc($result2)) 
		 			{
		 	?>
				
		 		<br>
		 		<br><br>
				<label>Patient ID#</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['patient_id'];?>"><br><br>

				<label>Name</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['p_firstname']," ",$rows['p_midname']," ",$rows['p_lastname'];?>"><br><br>

				<label>Gender</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['p_gender'];?>"><br><br>

				<label>Birthdate</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['p_birthdate'];?>"><br><br>

				<label>Phone</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['p_phone'];?>"><br><br>

				<label>Email</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['p_email'];?>"><br><br>

				<label>Address</label>
				<input type="text" class="textline" name="" readonly value="<?php echo $rows['p_address'];?>"><br><br>


				<button class="upp" onclick="parent.location='pupdateprofile.php'">Update Profile</button>

				<button class="ups" onclick="parent.location='pupdatesecurity.php'">Update Security</button>

				<button class="bth" onclick="parent.location='psettings.php'">Back To Panel</button>

				<?php
		 			}
		 		?>	
		</div>
	</center>

</body>
</html>