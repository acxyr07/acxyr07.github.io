<?php 
    session_start();
    include 'connection/connection.php';
    ob_start();
?>

<!DOCTYPE html>
<html>
  
<head>
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/scrollbar.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
         <link rel="stylesheet" type="text/css" href="css/indexmodal.css">
         <link rel="stylesheet" type="text/css" href="css/scrollbar.css">

         
</head>
        
<body oncontextmenu="return false;">
  <center>
  <header>
    <h1><img class="headericon" src="icons/healthcarelogo.png"><br>HEALTHCARE</h1>
  </header>
  </center>
  <center>
  <div class="background">
<?php 
$conn = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 
?>
<?php     
                $result = $conn->prepare("SELECT * FROM tbl_healthcare_content ORDER BY hc_id ASC");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['hc_id'];
?>
<?php if($row['hc_photo'] != ""): ?>
                  <img src="uploads/<?php echo $row['hc_photo']; ?>" width="100%" height="100%" style="border:1px solid #333333;">
                  <?php else: ?>
                  <img src="images/default.png" width="100%" height="100%" style="border:1px solid #333333;">
                  <?php endif; ?>
<?php } ?>
  </div>
    <div class="wrapper">

        <div class="first box" id="AboutUs">
          <br><img src="icons/about.png"><br>
           <label>About Us</label>
        </div>


<!-- ABOUT MODAL-->
<div class="popup center">
  <div class="icon">
    <img src="icons/healthcarelogo.png">
  </div>
  <div class="title">
    About Us
  </div>
  <div class="description">
<?php
      include 'connection/connection.php';
      $showdoctorabout="SELECT * FROM tbl_about";
      $result2=mysqli_query($conn, $showdoctorabout);
?>
    <?php
          while ($rows=mysqli_fetch_assoc($result2)) 
          {
      ?>
      <p class="text_centered"><?php echo $rows['About'];?></p>
    <?php
          }
        ?>  
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup-btn">
      Close
    </button>
  </div>
</div>
<!-- ABOUT MODAL-->


        <div class="second box" id="ContactUs">
          <br><img src="icons/phone.png"><br>
          <label>Contact Us</label>
        </div>

<!-- CONTACT US MODAL -->
<div class="popup2 center">
  <div class="icon">
    <center><img src="icons/healthcarelogo.png"></center>
  </div>
  <div class="title">
    Contact Us
  </div>
  <div class="description">
    <form action="function/mail.php" method="post" class="contactform">
    
    <label>Full Name</label><br>
    <input type="text" name="Name" id="Name" class="textfield" required=""><br>
    <label>Email</label><br>
    <input type="email" name="Email" id="Email" class="textfield" required=""><br>
    <label>Subject</label><br>
    <input type="text" name="Subject" id="Subject" class="textfield" required=""><br>
    <label>Message</label><br>
    <textarea name="Message" id="Message" required=""></textarea><br>
  </div>

  <div class="dismiss-btn">
    <button name="Send" id="Send">
      Send
    </button>
    </form>

    <button id="dismiss-popup2-btn">
      Close
    </button>
</div>
</div>
<!-- CONTACT US MODAL -->


<!--CHATBOT-->
        <div class="third box" onclick="parent.location='patient/chatbot.php'">
         <br><img src="icons/docbot.png"><br>
           <label>Chatbot</label>
        </div>

        <div class="fourth box" id="login">
          <br><img src="icons/login.png"><br>
           <label>Login</label>
        </div>
<!--CHATBOT-->

<!-- LOGIN MODAL -->
<div class="popup3 center">
  <div class="icon">
    <center><img src="icons/healthcarelogo.png"></center>
  </div>
  <div class="title">
    Login
  </div>
  <div class="description">
    
    <form method="POST" class="loginform">
    
    <label class="left">Username</label><br>
    <input type="text" name="PatientUsername" id="PatientUsername" class="textfield" required=""><br>
    <label class="left">Password</label><br>
    <input type="password" name="PatientPassword" id="PatientPassword" class="textfield" required=""><br>
    <input type="checkbox" class="checkbox"><label>Remember Me</label>
    <br><br>
    <center><label>New User?</label><br><a href="patient/patientreg.php">Sign up Here</a>
      <br>
      <br>
            <label>Forgot Your Password? </label><br><a href="patient/resetpassword.php">Reset Your Password!</a>
    </center>
    
  </div>

  <div class="dismiss-btn">
    <button name="Submit" id="Submit">
      Submit
    </button>
    </form>

    <button id="dismiss-popup3-btn">
      Close
    </button>


</div>
</div>
<!-- LOGIN MODAL -->
    </div>
 <?php
    if (isset($_POST['Submit']))
        {
            $username = mysqli_real_escape_string($conn, $_POST['PatientUsername']);
            $password = mysqli_real_escape_string($conn, $_POST['PatientPassword']);
            
            $query      = mysqli_query($conn, "SELECT * FROM tbl_patient WHERE  p_password='$password' and p_username='$username'");
            $row        = mysqli_fetch_array($query);
            $num_row    = mysqli_num_rows($query);
            
            if ($num_row > 0) 
                {           
                    $_SESSION['patient_id']=$row['patient_id'];
                    header('location:patient/home.php');
                    ob_end_flush();
                }
            else
                {
                    echo 'Invalid Username and Password Combination';
                }
        }
  ?>
    <div class="middiv"><label><h2>WITH OUR TRUSTED HEALTHWORKERS</h2></label></div>
    <div class="profiles">
      <div class="profilebox">
        <?php 
$conn = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 
?>
<?php     
                $result = $conn->prepare("SELECT * FROM tbl_doctor ORDER BY doctor_id ASC");
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
                $id=$row['doctor_id'];
?>
<?php if($row['d_photo'] != ""): ?>
                  <img src="uploads/<?php echo $row['d_photo']; ?>" width="100%" height="100%" style="border:1px solid #333333;">
                  <?php else: ?>
                  <img src="images/default.png" width="100%" height="100%" style="border:1px solid #333333;">
                  <?php endif; ?>
<?php } ?>

<?php
      include('connection/connection.php');
      $doctortable="SELECT * FROM tbl_doctor";
      $doctorresult=mysqli_query($conn, $doctortable);
?>
<?php
          while ($rows=mysqli_fetch_assoc($doctorresult)) 
          {
?>
        <br>
        <div class="infobox">
        <label>Healthworker's Name:</label><br>
            <p><?php echo $rows['d_firstname']. " ". $rows['d_lastname']; ?></p><br>
<?php } ?>
<?php
      include('connection/connection.php');
      $doctortable="SELECT * FROM tbl_doctor_about";
      $doctorresult=mysqli_query($conn, $doctortable);
?>
<?php
          while ($rows=mysqli_fetch_assoc($doctorresult)) 
          {
?>
        <label>Specialty:</label><br>
            <p><?php echo $rows['Specialty'];?></p><br>
        <label>About Me:</label><br>
            <p><?php echo $rows['About_me'];?></p><br>
        </div>
      </div>
<?php }?>      
      
      
    </div>

    </center>
    <footer></footer>
</body>
  </body>
<script type="text/javascript" src="js/indexmodal.js"></script>
</html>