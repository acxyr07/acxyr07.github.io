<?php
	include('../connection/patientsession.php'); 
	include('../connection/connection.php');
	$showdoctor="SELECT * FROM tbl_doctor";
	$result=mysqli_query($conn, $showdoctor);
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
<link rel="stylesheet" type="text/css" href="../css/formpopup.css">
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<link rel="stylesheet" type="text/css" href="../css/table.css">
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
			<h4>Request Doctor Appointment</h4>
		</center>
	</div>

	<div class="div3" style="height: auto;" style="text-align:left;">
		<table class="aamtbl">
			<thead>
				<th>Doctor's Name</th>
				<th>Specialty</th>
				<th>Clinic Address</th>
				<th>Contact #</th>
				<th>Actions</th>
			</thead>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result)) 
		 			{
		 	?>
		 	<tbody>
			<tr>
				<td hidden style="color: transparent;"><?php echo $rows['doctor_id'];?></td>
				<td  data-label="Doctor's Name"><?php echo $rows['d_firstname']," ",$rows['d_lastname'] ;?></td>
			<?php
		 			}
		 	?>

			<?php
					include_once('../connection/connection.php');
					$showdoctorabout="SELECT * FROM tbl_doctor_about";
					$result2=mysqli_query($conn, $showdoctorabout);
			?>
			<?php
		 			while ($rows=mysqli_fetch_assoc($result2)) 
		 			{
		 	?>
				<td  data-label="Specialty"><?php echo $rows['Specialty'];?></td>
				<td data-label="Clinic Address"><?php echo $rows['Clinic_address'];?></td>
				<td  data-label="Contact #"><?php echo $rows['Contact_no'];?></td>

				<td  data-label="Actions">
					<center>
				<input type="button" class="inlined inlinedpink" id="Profile" value="Profile" >
				<input type="button" class="inlined inlinedorange" id="Schedule" value="Schedule">
				<input type="button" class="inlined inlinedviolet" id="Requestbtn" value="Request "></td>
					</center>
			</tr>
			</tbody>
			<?php
		 			}
		 		?>	
		</table>
	</div>

	<!-- Schedule -->
<div class="popup center">
  <div class="icon">
    <img src="../icons/healthcarelogo.png">
  </div>
  <div class="title">
    Doctor's Schedule
  </div>
  <div class="description">

  	<form style="background-color:white;" class="profileform">
  		<?php
				include_once('../connection/connection.php');
				$showdoctor="SELECT * FROM tbl_doctor";
				$result3=mysqli_query($conn, $showdoctor);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result3)) 
		 			{
		 	?>


  			<label>Doctor's Name</label><br>
			<input type="text" disabled name="" style="height:30px; margin-top:-24px" value="<?php echo $rows['d_firstname']," ",$rows['d_lastname']; ?>"><br>

			<?php
		 			}
		 		?>

			<center><label style="font-weight: bold; font-size: 20px;">Schedule</label></center><br>

			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_doctor_schedule";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>
		 	<br>
		 	<br>
			<label>Sunday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Sunday']; ?>"><br>
			<label>Monday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Monday']; ?>"><br>
			<label>Tuesday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Tuesday']; ?>"><br>
			<label>Wednesday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Wednesday']; ?>"><br>
			<label>Thursday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Thursday']; ?>"><br>
			<label>Friday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Friday']; ?>"><br>
			<label>Saturday</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Saturday']; ?>"><br>
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

<!-- Request Appointment -->
<div class="popup2 center">
  <div class="icon">
    <img src="../icons/healthcarelogo.png">
  </div>
  <div class="title">
    Request Appointment
  </div>
  <div class="description">

  	<form method="post" style="background-color:white;" class="requestform">
  			<?php
				include_once('../connection/connection.php');
				$showdoctor="SELECT * FROM tbl_doctor";
				$result3=mysqli_query($conn, $showdoctor);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result3)) 
		 			{
		 	?>

		 	<input type="text" name="doctor_id" style="height:30px;" value="<?php echo $rows['doctor_id']; ?>" hidden>
  			<label>Doctor's Name</label>
			<input type="text" disabled name="" style="margin-top: -5px; height:30px; border: currentColor; background: transparent;" value="<?php echo $rows['d_firstname']," ",$rows['d_lastname']; ?>" >

			<?php
		 			}
		 		?>

			

			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_doctor_schedule";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>
			<select name="Schedule" style="width: 100%; margin-top:3px;">
				<option>Choose a Schedule</option>
				<option value="Sunday <?php echo $rows['Sunday']; ?>">Sunday: <?php echo $rows['Sunday']; ?></option>
				<option value="Monday <?php echo $rows['Monday']; ?>">Monday: <?php echo $rows['Monday']; ?></option>
				<option value="Tuesday <?php echo $rows['Tuesday']; ?>">Tuesday: <?php echo $rows['Tuesday']; ?></option>
				<option value="Wednesday <?php echo $rows['Wednesday']; ?>">Wednesday: <?php echo $rows['Wednesday']; ?></option>
				<option value="Thursday <?php echo $rows['Thursday']; ?>">Thursday: <?php echo $rows['Thursday']; ?></option>
				<option value="Friday <?php echo $rows['Friday']; ?>">Friday: <?php echo $rows['Friday']; ?></option>
				<option value="Saturday <?php echo $rows['Saturday']; ?>">Saturday: <?php echo $rows['Saturday']; ?></option>
			</select>
			<br><br><br><br>

			<label>Schedule Date</label><br>
			<input type="date" name="Schedule_Date" style="height:30px; width: 100%; cursor: pointer; margin-top:5px;"><br>



			<?php
		 			}
		 	?>

		 	<?php
				include_once('../connection/connection.php');
				$showpatientinfo="SELECT * FROM tbl_patient WHERE patient_id='$session_id'";
				$result6=mysqli_query($conn, $showpatientinfo);
			?>
			<?php
		 			while ($rows=mysqli_fetch_assoc($result6)) 
		 			{
		 	?>
		 		<input type="text" name="patient_id" style="height:30px;" value="<?php echo $rows['patient_id']; ?>" hidden>
		 		<br><br>
		 		<label>Patient's Full Name</label><br>
		 		<input type="text" name="patient_fullname" style="height:30px;" value="<?php echo $rows['p_firstname']," ",$rows['p_midname']," ",$rows['p_lastname']; ?>"><br>
		 		<label>Gender</label><br>
		 		<select type="text" name="p_gender" style="height:30px;" value="<?php echo $rows['p_gender']; ?>">
		 			<option>Select Gender</option>
		 			<option value="Male">Male</option>
		 			<option value="Female">Female</option>
		 		</select><br>
		 		<label>Birthdate</label><br>
		 		<input type="date" name="p_birthdate" style="height:30px;" value="<?php echo $rows['p_birthdate']; ?>"><br>
		 		<label>Contact # </label><br>
		 		<input type="text" name="p_phone" style="height:30px;" value="<?php echo $rows['p_phone']; ?>"><br>
		 		<label>Email </label><br>
		 		<input type="text" name="p_email" style="height:30px;" value="<?php echo $rows['p_email']; ?>"><br>
		 	<?php
		 			}
		 	?>

		 	<?php
				include_once('../connection/connection.php');
				$showpatientinfo="SELECT * FROM tbl_patient_medical_history WHERE patient_id='$session_id'";
				$result6=mysqli_query($conn, $showpatientinfo);
			?>
			<?php
		 			while ($rows=mysqli_fetch_assoc($result6)) 
		 			{
		 	?>
		 	<input type="text" name="Height" style="height:30px;" value="<?php echo $rows['Height']; ?>" hidden>
		 	<input type="text" name="Weight" style="height:30px;" value="<?php echo $rows['Weight']; ?>" hidden>
		 	<input type="text" name="Blood_type" style="height:30px;" value="<?php echo $rows['Blood_type']; ?>" hidden>
		 	<input type="text" name="Drug_allergies" style="height:30px;" value="<?php echo $rows['Drug_allergies']; ?>" hidden>
		 	<input type="text" name="Any_illness" style="height:30px;" value="<?php echo $rows['Any_illness']; ?>" hidden>
		 	<input type="text" name="Other_illness" style="height:30px;" value="<?php echo $rows['Other_illness']; ?>" hidden>
		 	<input type="text" name="Past_operations" style="height:30px;" value="<?php echo $rows['Past_operations']; ?>" hidden>
		 	<input type="text" name="Current_medication" style="height:30px;" value="<?php echo $rows['Current_medication']; ?>" hidden>
		 	<input type="text" name="Exercise" style="height:30px;" value="<?php echo $rows['Exercise']; ?>" hidden>
		 	<input type="text" name="Dietplan" style="height:30px;" value="<?php echo $rows['Dietplan']; ?>" hidden>
		 	<input type="text" name="Alcoholc" style="height:30px;" value="<?php echo $rows['Alcoholc']; ?>" hidden>
		 	<input type="text" name="CaffeineC" style="height:30px;" value="<?php echo $rows['CaffeineC']; ?>" hidden>
		 	<input type="text" name="SmokeC" style="height:30px;" value="<?php echo $rows['SmokeC']; ?>" hidden>
		 	<input type="text" name="Cmdh" style="height:30px;" value="<?php echo $rows['Cmdh']; ?>" hidden>
		 	<input type="text" name="Ic_name" style="height:30px;" value="<?php echo $rows['Ic_name']; ?>" hidden>
		 	<input type="text" name="Ic_phone" style="height:30px;" value="<?php echo $rows['Ic_phone']; ?>" hidden>
		 	<input type="text" name="Ic_Address" style="height:30px;" value="<?php echo $rows['Ic_Address']; ?>" hidden>
		 	<input type="text" name="Ic_Email" style="height:30px;" value="<?php echo $rows['Ic_Email']; ?>" hidden>
		 	<input type="text" name="lc_date" style="height:30px;" value="<?php echo $rows['lc_date']; ?>" hidden>
		 	<?php
		 			}
		 	?>

			<div class="dismiss-btn">
    <button id="Request" name="Request">
      Request Appointment
    </button>
  </div>

			<?php
   if(isset($_POST['Request']))
{
    require_once("../connection/connection.php");

    $sql = "INSERT INTO tbl_pending_appointments (patient_id, doctor_id, patient_fullname, p_gender,p_birthdate, p_phone, p_email, Schedule, Schedule_Date, Height, Weight, Blood_type, Drug_allergies, Any_illness, Other_illness, Past_operations, Current_medication, Exercise, Dietplan, Alcoholc, CaffeineC, SmokeC, Cmdh, Ic_name, Ic_phone, Ic_Address, Ic_Email, lc_date) VALUES 
    ('". $_POST["patient_id"] ."', 
    '". $_POST["doctor_id"] ."',
    '". $_POST["patient_fullname"] . "',
    '". $_POST["p_gender"] . "', 
    '". $_POST["p_birthdate"] . "',
    '". $_POST["p_phone"] ."',
    '". $_POST["p_email"] . "',
    '". $_POST["Schedule"] . "',
    '". $_POST["Schedule_Date"] . "',
    '". $_POST["Height"] . "',
    '". $_POST["Weight"] . "',
    '". $_POST["Blood_type"] . "',
    '". $_POST["Drug_allergies"] . "',
    '". $_POST["Any_illness"] . "',
    '". $_POST["Other_illness"] . "',
    '". $_POST["Past_operations"] . "',
    '". $_POST["Current_medication"] . "',
    '". $_POST["Exercise"] . "',
    '". $_POST["Dietplan"] . "',
    '". $_POST["Alcoholc"] . "',
    '". $_POST["CaffeineC"] . "',
    '". $_POST["SmokeC"] . "',
    '". $_POST["Cmdh"] . "',
    '". $_POST["Ic_name"] . "',
    '". $_POST["Ic_phone"] . "',
    '". $_POST["Ic_Address"] . "',
    '". $_POST["Ic_Email"] . "',
    '" . $_POST["lc_date"] . "')";

        mysqli_query($conn,$sql);
        $current_id = mysqli_insert_id($conn);
        if(!empty($current_id)) 
       {
              echo "<script>alert('Appointment Request Successfully Sent!');</script>";
       }
        
}
?>

		</form>
  <div class="dismiss-btn">
    <button id="dismiss-popup2-btn">
      Close
    </button>
  </div>
</div>
</div>

	
	<!-- Profile -->
<div class="popup3 center">
  <div class="icon">
    <img src="../icons/healthcarelogo.png">
  </div>
  <div class="title">
    Doctor's Profile
  </div>
  <div class="description">
<form style="background-color:white;" class="doctorprofile">

  			<center>
  				<?php
            
                $conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

                $result = $conn2->prepare("SELECT * FROM tbl_doctor ORDER BY doctor_id LIMIT 1");
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
  			</center>
  			<br>
  			<?php
				include_once('../connection/connection.php');
				$showdoctor="SELECT * FROM tbl_doctor";
				$result3=mysqli_query($conn, $showdoctor);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result3)) 
		 			{
		 	?>


  			<label>Doctor's Name</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['d_firstname']," ",$rows['d_midname']," ",$rows['d_lastname']; ?>" ><br>

			<?php
		 			}
		 		?>

			<?php
				include_once('../connection/connection.php');
				$showdoctorsched="SELECT * FROM tbl_doctor_about";
				$result5=mysqli_query($conn, $showdoctorsched);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result5)) 
		 			{
		 	?>
			<label>About me</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['About_me']; ?>"><br>
			<label>Specialty</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Specialty']; ?>"><br>
			<label>Qualification</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Qualification']; ?>"><br>
			<label>Clinic Address</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Clinic_address']; ?>"><br>
			<label>Contact #</label><br>
			<input type="text" disabled name="" style="height:30px;" value="<?php echo $rows['Contact_no']; ?>"><br>

			<?php
		 			}
		 		?>
		</form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup3-btn">
      Close
    </button>
  </div>
</div>

</body>
<script>
/*Schedule*/
	document.getElementById("Schedule").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
/*Request Appointment*/
document.getElementById("Requestbtn").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup2-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.remove("active");
});
/*Profile*/
document.getElementById("Profile").addEventListener("click",function(){
  document.getElementsByClassName("popup3")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup3-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup3")[0].classList.remove("active");
});

</script>
</html>