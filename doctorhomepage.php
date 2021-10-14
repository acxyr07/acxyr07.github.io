<?php
session_start();
include 'connection/connection.php';
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>
		Healthcare
	</title>
</head>
<link rel="stylesheet" type="text/css" href="css/biginter.css">
<link rel="stylesheet" type="text/css" href="css/background.css">
<link rel="stylesheet" type="text/css" href="css/icons.css">
<link rel="stylesheet" type="text/css" href="css/buttons.css">
<link rel="stylesheet" type="text/css" href="css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/doclogin.css">
<link rel="stylesheet" type="text/css" href="css/protected.css">
<body oncontextmenu="return false;">
	<div class="docheader">
		<center>
			<h1 class="docheaderh3"><img class="clinic" src="icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>Healthworker Login</h2>
<center>
		<button class="loginbutton" id="doctorlogin"> 
			<image src="image/profileicon.jpeg" class="usericon" >Healthworker Sign-in</button><br>
</center>
	</div>

	<!-- DoctorLogin -->
<div class="popup center">
  <div class="icon">
    <img src="icons/healthcarelogo.png">
  </div>
  <div class="title">
    Healthworker Login
  </div>
  <div class="description">
  		<form method="POST">

		<input type="text" name="DoctorUsername" placeholder="Username" style="margin-top: 40px;" required=""> <br>
		<input type="password" name="DoctorPassword" placeholder="Password" required=""><br>
		<label class="textmuted"></label>
          <input type="checkbox" class="checkbox" style="margin-top: 10px;"> Remember Me <br>
         <div class="dismiss-btn">  
			<button name="Submit">Submit</button><br>
		</div>
</form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup-btn">
      Close
    </button>
  </div>
</div>
<!-- HEALTHWORKER LOGIN -->
<?php
    if (isset($_POST['Submit']))
        {
            $username = mysqli_real_escape_string($conn, $_POST['DoctorUsername']);
            $password = mysqli_real_escape_string($conn, $_POST['DoctorPassword']);
            
            $query      = mysqli_query($conn, "SELECT * FROM tbl_doctor WHERE  d_password='$password' and d_username='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row    = mysqli_num_rows($query);
            
            if ($num_row > 0) 
                {           
                    $_SESSION['doctor_id']=$row['doctor_id'];
                    header('location:doctor/home.php');
                    ob_end_flush();
                }
            else
                {
                    echo 'Invalid Username and Password Combination';
                }
        }
  ?>

</body>
<script type="text/javascript">
document.getElementById("doctorlogin").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
</html>