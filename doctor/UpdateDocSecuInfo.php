<?php
include('../connection/doctorsession.php'); 

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
  <div class="docheader">
    <center>
      <h1 class="docheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
    </center>
  </div>
  <div class="docdiv2">
    <center>
      <h4>Update Security</h4>
    </center>
  </div>

  <center>
    <div class="division" style="height: 420px;">
        
        <label style="margin-top: 60px;">Username</label>
        <input type="text" class="textline2" name="" ><br><br>

        <label>Old Password</label>
        <input type="text" class="textline2" name="" ><br><br>

        <label>New Password</label>
        <input type="text" class="textline2" name="" ><br><br>

        <label>Confirm New Password</label>
        <input type="text" class="textline2" name="" ><br><br>

        <button class="btndoneUpdate"> Update </button>

        <button class="bth" onclick="parent.location='doctorprofile.php'">Back To Profile Settings</button>

    </div>
  </center>

</body>
</html>