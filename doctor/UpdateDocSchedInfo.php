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
      <h4>Update Doctor Schedule Information</h4>
    </center>
  </div>

  <center>
    <div class="division">
      <br><br>
      <form method="post" name="formSchedule" class="formSchedule">
        <input type="hidden">

        <label>Sunday</label><br><br>
        <select id="Sunday" name="Sunday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <br>

        <label>Monday</label><br><br>
        <select id="Monday" name="Monday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <br>

        <label>Tuesday</label><br><br>
        <select id="Tuesday" name="Tuesday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <br>

        <label>Wednesday</label><br><br>
        <select id="Wednesday" name="Wednesday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <br>

        <label>Thursday</label><br><br>
        <select id="Thursday" name="Thursday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <br>

        <label>Friday</label><br><br>
        <select id="Friday" name="Friday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <br>

        <label>Saturday</label><br><br>
        <select id="Saturday" name="Saturday" required="">
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <button class="btndoneUpdate" name="update" id="update" value="update">Update Schedule Info</button>
             </form>
        <button class="bth" onclick="parent.location='doctorprofile.php'">Back To Profile Settings</button>

      
    </div>
  </center>

</body>
</html>