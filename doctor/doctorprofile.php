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
<link rel="stylesheet" type="text/css" href="../css/forimageupload.css">
<body oncontextmenu="return false;">
  <div class="docheader">
    <center>
      <h1 class="docheaderh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>>
    </center>
  </div>
  <div class="docdiv2">
    <center>
      <h4>Update Doctor Profile</h4>
    </center>
  </div>

  <center>
    <div class="division" style="padding-bottom: 40px;">

      <?php
            
                $conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

                $result = $conn2->prepare("SELECT * FROM tbl_doctor WHERE doctor_id='$session_id'");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['doctor_id'];
          ?>

        <?php if($row['d_photo'] != ""): ?>
          <img class="PatientProfileImage" src="../uploads/<?php echo $row['d_photo']; ?>">
        <?php else: ?>
          <img class="PatientProfileImage"src="../image/default.png"><br>
        <?php endif; ?>

      <form action="edit_PDO.php<?php echo '?doctor_id='.$id; ?>" method="post" enctype="multipart/form-data">

          <input type="file" id="image" name="image" class="file" accept="image/*" required><br>
      
      <button class="updatephoto">Update Photo</button>
       <br>
      </form>
        <?php } ?>
      <form method="POST">
    <?php
      include_once('../connection/connection.php');
      $displayprofileinfo="SELECT * FROM tbl_doctor WHERE doctor_id='$session_id'";
      $result2=mysqli_query($conn, $displayprofileinfo);
    ?>
    <?php
          while ($rows=mysqli_fetch_assoc($result2)) 
          {
    ?>
        <input hidden="" type="text" class="textline2" name="doctor_id" value="<?php echo $rows['doctor_id'];?>"><br><br>

        <label>First Name</label>
        <input type="text" class="textline2" name="d_firstname"  value="<?php echo $rows['d_firstname'];?>"><br><br>

        <label>Middle Name</label>
        <input type="text" class="textline2" name="d_midname"  value="<?php echo $rows['d_midname'];?>"><br><br>

        <label>Last Name</label>
        <input type="text" class="textline2" name="d_lastname"  value="<?php echo $rows['d_lastname'];?>"><br><br>

        <label>Gender</label>
        <input type="text" class="textline2" name="d_gender"  value="<?php echo $rows['d_gender'];?>"><br><br>

        <label>Birthdate</label>
        <input type="date" class="textline2" name="d_bdate"  value="<?php echo $rows['d_bdate'];?>"><br><br>

        <label>Phone</label>
        <input type="text" class="textline2" name="d_phone"  value="<?php echo $rows['d_phone'];?>"><br><br>

        <label>Email</label>
        <input type="email" class="textline2" name="d_email"  value="<?php echo $rows['d_email'];?>"><br><br>

        <label>Address</label>
        <input type="text" class="textline2" name="d_address"  value="<?php echo $rows['d_address'];?>"><br><br><br>
  <?php }?>

      

        <button class="btndoneUpdate" name="UpdateDoctorInfoSett" id="UpdateDoctorInfoSett"> Update Personal Info</button>
    </form>
        <button class="btndoneUpdate" onclick="parent.location='Updatedocjobinfo.php'";> Update Background Info</button>

        <button class="btnupdateinfo" onclick="parent.location='UpdateDocSecuInfo.php'">Update Security Info</button>

        <button class="btnsecurityinfo" onclick="parent.location='UpdateDocSchedInfo.php'">Update Schedule Info</button>

        <button class="bth" onclick="parent.location='dsettings.php'">Back To Panel</button>
    </div>
  </center>


</body>
</html>
  <?php
        include_once("../connection/connection.php");

        if (isset($_POST['UpdateDoctorInfoSett']))
        {
          $doctor_id= $_REQUEST['doctor_id'];

          $query="UPDATE tbl_doctor SET d_firstname='$_POST[d_firstname]', d_midname='$_POST[d_midname]', d_lastname='$_POST[d_lastname]', d_gender='$_POST[d_gender]', d_bdate='$_POST[d_bdate]', d_phone='$_POST[d_phone]', d_email='$_POST[d_phone]', d_email='$_POST[d_email]',d_address='$_POST[d_address]' WHERE doctor_id=$session_id";
          $query_update = mysqli_query($conn,$query); 

        if ($query_update)
        { 
          echo "<script>alert('Data Update Success')</script>";
        }
        else
        {
          echo "<script>alert('Data Update Failed')</script>";
        }
      }

      ?>