<?php 
include('../connection/connection.php');
include('../connection/doctorsession.php'); 

$result=mysqli_query($conn, "SELECT * FROM tbl_doctor where doctor_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
 <!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/home.css">
<body oncontextmenu="return false;" style="background-color: #1293E0;">

  <div>
  <div class="center">

  <div class="lds-heart">

    <div></div></div>
  </div>


  <center><div class="text">
    <h1>WELCOME!<br> <?php echo $row['d_firstname']. " " .$row['d_lastname']; ?> </h1>
  </div></center>
    <div class="text">
    <center><input type="button" name="" value="Go to Dashboard" onclick="parent.location='dappointment.php'">
  </div>
</body>
</html>