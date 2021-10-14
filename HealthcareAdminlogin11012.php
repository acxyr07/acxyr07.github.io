<?php
session_start();
include 'connection/connection.php';
ob_start();
?>
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
<link rel="stylesheet" type="text/css" href="css/panel.css">
<link rel="stylesheet" type="text/css" href="css/buttons.css">
<link rel="stylesheet" type="text/css" href="css/doclogin.css">
<link rel="stylesheet" type="text/css" href="css/scrollbar.css">
<link rel="stylesheet" type="text/css" href="css/protected.css">
<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>Users Login</h2>
<center>
			
		<button class="loginbutton" id="adminlogin" name="adminlogin"> 
			<image src="image/profileicon.jpeg" class="usericon">Admin Login</button>
</center>
	</div>

	<!-- AdminLogin -->
<div class="popup center">
  <div class="icon">
    <img src="icons/healthcarelogo.png">
  </div>
  <div class="title">
    Administrator Login
  </div>
  <div class="description">
  		<form  method="POST">

		<input type="text" name="AdminUsername" class="text" placeholder="Username" style="margin-top: 40px;" required=""> <br>
		<input type="password" name="AdminPassword" class="text" placeholder="Password" required=""><br>
		<label class="textmuted">
          <input type="checkbox" class="checkbox" style="margin-top: 10px;">Remember Me</label><br>
    <div class="dismiss-btn">
		<button name="Submit" class="loginbutton">Submit</button>
	</div>

	</form>
</form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup-btn" class="loginbutton">
      Close
    </button>
  </div>
</div>
<?php
    if (isset($_POST['Submit']))
        {
            $username = mysqli_real_escape_string($conn, $_POST['AdminUsername']);
            $password = mysqli_real_escape_string($conn, $_POST['AdminPassword']);
            
            $query      = mysqli_query($conn, "SELECT * FROM tbl_administrator WHERE  adminPassword='$password' and adminUsername='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row    = mysqli_num_rows($query);
            
            if ($num_row > 0) 
                {           
                    $_SESSION['admin_id']=$row['admin_id'];
                    header('location:admin/home.php');
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
document.getElementById("adminlogin").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
</script>
</html>