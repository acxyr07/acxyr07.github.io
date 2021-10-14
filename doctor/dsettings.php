<?php 
include('../connection/doctorsession.php'); 
?>
<!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="docheader">
		<center>
			<h1 class="docheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
				<nav>
					<a class="blacked" href="dappointment.php"><img src="../icons/reqappointment.png" class="panelicons"></a>
					<a class="blacked" href="dpendingappointment.php"><img src="../icons/myappointment.png" class="panelicons"></a>
					<a class="blacked" href="dmedicalhistory.php"><img src="../icons/medicalhistory.png" class="panelicons"></a>
					<a class="blacked" href="dvaccine.php"><img src="../icons/vaccine.png" class="panelicons"></a>
					<a class="blacked" href="dnotification.php"><img src="../icons/notification.png" class="panelicons"></a>
					<a class="blacked" href="dsettings.php"><img src="../icons/settings.png" class="panelicons"></a>
				</nav>
		</center>
	</div>
	<div class="docdiv2">
		<center>
			<h4>Settings</h4>
		</center>
	</div>

	<center>
		<div class="div4">
					<br>
		<?php
            
                $conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

                $result = $conn2->prepare("SELECT * FROM tbl_doctor ORDER BY doctor_id ASC");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['doctor_id'];
          ?>

        <?php if($row['d_photo'] != ""): ?>
          <img class="PatientProfileImage" src="../uploads/<?php echo $row['d_photo']; ?>">
        <?php else: ?>
          <img class="PatientProfileImage"src="../image/default.png"><br>
        <?php endif; ?>

         <?php } ?>
         
				<nav class="profilenavigation">
					<br>					
					<button onclick="parent.location='doctorprofile.php'">Profile</button><br>
					<button onclick="parent.location='dmedicalhistory.php'">Medical History</button><br>
					<button onclick="parent.location='help.php'">Help</button><br>
					<button onclick="parent.location='logout.php'">Logout</button><br>

				</nav>
		</div>
	</center>


</body>
</html>