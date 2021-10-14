<?php
   include("../connection/connection.php");
      if(isset($_POST['Add'])) 
  {    
    $aboutme = $_POST['About_me'];
    $specialty = $_POST['Specialty'];
    $qualification = $_POST['Qualification'];
    $clinic = $_POST['Clinic_address'];
    $contact = $_POST['Contact_no'];

    if(empty($aboutme) || empty($specialty) || empty($qualification) || empty($clinic) || empty($contact)) 
      {                
        echo "field is empty";
      }

    else 
      {
      $result = mysqli_query($conn, "INSERT INTO tbl_doctor_about (About_me, Specialty, Qualification, Clinic_address, Contact_no) VALUES('$aboutme','$specialty','$qualification','$clinic','$contact')");
        header("Location: addDocSchedinfo.php");
      }
  }
?>
<!DOCTYPE html>
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
      <h1 class="adminheaderh3"><img  class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
    </center>
  </div>
  <div class="headerwhite">
    <h2>Add Doctor's Job Information</h2>
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

        <button class="addpatientbtn" name="Add" id="Add" value="Add">Add Background Info</button>
  </form>

      
    </div>
  </center>

</body>
</html>