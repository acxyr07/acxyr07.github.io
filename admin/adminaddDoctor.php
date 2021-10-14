<?php
   include("../connection/connection.php");
   		if(isset($_POST['Add'])) 
  {    
		$fname = $_POST['Firstname'];
		$mname = $_POST['midname'];
		$lname = $_POST['lastname'];
		$gender = $_POST['Gender'];
		$bdate = $_POST['Birthday'];
		$phone = $_POST['Phone'];
		$email = $_POST['Email'];
		$address = $_POST['Address'];
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		if(empty($fname) || empty($mname) || empty($lname) || empty($gender)|| empty($bdate)|| empty($phone) || empty($email) || empty($address) || empty($username) || empty($password)) 
			{                
				echo "field is empty";
			}

		else 
			{
			$result = mysqli_query($conn, "INSERT INTO tbl_doctor (d_firstname, d_midname, d_lastname, d_gender, d_bdate, d_phone, d_email, d_address, d_username, d_password) VALUES('$fname','$mname','$lname','$gender','$bdate','$phone','$email','$address','$username','$password')");	

				echo "<script>alert('Data Successfully Added!');</script>";
				header("Location: docjobinfo.php");
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
<link rel="stylesheet" type="text/css" href="../css/register.css">
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
		<h2>Administrator - Add Doctor Form</h2>
	</div>
	<center>

        <form method="post" class="docregform">
            
			
			<br><br>
			
			<label>Firstname</label><br>
				<input type="text" name="Firstname" class="st" id="Firstname" placeholder="Juanico Panchito" required=""><br><br>
			
			<label>Middle Name</label><br>
				<input type="text" name="midname" class="st" id="midname" placeholder="Dela Torre" required=""><br><br>
			
			<label>Last Name</label><br>
				<input type="text" name="lastname" class="st" id="lastname" placeholder="Dela Cruz" required=""><br><br>
			

			<label>Gender</label><br>
                 		 <select name="Gender" id="Gender" required="">
                    			<option value =""required>Select Gender</option>
                    			<option value ="Male">Male</option>
                    			<option value ="Female">Female</option>
                  		</select><br><br>
             

             <label for="pbday">Birthday</label><br>
                    <input type="date" name="Birthday" id="Birthday" class="sl" required=""><br>

             <br>
             <br>

             <label for="pphone">Phone</label><br>
                    <input type="number" name="Phone" class="sl" id="Phone" placeholder="#" required="">
             

             <br>
             <br>

             <label for="pemail">Email</label><br>
                    <input type="email" name="Email" class="sl" id="Email" placeholder="examplegogo@gmail.com	" required="">
   

             <br>
             <br>

             <label for="paddress">Address</label><br>
                    <input type="text" name="Address" class="sl" id="Address" placeholder="i.e: 242 San Pablo City" required="">
 

             <br>
             <br>

             <label for="puname">Username</label><br>
             
                      <input type="text" name="Username" class="mt" id="Username" placeholder="Username" required=""><br><br>
         
             <label for="ppass">Password</label><br>
                      <input type="password" name="Password" class="mt" id="Password" placeholder="Password" required="">        
         
             <br><br>

             <button class="addpatientbtn" name="Add" id="Add" value="">Add</button>

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