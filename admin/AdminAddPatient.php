<?php
       if(count($_POST)>0) 
{
    require_once("../connection/connection.php");

    $sql = "INSERT INTO tbl_patient (p_firstname, p_midname, p_lastname, p_gender, p_birthdate, p_email, p_phone, p_address, p_username, p_password) VALUES ('". $_POST["Firstname"] ."','" . $_POST["Middlename"] . "','". $_POST["Lastname"] . "', '" . $_POST["Gender"] . "','". $_POST["Birthday"] ."','". $_POST["Email"] . "','" . $_POST["Phone"] . "','". $_POST["Address"] . "','". $_POST["Username"] . "','" . $_POST["Password"] . "')";

        mysqli_query($conn,$sql);
        $current_id = mysqli_insert_id($conn);
        if(!empty($current_id)) 
       {
              header("Location: adminpanel.php");
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
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/register.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="adminheader">
              <center>
                     <h1 class="adminheaderh3"><img  class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
              </center>
       </div>
       <div class="headerwhite">
              <h2>Administrator - Add Patient Form</h2>
       </div>
	<div id="registerModal">

       <center>
       <form name="frmUserReg" method="post" action="AdminAddPatient.php" class="regform2">
            
                     <label class="patientreglabel">Firstname</label >
                            <input type="text" name="Firstname" class="st" id="Firstname" placeholder="Juanico Panchito" required=""><br><br>
                     
                     <label class="patientreglabel">Middle Name</label >
       
                            <input type="text" name="Middlename" class="st" id="Middlename" placeholder="Dela Torre" required="">
                     <br><br>
                     <label class="patientreglabel">Last Name</label>
                            <input type="text" name="Lastname" class="st" id="Lastname" placeholder="Dela Cruz" required="">
                     

                     <br>
                     <br>

                     <label class="patientreglabel">Gender</label>
                  <select class="form-control" name="Gender" id="Gender" required="">
                    <option value =""required>Select Gender</option>
                    <option value ="Male">Male</option>
                    <option value ="Female">Female</option>
                  </select>
             

             <br>
             <br>

             <label class="patientreglabel">Birthday</label>
                    <input type="date" name="Birthday" id="Birthday" class="sl" required="">
             

             <br>
             <br>

             <label class="patientreglabel">Email</label>
                    <input type="email" name="Email" class="sl" id="Email" placeholder="examplegogo@gmail.com   " required="">
             

             <br>
             <br>

             <label class="patientreglabel">Phone</label>
                    <input type="number" name="Phone" class="sl" id="Phone" placeholder="#" required="">
             

             <br>
             <br>

             <label class="patientreglabel">Address</label>
                    <input type="text" name="Address" class="sl" id="Address" placeholder="i.e: 242 San Pablo City" required="">
            

             <br>
             <br>

             <label class="patientreglabel">Username </label>
                      <input type="text" name="Username" class="mt" id="Username" placeholder="Username" required="">
              <br>
              <br>
              
             <label class="patientreglabel">Password</label>
                      <input type="password" name="Password" class="mt" id="Password" placeholder="Password" required="">        
             
             <br><br>
             
             <input type="checkbox" name="" required="" class="checkbox"><label class="termslabel">I Agree to the Terms and Conditions of the System</label><br>
             <br>

             <input type="checkbox" name="" required="" class="checkbox"><label class="termslabel">I have read the Terms and Conditions of the System</label><br>

             <button class="patientregsignupbtn" name="btn-reg" id="btn-reg" value="">Sign Up</button>

             <br>
             <br>

             <a href="adminpanel.php" class="back">Back to Admin Panel</a>
        </form>
        </center>
	</div>
			 <br>
             <br>
             <br>
             <br>
</body>


</html>