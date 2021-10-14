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
<link rel="stylesheet" type="text/css" href="../css/icons.css">
<link rel="stylesheet" type="text/css" href="../css/panel.css">
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
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
      <h4>Doctor's Background Information</h4>
    </center>
  </div>

  <center>
    <div class="division">
      <br><br>
      <form method="post" name="formSchedule" class="schedule">
        <input type="hidden">

        <label class="margined">About Me</label><br><br>
        <textarea id="About_me" name="About_me" required=""></textarea><br>

        <label>Specialty</label><br><br>
        <input type="text" id="Specialty" name="Specialty" required=""><br>

        <label>Qualification</label><br><br>
        <textarea id="Qualification" name="Qualification" required=""></textarea><br>

        <label>Clinic Address</label><br><br>
        <input type="text" id="Clinic_address" name="Clinic_address" required=""><br>

        <label>Contact #</label><br><br>
        <input type="number" id="Contact_no" name="Contact_no" required=""><br>
        <div>
        <center>
        <button class="doneUpdate" name="Add" id="Add" value="Add">Update Background Info</button>
        </div>
        <br><br>
        <a class="btps" href="doctorprofile.php">Back to Profile Settings</a>
        </center>
  </form>

      
    </div>
  </center>

</body>
</html>