<?php
	include('../connection/adminsession.php'); 
?>
<html>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>
		Healthcare
	</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/background.css">
<link rel="stylesheet" type="text/css" href="../css/biginter.css">
<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/AdminProfile.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/forimageupload.css">

<script type="text/javascript" src="../js/dashboard.js"></script>

<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="../icons/Healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>Update Profile Information</h2>
	</div>
	</div>
		 <center>
		 		<div class="main">
		 				<?php
            
                $conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

                $result = $conn2->prepare("SELECT * FROM tbl_administrator WHERE admin_id ='$session_id'");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['admin_id'];
          ?>

        <?php if($row['adminPhoto'] != ""): ?>
          <img class="profileImage" src="../uploads/<?php echo $row['adminPhoto']; ?>">
        <?php else: ?>
          <img class="profileImage"src="../image/default.png"><br>
        <?php endif; ?>
        <form action="edit_PDO.php<?php echo '?admin_id='.$id; ?>" method="post" enctype="multipart/form-data">

          <input type="file" id="image" name="image" class="file" accept="image/*" required><br>
		 <button class="adminupdatephoto">Change Photo</button>
		 </form>
        	<?php } ?>
						
		 				
		 		<form method="POST">
		 				<?php 
        		require_once('../connection/connection.php');
        		$adminInfo="SELECT * FROM tbl_administrator WHERE admin_id ='$session_id'";
						$result=mysqli_query($conn, $adminInfo);
        	?>
        	<?php
		 			while ($rows=mysqli_fetch_array($result)) { ?>
		 				<input class="textbox" type="hidden" name="admin_id" placeholder="Admin Id" value="<?php echo $rows['admin_id'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">First Name: </label>
		 				<input class="textbox" type="text" name="adminFname" placeholder="First Name" value="<?php echo $rows['adminFname'];?>" >

		 				<br>
		 				<br>
		 				<label class="sideName">Middle Name: </label>
		 				<input class="textbox" type="text" name="adminMname" placeholder="Middle Name" value="<?php echo $rows['adminMname'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Last Name: </label>
		 				<input class="textbox" type="text" name="adminLname" placeholder="Last Name" value="<?php echo $rows['adminLname'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Phone: </label>
		 				<input class="textbox" type="text" name="adminPhone" placeholder="Phone" value="<?php echo $rows['adminPhone'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Email: </label>
		 				<input class="textbox" type="text" name="adminEmail" placeholder="Email" value="<?php echo $rows['adminEmail'];?>">

		 				<br>
		 				<br>
		 				<label class="sideName">Address: </label>
		 				<input class="textbox" type="text" name="adminAddress" placeholder="Address" value="<?php echo $rows['adminAddress'];?>">

		 				<br>
		 				<br>
		 				<button class="updadminfo" name="UpdateAdminInfo" id="UpdateAdminInfo">Update Informations</button>
		 				<br><br><br>
		 			<?php }?>

		 			<?php
					include_once("../connection/connection.php");

					if(isset($_POST['UpdateAdminInfo'])) 
				{
					$id= $_REQUEST['admin_id'];

					$query="UPDATE tbl_administrator SET adminFname='$_POST[adminFname]', adminMname='$_POST[adminMname]', adminLname='$_POST[adminLname]', adminPhone='$_POST[adminPhone]', adminEmail='$_POST[adminEmail]', adminAddress='$_POST[adminAddress]' WHERE admin_id='$session_id'";
						$query_update = mysqli_query($conn,$query);	

							if ($query_update)
							{
								header("Location: AdminSettings.php");
							}
							else
							{
								echo "<script>alert('Data Update Failed')</script>";
							}
				}

				?>
		 				</form>
		 				<a href="AdminSecuritySettings.php" class="bthlink">Update Security Settings</a>
		 				<br><br>
		 				<a href="AdminSettings.php" class="bthlink">Back to Admin Profile</a>
		 				<br><br>
		 				<br><br>
		 		</div>
		 </center>
</body>
</html>