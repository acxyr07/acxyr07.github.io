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
			<h4>My Pending Appointment Request</h4>
		</center>
	</div>

	<div class="docdiv3">
		<br>
		<br>
		<br>
			<table style="margin-left: 5px; color: ghostwhite;" cellpadding="10">
			<thead>
				<th style="width: 300px; text-align: left;">Patient's Name</th>
				<th style="width: 100px; text-align: left;">Gender</th>
				<th style="width: 150px; text-align: left;">Contact#</th>
				<th style="width: 240px; text-align: left;">Email</th>
				<th style="width: 400px; text-align: left;">Date and Time</th>
				<th style="width: 150px; text-align: center;">Actions</th>
			</thead>

			<?php
					include_once('../connection/connection.php');
					$showdoctorabout="SELECT * FROM tbl_pending_appointments WHERE doctor_id ='$session_id'";
					$result2=mysqli_query($conn, $showdoctorabout);
			?>
			<?php
		 			while ($rows=mysqli_fetch_assoc($result2)) 
		 			{
		 	?>
		 	<tbody>
		 		<td hidden><?php echo $rows['patient_id'];?></td>
		 		<td><?php echo $rows['patient_fullname'];?></td>
				<td><?php echo $rows['p_gender'];?></td>
				<td><?php echo $rows['p_phone'];?></td>
				<td><?php echo $rows['p_email'];?></td>
				<td><?php echo $rows['Schedule']. ", " .$rows['Schedule_Date'];?></td>
				<td><center>
					<input type="button" class="btn_view" name="View" id="View" placeholder="View" value="View">
					<input type="button" class="btn_respond" name="respond" id="respond" value="Respond" onclick="respond()"></center><br>
</td>
</tbody>
			<?php
		 			}
		 		?>	

			</table>
	</div>
		<!-- View Patient's Medical History Form -->
<div class="popup center">
  
  
  <div class="description">
<form class="medicalhistory" style="background-color:white; padding-top: 40px;">
  			
  			<center><h5 style="font-weight: bold; font-size: 20px;">Medical History Form</h5></center>

  			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_pending_appointments WHERE doctor_id = '$session_id'";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
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
				$showmedform="SELECT * FROM tbl_patient_medical_history WHERE mh_id = patient_id";
				$result5=mysqli_query($conn, $showmedform);
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

	<!-- Respond to Request -->
<div class="popup2 center">

  <div class="description">
  	<br><br>

  		<form class="respond" style="background-color:white;" method="post">
  			
  			<center><label style="font-weight: bold; font-size: 20px;">Respond to Appointment Request Form</label></center>

  		<?php
				include_once('../connection/connection.php');
				$showappointmentsched="SELECT * FROM tbl_pending_appointments";
				$result6=mysqli_query($conn, $showappointmentsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result6)) 
		 			{
		 	?>
		 	<br>
  		
  		
  		<input type="text" name="patient_id" style="height:30px;" value="<?php echo $rows['patient_id'];?>" hidden>
  		
  		<label>Name of Patient</label><br>
			<input type="text" name="patient_fullname" style="height:30px;" value="<?php echo $rows['patient_fullname'];?>" ><br><br><br>
			<label>Gender</label><br>
			<input type="text" name="patient_gender" style="height:30px;" value="<?php echo $rows['p_gender'];?>" ><br>
			<label>Appointment Schedule</label><br>
			<input type="text" name="schedule" style="height:30px;" value="<?php echo $rows['Schedule']. ", " .$rows['Schedule_Date'];?>" ><br>

			<?php
		 			}
		 		?>
			
		 	<br>
			<label>Respond Type</label><br>
			<select style="width:100%; height:30px; cursor: pointer;" name="respond_type"><br>
				<option>Select type</option>
				<option value="Approved">Approved</option>
				<option value="Recommended to a Specialist">Recommend to a Specialist</option>
			</select>

			<label>Enter the name of the recommended Specialist (Optional)</label><br>
			<input type="text" name="recommended_doctor" style="height:30px;" value=""><br>
			<label>Enter the Clinic Address of the recommended Specialist (Optional)</label><br>
			<input type="text" name="recommended_clinic" style="height:30px;" value=""><br>
			<label>Other Comments About The Appointment(Optional)</label><br>
			<input type="text" name="comments" style="height:30px;" value="">
			
			<?php
				include_once('../connection/connection.php');
				$rpdapp="SELECT * FROM tbl_doctor";
				$docresult=mysqli_query($conn, $rpdapp);
			?>
			<?php
		 			while ($rows=mysqli_fetch_assoc($docresult)) 
		 			{
		 	?>
			<input type="text" hidden name="doctor_id" value="<?php echo $rows['doctor_id']; ?>">
			<input type="text" hidden name="doctor_fullname" value="<?php echo $rows['d_firstname']. " " . $rows['d_midname']. " " . $rows['d_lastname']; ?>">
			<input type="text" hidden name="doctor_gender" value="<?php echo $rows['d_gender'];?>"><br>
			<?php
		 			}
		 		?>
		 		<br><br>
		 		<div class="dismiss-btn">
						<button class="btn" name="Send" id="Send" value="Send">Send</button>
				</div>

<?php
   if(isset($_POST['Send']))
{
    require_once("../connection/connection.php");

    $sql = "INSERT INTO tbl_responded_appointments (doctor_id, doctor_fullname, doctor_gender, patient_id, patient_fullname, patient_gender, schedule, respond_type, recommended_doctor, recommended_clinic, comments) VALUES 
    ('". $_POST["doctor_id"] ."',
    '". $_POST["doctor_fullname"] . "',
    '". $_POST["doctor_gender"] . "', 
    '". $_POST["patient_id"] . "',
    '". $_POST["patient_fullname"] ."',
    '". $_POST["patient_gender"] . "',
    '". $_POST["schedule"] . "',
    '". $_POST["respond_type"] . "',
    '". $_POST["recommended_doctor"] . "',
    '". $_POST["recommended_clinic"] . "',
    '". $_POST["comments"] . "')";

        mysqli_query($conn,$sql);
        $current_id = mysqli_insert_id($conn);
        if(!empty($current_id)) 
       {
              echo "<script>alert('Appointment Response Sent Successfully!');</script>";
       }
        
}
?>
		</form>


  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup2-btn">
      Close
    </button>
  </div>
</div>


	

</body>
<script type="text/javascript">
document.getElementById("View").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});

document.getElementById("respond").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup2-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.remove("active");
});
</script>
</html>