<?php
include_once("../connection/connection.php");

if (isset($_POST['Update'])) 
{
	$id= $_POST['about_id'];

	$query="UPDATE tbl_about SET About='$_POST[About]' WHERE about_id='$_POST[about_id]'";
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
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>Healthcare</title>
	<link rel="stylesheet" type="text/css" href="../css/background.css">
	<link rel="stylesheet" type="text/css" href="../css/biginter.css">
	<link rel="stylesheet" type="text/css" href="../css/icons.css">
	<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
	<link rel="stylesheet" type="text/css" href="../css/protected.css">
	<link rel="stylesheet" type="text/css" href="../css/buttons.css">
	<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
</head>

<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>About us Contents</h2>
	</div>
	
	<center>
		<form method="post" class="updatehealthcarecontents">
	<?php
	include_once('../connection/connection.php');
	$updabout="SELECT * FROM tbl_about";
	$result=mysqli_query($conn, $updabout);
?>

	<?php
		 			while ($rows=mysqli_fetch_assoc($result)) 
		 			{
		 		?>
				<input type="hidden" name="about_id" id="about_id" value="1">
				<br>
				<textarea id="About" name="About" placeholder="Enter the contents here. . . . . . . . .">
					<?php echo $rows['About'];?>
				</textarea>

				<?php
		 			}
		 		?>
				
				
				<button class="updhealthcare" id="Update" name="Update">
					Update
				</button>
				<br>
			</form>
				<button class="bthealthcare" onclick="parent.location='adminpanel.php'">Back to Panel
				</button>
				
				
				
		
	</center>

</body>
</html>