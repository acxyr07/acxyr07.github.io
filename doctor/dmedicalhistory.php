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
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/formcontainers.css">
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
			<h4>My Patient Medical History</h4>
		</center>
	</div>

	<div class="docdiv3">
		<br><br>
		
			<table style="margin-left:5px; color: ghostwhite;" cellpadding="10">
			<thead>
				<th style="width: 300px; text-align: left;">Patient's Name</th>
				<th style="width: 100px; text-align: left;">Gender</th>
				<th style="width: 400px; text-align: left;">Date Schedule</th>
				<th style="width: 400px; text-align: left;">Email & Contact</th>
				<th style="width: 200px; text-align: center;">Actions</th>
			</thead>

			<?php
					include_once('../connection/connection.php');
					$showdoctorabout="SELECT * FROM tbl_pending_appointments WHERE doctor_id ='$session_id'";
					$result2=mysqli_query($conn, $showdoctorabout);
				$i=1;
		 			while ($rows=mysqli_fetch_assoc($result2)) 
		 			{
		 	?>
		 	<tbody>
		 		<td hidden=""><?php echo $rows['patient_id'];?></td>
		 		<td><?php echo $rows['patient_fullname'];?></td>
				<td><?php echo $rows['p_gender'];?></td>

				<td><?php echo $rows['Schedule_Date']." ". $rows['Schedule'];?></td>
				<td><?php echo $rows['p_email']." / ". $rows['p_phone'];?></td>

				<td><center>
					<input type="button" class="btn_view" id="viewmedhistform" name="viewmedhistform" value="View" <?php $i++?>>
					</center><br>
</td>
</tbody>
			<?php
		 			}
		 		?>	

			</table>
	</div>
		
<!-- Medical History Form (Doctor) -->
<div class="popup center">
  
  <div class="description">

  		<form class="medicalhistory" style="background-color:white;  padding-top: 40px;">
  			
  			<center><h5 style="font-weight: bold; font-size: 20px;">Medical History Form</h5></center>

  			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_pending_appointments";
				$result5=mysqli_query($conn, $showdoctorsched);
			
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>

  			<label style="margin-left: 45px;">Height</label>
  			<label style="margin-left: 50px;">Weight</label>
  			<label style="margin-left: 45px;">Blood Type</label><br>
  		<center>
			<input type="text" disabled name="" style="height:30px; width: 80px;" value="<?php echo $rows['Blood_type']; ?>">
			<input type="text" disabled name="" style="height:30px; width: 80px;" value="<?php echo $rows['Weight']; ?>">
			<input type="text" disabled name="" style="height:30px; width: 80px;" value="<?php echo $rows['Height']; ?>"><br>
			</center>
			<?php
		 			}
		 		?>
			

			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_patient_medical_history";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>
		 	<br>
			<label style="margin-top: 5px;">Drug Allergies</label>
			<textarea type="text" disabled name=""><?php echo $rows['Drug_allergies']; ?></textarea>
			<label style="margin-top: 30px;">Any illness</label>
			<textarea type="text" disabled name=""><?php echo $rows['Any_illness']; ?> </textarea>
			<label style="margin-top: 30px;">Other illness</label><br>
			<textarea type="text" disabled name=""><?php echo $rows['Other_illness']; ?></textarea>
			<label style="margin-top: 30px;">Past Operations</label><br>
			<textarea type="text" disabled name=""><?php echo $rows['Past_operations']; ?></textarea>
			<label style="margin-top: 30px;">Current Medication</label>
			<textarea type="text" disabled name=""><?php echo $rows['Current_medication']; ?></textarea><br>
			<label style="margin-top: 30px;">Exercise</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Exercise']; ?>"><br>

			<label style="margin-top: 40px; margin-left: -44px;">Dietplan</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Dietplan']; ?>"><br>
			<label style="margin-top: 40px; margin-left: -44px;">Alcohol</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Alcoholc']; ?>"><br>
			<label style="margin-top: 40px;">Caffeine</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['CaffeineC']; ?>"><br>
			<br>
			<label style="margin-top: 40px; margin-left: -44px;">Smoke</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['SmokeC']; ?>"><br><br><br><br><br><br><br><br><br><br><br><br>


			<?php
		 			}
		 		?>
		</form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup-btn">
      Close
    </button>
  </div>
</div>

</body>
<script type="text/javascript">
document.getElementById("viewmedhistform").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
</html>