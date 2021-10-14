<?php 
include('../connection/connection.php');
include('../connection/adminsession.php'); 

$result=mysqli_query($conn, "SELECT * FROM tbl_administrator WHERE admin_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
 <!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/home.css">
<body oncontextmenu="return false;" style="background-color: #C7C7C7;">

  <div>
  <div class="center">

  <div class="lds-heart">

    <div></div></div>
  </div>


  <center><div class="text">
    <h1>WELCOME!<br> <?php echo $row['adminFname']. " " .$row['adminLname']; ?> </h1>
  </div></center>
    <div class="text">
    <center><input type="button" name="" value="Go to Dashboard" onclick="parent.location='adminpanel.php'">
  </div>
</body>
</html>