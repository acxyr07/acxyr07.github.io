<?php
			include('../connection/patientsession.php'); 
			include('../connection/connection.php');
			$pmedicalhistory="SELECT * FROM tbl_patient_medical_history WHERE patient_id='$session_id'";
			$medformresult=mysqli_query($conn, $pmedicalhistory);
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
<link rel="stylesheet" type="text/css" href="../css/formpopup2.css">
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
			<h4>My Medical History</h4>
		</center>
	</div>	

	<div class="div3">
			<center><button class="addmedformbtn" onclick="parent.location='pmedform.php'";>Add Medical Form</button></center>

			<table style="margin-left: 60px;padding-top: 30px; color: ghostwhite; text-align: left;" cellpadding="10" >
		 		<tr>
		 			<th style="width: 300px;">Date Added</th>
		 			<th style="width: 300px;"><center>Action</center></th>
		 		</tr>
		 	
	<?php
		 			while ($rows=mysqli_fetch_assoc($medformresult)) 
		 			{
		 	?>
		 			
		 			<tr>
		 				<td>
		 					<?php echo $rows['lc_date'];?>
		 				</td>
		 				<td>
		 					<center><button class="btn_view" id="viewForm">View</button></center>
		 				</td>
		 			</tr>

		<?php
		 			}
		 		?>	

		 	</table>
		
	</div>

	<!-- Show Medical Form Modal -->
<div class="popup center">
  <div class="description">

  		<form style="background-color:white;" class="medicalhistory">
  			
  			<center><h5 style="font-weight: bold; font-size: 20px;">Medical History Form</h5></center>

  			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_patient_medical_history WHERE patient_id='$session_id'";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>

  			<label style="margin-left: 60px;">Height</label>
  			<label style="margin-left: 40px;">Weight</label>
  			<label style="margin-left: 45px;">Blood Type</label><br>
			<input type="text" disabled name="" style="height:30px; width: 80px;" value="<?php echo $rows['Blood_type']; ?>">
			<input type="text" disabled name="" style="height:30px; width: 80px;" value="<?php echo $rows['Weight']; ?>">
			<input type="text" disabled name="" style="height:30px; width: 80px;" value="<?php echo $rows['Height']; ?>"><br>

			<?php
		 			}
		 		?>
			

			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_patient_medical_history WHERE patient_id ='$session_id'";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>
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
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['SmokeC']; ?>"><br><br><br><br><br><br><br><br><br><br><br>


			<?php
		 			}
		 		?>
	
  </div>
  <div class="dismiss-btn">
  	<button>Delete</button>
    <button id="dismiss-popup-btn">
      Close
    </button>
  </div>
</div>
</form>

</body>
<script type="text/javascript">
/*Show Medical Form Modal*/
	document.getElementById("viewForm").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
</html>