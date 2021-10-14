<?php
   include("../connection/connection.php");
      if(isset($_POST['Add'])) 
  {    
    $sunday = $_POST['Sunday'];
    $monday = $_POST['Monday'];
    $tuesday = $_POST['Tuesday'];
    $wednesday = $_POST['Wednesday'];
    $thursday = $_POST['Thursday'];
    $friday = $_POST['Friday'];
    $saturday = $_POST['Saturday'];

    if(empty($sunday) || empty($monday) || empty($tuesday) || empty($wednesday) || empty($thursday) || empty($friday) || empty($saturday)) 
      {                
        echo "field is empty";
      }

    else 
      {
      $result = mysqli_query($conn, "INSERT INTO tbl_doctor_schedule (Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday) VALUES('$sunday','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday')");
        echo "<script>alert('Doctor Successfully Added!');</script>";
        header("Location: admindoctortable.php");
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
<link rel="stylesheet" type="text/css" href="../css/icons.css">
<link rel="stylesheet" type="text/css" href="../css/panel.css">
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
 <div class="adminheader">
    <center>
      <h1 class="adminheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
    </center>
  </div>
  <div class="headerwhite">
    <h2>Add Healthworker's Schedule Information</h2>
  </div>

  <center>
    <div class="division">
      <br><br>
      <form method="post" name="formSchedule" class="formSchedule" >

        <h1>Healthworker's Schedule</h1>

        <label>Sunday</label><br><br>
        <select id="Sunday" name="Sunday" required="">
          <option>--SELECT--</option>
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
          <option>--SELECT--</option>
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
          <option>--SELECT--</option>
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
          <option>--SELECT--</option>
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
          <option>--SELECT--</option>
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
          <option>--SELECT--</option>
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
          <option>--SELECT--</option>
          <option value="9:00am - 10:00am">9:00am - 10:00am</option>
          <option value="9:00am - 11:00am">9:00am - 11:00am</option>
          <option value="9:00am - 12:00pm">9:00am - 12:00pm</option>
          <option value="9:00am - 1:00pm">9:00am - 1:00pm</option>
          <option value="9:00am - 2:00pm">9:00am - 2:00pm</option>
          <option value="9:00am - 3:00pm">9:00am - 3:00pm</option>
          <option value="No Schedule for this day">No Schedule for this day</option>
        </select>

        <button class="btndoneUpdate" name="Add" id="Add" value="Add">Add Schedule Info</button>
     </form>
      
    </div>
  </center>

</body>
</html>