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
			<h4>Update Security</h4>
		</center>
	</div>

	<center>
		<div class="division" style="height: 420px;">
			<form class="readonly">
				<?php
				include_once('../connection/connection.php');
				$showdoctor="SELECT * FROM tbl_patient WHERE patient_id ='$session_id'";
				$result3=mysqli_query($conn, $showdoctor);
			?>

			<?php
		 			while ($rows=mysqli_fetch_assoc($result3)) 
		 			{
		 	?>

				<label style="margin-top: 60px;">Old Username</label>
				<input type="text" class="textline2" name="OldUsername" readonly value="<?php echo $rows['p_username'];?>"><br><br>

				<label>Old Password</label>
				<input type="text" class="textline2" name="OldPassword" readonly value="<?php echo $rows['p_password'];?>"><br><br>
				
			</form>
			<form method="POST">
				<input type="hidden" name="patient_id" id="Patient_id" class="textline2" value="<?php echo $rows['patient_id'];?>">
				<label>New Username</label>
				<input type="text" class="textline2" name="newusername" id="newusername" value="<?php echo $rows['p_username'];?>"><br><br>

				<label>New Password</label>
				<input type="text" class="textline2" name="newpassword" id="newpassword" value="<?php echo $rows['p_password'];?>"><br><br>
			<?php }?>	
				<button class="btndoneUpdate" name="UpdatePatientSecuSett"> Update </button>
			</form>
				<button class="bth" onclick="parent.location='pprofile.php'">Back to Profile Settings</button>

		</div>
	</center>

</body>
</html>
	<?php
				include_once("../connection/connection.php");

				if (isset($_POST['UpdatePatientSecuSett']))
				{
					$patient_id= $_REQUEST['patient_id'];

					$query="UPDATE tbl_patient SET p_username='$_POST[newusername]', p_password='$_POST[newpassword]' WHERE patient_id=$session_id";
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