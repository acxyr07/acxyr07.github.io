<?php
					include ("../connection/patientsession.php");

					include ("../connection/connection.php");

					if(isset($_POST['Update'])) 
				{
					$id= $_REQUEST['patient_id'];

					$query="UPDATE tbl_patient SET p_firstname='$_POST[p_firstname]', p_midname='$_POST[p_midname]', p_lastname='$_POST[p_lastname]', p_gender='$_POST[p_gender]', p_birthdate='$_POST[p_birthdate]', p_email='$_POST[p_email]', p_phone='$_POST[p_phone]', p_address='$_POST[p_address]' WHERE patient_id='$session_id'";
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
<link rel="stylesheet" type="text/css" href="../css/forimageupload.css">
<body oncontextmenu="return false;">
	<div class="header">
		<center>
			<h1 class="headerh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="div2">
		<center>
			<h3>Update Profile</h3>
		</center>
	</div>

	<center>
		<div class="division" style="height: auto; padding-bottom: 40px;">
			<br>
				
		

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

		<form action="edit_PDO.php<?php echo '?patient_id='.$id; ?>" method="post" enctype="multipart/form-data">
					<input type="file" id="image" name="image" class="file" accept="image/*" required><br>
			
			
				<input type="submit" name="submit" class="updatephoto"value="Submit"><br>
			</form>
				<?php } ?>

				


			<form method="post" action="pupdateprofile.php">

			<?php
				include_once('../connection/connection.php');
				$displayprofile="SELECT * FROM tbl_patient WHERE patient_id ='$session_id'";
				$result=mysqli_query($conn, $displayprofile);
			?>
			<?php
		 			while ($rows=mysqli_fetch_assoc($result)) 
		 			{
		 	?>
				<input type="text" class="textline2" name="patient_id" id="patient_id" hidden="" value="<?php echo $rows['patient_id'];?>"><br><br>

				<label>First Name</label>
				<input type="text" class="textline2" name="p_firstname" value="<?php echo $rows['p_firstname'];?>"><br><br>

				<label>Middle Name</label>
				<input type="text" class="textline2" name="p_midname" value="<?php echo $rows['p_midname'];?>"><br><br>

				<label>Last Name</label>
				<input type="text" class="textline2" name="p_lastname" value="<?php echo $rows['p_lastname'];?>"><br><br>

				<label>Gender</label>
				<select class="textline2" name="p_gender" value="<?php echo $rows['p_gender'];?>">
					<option class="textline2" value="Male">Male</option>
					<option class="textline2" value="Female">Female</option>
					<option class="textline2" value="LGBT">LGBT</option>
				</select><br><br>

				<label>Birthdate</label>
				<input type="date" class="textline2" name="p_birthdate" value="<?php echo $rows['p_birthdate'];?>"><br><br>

				<label>Phone</label>
				<input type=" number" class="textline2" name="p_phone" value="<?php echo $rows['p_phone'];?>"><br><br>

				<label>Email</label>
				<input type="email" class="textline2" name="p_email" value="<?php echo $rows['p_email'];?>"><br><br>

				<label>Address</label>
				<input type="text" class="textline2" name="p_address" value="<?php echo $rows['p_address'];?>"><br><br>


				<button class="btndoneUpdate" name="Update" id="Update" value="Update"> Update </button>


			</form>	
			<?php
		 			}
		 		?>

				<button class="bth" onclick="parent.location='pprofile.php'">Back to Profile Settings</button>

		</div>
	</center>

</body>
</html>