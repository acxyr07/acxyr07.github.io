<?php
       if(count($_POST)>0) 
{
    require_once("../connection/connection.php");

    $sql = "INSERT INTO tbl_patient (p_firstname, p_midname, p_lastname, p_gender, p_birthdate, p_email, p_phone, p_address, p_username, p_password) VALUES ('". $_POST["Firstname"] ."','" . $_POST["Middlename"] . "','". $_POST["Lastname"] . "', '" . $_POST["Gender"] . "','". $_POST["Birthday"] ."','". $_POST["Email"] . "','" . $_POST["Phone"] . "','". $_POST["Address"] . "','". $_POST["Username"] . "','" . $_POST["Password"] . "')";

        mysqli_query($conn,$sql);
        $current_id = mysqli_insert_id($conn);
        if(!empty($current_id)) 
       {
              echo "<script>alert('Registered Successfully!');</script>";
              header("Location: ../index.php");
       }
        
}
?>
<html>
<head>
       <title>Healthcare</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/biginter.css">
<link rel="stylesheet" type="text/css" href="../css/background.css">
<link rel="stylesheet" type="text/css" href="../css/register.css">
<link rel="stylesheet" type="text/css" href="../css/buttons.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../css/protected.css">
<link rel="stylesheet" type="text/css" href="../css/termsandcon.css">
<body oncontextmenu="return false;">
	<div class="header">
		<center>
			<h1 class="headerh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite" id="registerModal">
		<h2>Patient's Registration Form</h2>

        <form name="frmUserReg" method="post" action="patientreg.php" class="regform">

                <input type="checkbox" name="" required="" class="checkbox"><label class="termslabel">I Agree to the <a style="cursor: pointer; color: #18ABC0;" id="termsAndcondi">Terms and Conditions</a> of the System</label><br>
                <br>
            
			<label class="patientreglabel">Firstname
				<input type="text" name="Firstname" class="st" id="Firstname" placeholder="Juanico Panchito" required="">
			</label ><br>
			<label class="patientreglabel">Middle Name
				<input type="text" name="Middlename" class="st" id="Middlename" placeholder="Dela Torre" required="">
			</label ><br>
			<label class="patientreglabel">Last Name
				<input type="text" name="Lastname" class="st" id="Lastname" placeholder="Dela Cruz" required="">
			</label>

			<br>
			<br>

			<label class="patientreglabel">Gender
                  <select class="form-control" name="Gender" id="Gender" required="">
                    <option value =""required>Select Gender</option>
                    <option value ="Male">Male</option>
                    <option value ="Female">Female</option>
                  </select>
             </label>

             <br>
             <br>

             <label class="patientreglabel">Birthday
                    <input type="date" name="Birthday" id="Birthday" class="sl" required="">
             </label>

             <br>
             <br>

             <label class="patientreglabel">Email
                    <input type="email" name="Email" class="sl" id="Email" placeholder="examplegogo@gmail.com	" required="">
             </label>

             <br>
             <br>

             <label class="patientreglabel">Phone
                    <input type="number" name="Phone" class="sl" id="Phone" placeholder="#" required="">
             </label>

             <br>
             <br>

             <label class="patientreglabel">Address
                    <input type="text" name="Address" class="sl" id="Address" placeholder="i.e: 242 San Pablo City" required="">
             </label>

             <br>
             <br>

             <label class="patientreglabel">Username
                      <input type="text" name="Username" class="mt" id="Username" placeholder="Username" required="">
             </label><br>
             <label class="patientreglabel">Password
                      <input type="password" name="Password" class="mt" id="Password" placeholder="Password" required="">        
             </label>
             <br><br>
             
             

            

             <button class="patientregsignupbtn" name="" id="btn-reg okay" value="">Sign Up</button>

             <br>
             <br>
              
             <button class="backtohomebtn" onclick="parent.location='../index.php'">Back to Home</button>
        </form>
	</div>

              <!-- Terms and Conditions -->
<div class="popup center">
  <div class="icon">
    <img src="../icons/healthcarelogo.png">
  </div>
  <div class="title">
    Terms and Conditions
  </div>
  <div class="description">

       <form>
<?php
      include_once('../connection/connection.php');
      $showterms="SELECT * FROM tbl_terms_and_conditions";
      $result=mysqli_query($conn, $showterms);
?>
    <?php
          while ($rows=mysqli_fetch_assoc($result)) 
          {
      ?>
      <p style="text-align: left;"><?php echo $rows['tac_id'].". ".$rows['tac_message'];?></p>
    <?php
          }
        ?>  
        </form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup-btn">
      Close
    </button>
  </div>
</div>

 
</body>
<script type="text/javascript">
/*Terms and Conditions*/
       document.getElementById("termsAndcondi").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});

</script>

</html>