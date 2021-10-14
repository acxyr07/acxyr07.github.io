<?php  

$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$to = "acxyrflores@gmail.com";
$title = "Hey Admin! You have a new Mail!";
$txt = "From: " .$name. "\r\nEmail: ".$email. "\r\nSubject: " .$subject. "\r\nMessage: " .$message;
$headers = "From: Healthcare Email Messages";
	if ($email!=NULL){
		mail($to,$title,$txt,$headers);
	}

	header("Location:thankyou.html");
?>


<!-- Message Database Save Function -->

<?php
   include("../connection/connection.php");
   		if(isset($_POST['Send'])) 
  {    
		$fullname = $_POST['Name'];
		$email = $_POST['Email'];
		$subject = $_POST['Subject'];
		$message = $_POST['Message'];

		if(empty($fullname) || empty($email) || empty($subject) || empty($message)) 
			{                
				echo "<script>alert('Field is Empty!');</script>";
			}

		else 
			{
			$result = mysqli_query($conn, "INSERT INTO tbl_messages (Name, Email, Subject, Message) VALUES('$fullname','$email','$subject','$message')");
				echo "<script>alert('Sent Successfully!');</script>";
			}
	}
?>