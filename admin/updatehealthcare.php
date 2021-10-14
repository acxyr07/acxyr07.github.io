<?php
	include('../connection/adminsession.php'); 
?>
<!DOCTYPE html>
<html>
<title>Healthcare</title>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/background.css">
	<link rel="stylesheet" type="text/css" href="../css/biginter.css">
	<link rel="stylesheet" type="text/css" href="../css/icons.css">
	<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
	<link rel="stylesheet" type="text/css" href="../css/protected.css">
	<link rel="stylesheet" type="text/css" href="../css/buttons.css">
	<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">

	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
    <link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css">
		

</head>
<script src="../modal/js1/jquery1.js" type="text/javascript"></script>
<script src="../modal/js1/bootstrap1.js" type="text/javascript"></script>
<script src="../js/jquery.js" type="text/javascript"></script>


<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>

	</div>
	<center>
	<div class="headerwhite">
		<h2>Healthcare Contents</h2>
	</div>
		<div>
			<label style="cursor: default;">Choose a Photo to update the front page of your website</label>
		</div>
		
							<?php
						
								$conn = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

								$result = $conn->prepare("SELECT * FROM tbl_healthcare_content ORDER BY hc_id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['hc_id'];
							?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">

									<?php if($row['hc_photo'] != ""): ?>
									<img src="../uploads/<?php echo $row['hc_photo']; ?>" width="auto" height="auto" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="../images/default.png" width="auto" height="auto" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<br><br>
								<td style="text-align:center; width:350px;">
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-warning" >Update Image</a>
								</td>
								</tr>
										<!-- Modal -->
							<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<?php if($row['hc_photo'] != ""): ?>
							<img src="../uploads/<?php echo $row['hc_photo']; ?>" width="auto" height="auto" style="border:1px solid #333333;">
							<?php else: ?>
								<center>
							<img src="../images/default.png" width="auto" height="auto" style="border:1px solid #333333;">
							</center>
							<?php endif; ?>
							




							<form action="edit_PDO.php<?php echo '?hc_id='.$id; ?>" method="post" enctype="multipart/form-data" class="healthcarecontents">
							<div style="color:blue; margin-left:100px; font-size:30px;">
								<input type="file" name="image" accept="image/*">
							</div>
							
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<button type="submit" name="submit" class="btn btn-danger">Yes</button>
							</form>
							</div>
							</div>
							</div>
								<?php } ?>
	</center>

</body>
</html>