<?php
include('../connection/patientsession.php'); 
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
<link rel="stylesheet" type="text/css" href="../css/icons.css">
<link rel="stylesheet" type="text/css" href="../css/panel.css">
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="header">
		<center>
			<h1 class="headerh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
				<nav>
					<a class="blacked" href="preqappointment.php"><img src="../icons/reqappointment.png" class="panelicons"></a>
					<a class="blacked" href="pappointment.php"><img src="../icons/myappointment.png" class="panelicons"></a>
					<a class="blacked" href="pvaccine.php"><img src="../icons/vaccine.png" class="panelicons"></a>
					<a class="blacked" href="pmedicalhistory.php"><img src="../icons/medicalhistory.png" class="panelicons"></a>
					<a class="blacked" href="pnotification.php"><img src="../icons/notification.png" class="panelicons"></a>
					<a class="blacked" href="psettings.php"><img src="../icons/settings.png" class="panelicons"></a>
				</nav>
		</center>
	</div>
	<div class="div2">
		<center>
			<h4>Settings</h4>
		</center>
	</div>


	<center>
		<div class="div4">
				<br>
				<?php
						
								$conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

								$result = $conn2->prepare("SELECT * FROM tbl_patient WHERE patient_id='$session_id'");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['patient_id'];
					?>

				<?php if($row['p_profile'] != ""): ?>
					<img class="PatientProfileImage" src="../uploads/<?php echo $row['p_profile']; ?>">
				<?php else: ?>
					<img class="PatientProfileImage"src="../image/default.png"><br>
				<?php endif; ?>

				<?php } ?><br><br>
			<nav class="profilenavigation">
				<br>
				<button onclick="parent.location='pprofile.php'">Profile</button><br>
				<button onclick="parent.location='pmedicalhistory.php'">Medical History</button><br>
				<button onclick="parent.location='help.php'">Help</button><br>
				<button onclick="parent.location='logout.php'">Logout</button><br>
			</nav>
		</div>
	</center>
</body>
</html>