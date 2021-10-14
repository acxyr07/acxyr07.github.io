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
			<h4>My Appointment</h4>
		</center>
	</div>

	<div class="docdiv3">
		<br>
		<br>
		
		 	<table style="margin-left: 5px; color: ghostwhite; text-align: left;" cellpadding="10" >
		 		<thead>
		 			<th style="width: 400px;">Patient's Name</th>
		 			<th style="width: 100px;">Gender</th>
		 			<th style="width: 350px;">Schedule</th>
		 			<th style="width: 350px; text-align: center;">Actions</th>
		 		</thead>
		 		<?php
					include_once('../connection/connection.php');
					$showapprovedapp="SELECT * FROM tbl_responded_appointments WHERE doctor_id ='$session_id'";
					$approvedapp=mysqli_query($conn, $showapprovedapp);
				
		 			while ($rows=mysqli_fetch_assoc($approvedapp)) 
		 			{
		 		?>
		 		<tbody>
		 			<td style="text-align: left;"><?php echo $rows['patient_fullname'];?></td>
		 			<td style="text-align: left;"><?php echo $rows['patient_gender'];?></td>
		 			<td style="text-align: left;"><?php echo $rows['schedule'];?></td>
		 			<td style="text-align: center;">
		 				<input type="button" class="btn_resched" name="Reschedule" id="Reschedule" value="Reschedule" style="width: 80%;">
		 				<input type="button" class="btn_respond" name="MAD" id="MAD" value="Mark as Done" style="width: 80%;"><br><br>
		
		 			</td>
		 		</tbody>
		 		<?php
		 			}
		 		?>	
		 	</table>
		
	</div>
	<!-- Reschedule Form -->
	<div class="popup center">
  <div class="icon">
    <img src="../icons/healthcarelogo.png"><br>
    <label style="font-weight: bold; font-size: 20px; text-align: center;">Reschedule Form</label>
  </div>
  <div class="description">
  		<form class="rescheduleform" style="background-color:white;" method="post">
  			
					


		<br>
		<?php
					include_once('../connection/connection.php');
					$forresched="SELECT * FROM tbl_responded_appointments WHERE doctor_id ='$session_id'";
					$formresched=mysqli_query($conn, $forresched);
				
		 			while ($rows=mysqli_fetch_assoc($formresched)) 
		 			{
		 ?>
		 				<input type="text" name="patient_id" style="height:30px; width: 69%;" value="<?php echo $rows['patient_id'];?>" hidden><br>

  		<label>Name of Patient</label><br>
  		  		<input class="disabled" type="text" name="patient_fullname" style="height:30px; width: 90%;" value="<?php echo $rows['patient_fullname'];?>"disabled><br>
  		<label>Gender</label><br>
						<input class="disabled" type="text" name="patient_gender" style="height:30px; width: 90%;" value="<?php echo $rows['patient_gender'];?>"disabled><br>
			<label>Appointment Schedule</label><br>
						<input class="disabled" type="text" name="schedule" style="height:30px; width: 90%;" value="<?php echo $rows['schedule'];?>"disabled><br>

			<label>New Appointment Schedule</label><br>
						<input type="text" name="newSched" style="height:30px; width: 90%;" value="<?php echo $rows['schedule'];?>"><br>

			<label>Comments Regarding about the Reschedule</label><br>
						<input type="text" name="comments" style="height:30px; width: 90%;" value="<?php echo $rows['comments'];?>"><br>
			
		 	<br>
			<?php
		 			}
		 		?>
		 	<?php
				include_once("../connection/connection.php");

				if (isset($_POST['UpdateSchedule'])) 
				{
					$id= $_POST['patient_id'];

					$query="UPDATE tbl_responded_appointments SET schedule='$_POST[newSched]', comments='$_POST[comments]' WHERE patient_id='$_POST[patient_id]'";
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




			<div class="dismiss-btn">
				<button class="btn" name="UpdateSchedule" id="UpdateSchedule" value="">Update Schedule</button>
			</div>

		</form>
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
document.getElementById("Reschedule").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
</html>