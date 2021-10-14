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
<link rel="stylesheet" type="text/css" href="../css/formcontainers.css">
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
			<h4>My Appointment</h4>
		</center>
	</div>

	<div class="div3">

		 	<table style="margin-left: 40px; color: ghostwhite; text-align: left;" cellpadding="10" >
		 		<tr>
		 			<th style="width: 300px;">Doctor's Name</th>
		 			<th style="width: 100px;">Gender</th>
		 			<th style="width: 350px;">Schedule</th>
		 			<th style="width: 500px; text-align: center;">Actions</th>
		 		</tr>

		 		<?php

					include_once('../connection/connection.php');
					$showapprovedapp="SELECT * FROM tbl_responded_appointments WHERE patient_id ='$session_id'";
					$approvedapp=mysqli_query($conn, $showapprovedapp);
				?>
	
		 		<?php
		 		$i = 1;
		 			if ($approvedapp) {
		 				foreach ($approvedapp as $rows) {		 				
		 			
		 		?>
		 		<tbody>
		 		<tr>
		 			<td hidden><input hidden type="text" name="rpa_id" value="<?php echo $rows['rpa_id']; ?>"></td>
		 			<td style="text-align: left;"><?php echo $rows['doctor_fullname'];?></td>
		 			<td style="text-align: left;"><?php echo $rows['doctor_gender'];?></td>
		 			<td style="text-align: left;"><?php echo $rows['schedule'];?></td>

		 			<td style="text-align: center;">


		 		
		 				<button class="btn_resched" name="reschedule" id="reschedule" value="<?php echo $rows['rpa_id'];?>">Reschedule</button>

		 				<br>
		 			
		 		
		 				<button type="button" class="btn_view" id="cancelappt" name="cancelappt" value="Cancel Appt."onclick="parent.location='cancelappointment.php?rpa_id=<?php echo $rows['rpa_id'];?>'">Cancel Appt.</button>
		 				<br><br>
		 				</td>
		 			</tr> 
		 			<?php
		 				}

		 			}
		 		?>
		 	
				
		 			</table>
		 	</tbody>
	</div>

	<!-- Patient Reschedule Form -->
<div class="popup center">
  <div class="icon">
    <img src="../icons/healthcarelogo.png">
  </div>
  <div class="title">
    Reschedule Form
  </div>
  <div class="description">



  	<form class="patientresched" style="background-color:white;" method="post">
<table>
		<?php
					include_once('../connection/connection.php');

					$forresched="SELECT * FROM tbl_responded_appointments WHERE patient_id='$session_id'";
					$fordisplay=mysqli_query($conn, $forresched);
		 ?>
		 <?php

		 			while ($rows=mysqli_fetch_array($fordisplay)) { ?>


		 <input hidden type="text" id="rpa_id" name="rpa_id" value="<?php echo$rows['rpa_id'];?>">
		 <input type="text" name="doctor_id" style="height:30px; width: 60%;" value="<?php echo $rows['doctor_id'];?>" hidden><br>

  		<label>Name of Doctor</label>
			<input type="text" name="doctor_fullname" style="height:30px; width: 100%;" value="<?php echo $rows['doctor_fullname'];?>" disabled ><br><br>
			<label>Gender</label>
			<input type="text" name="doctor_gender" style="height:30px; width: 100%;" value="<?php echo $rows['doctor_gender'];?>"disabled><br>
			
			<label>Appointment Schedule</label>
			<input type="text" name="schedule" style="height:30px; width: 100%;" value="<?php echo $rows['schedule'];?>"disabled><br>

			<label>New Appointment Schedule</label>
			<input type="text" name="newSched" style="height:30px; width: 100%; border: 1px solid black; border-radius: 5px" value="<?php echo $rows['schedule'];?>"><br>

			<label>Comments Regarding about the Reschedule</label>
			<input type="text" name="comments" style="height:30px; width: 100%;" value="<?php echo $rows['comments'];?>" disabled>
			
		 	<br>
			<?php } ?>


			<div class="dismiss-btn">
				<button class="btn" name="UpdateSchedule" id="UpdateSchedule" value="">Update Schedule</button>
			</div>
	<?php
				include_once("../connection/connection.php");

				if (isset($_POST['UpdateSchedule']))
				{
					$rpa_id= $_REQUEST['rpa_id'];

					$query="UPDATE tbl_responded_appointments SET schedule='$_POST[newSched]', comments='$_POST[comments]' WHERE rpa_id= $rpa_id";
					$query_update = mysqli_query($conn,$query);	

				if ($query_update)
				{
					echo "<script>alert('Data Update Success')</script>";
				}
				else
				{
					echo "<script>alert('Data Update Failed')</script>";
				}
			}

			?>
		</form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup-btn">
      Close
    </button>
  </div>

  </table>
</div>

</body>	
<script type="text/javascript">

/*Patient Reschedule Form*/
	document.getElementById("reschedule").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
</html>