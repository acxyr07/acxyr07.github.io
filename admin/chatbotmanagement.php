<html>
<head>
	 <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>
		Healthcare
	</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/background.css">
<link rel="stylesheet" type="text/css" href="../css/biginter.css">
<link rel="stylesheet" type="text/css" href="../css/icons.css">
<link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
<link rel="stylesheet" type="text/css" href="../css/chatbotform.css">
<link rel="stylesheet" type="text/css" href="../css/scrollbar.css">

<script type="text/javascript" src="../js/dashboard.js"></script>

<link rel="stylesheet" type="text/css" href="../css/protected.css">
<body oncontextmenu="return false;">
	<div class="adminheader">
		<center>
			<h1 class="adminheaderh3"><img class="clinic" src="../icons/healthcarelogo.png"> Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
		<h2>Chatbot Management</h2>
	</div>

		<img class="dashboardicon" src="../icons/list.png" onclick="showdashboard()">
		<br>

		<button class="addBotInfo" id="openAddBotForm">Add Questions and Answers</button>


		 <div id="dashboard" class="dashboard">
		 	 <img src="../icons/close.png" class="closebtn2" onclick="closedashboard()"></a>
		 	 <ul>
		 	 	Contents Management
		 	 </ul>
		 	 	<a class="aaa" href="updatehealthcare.php">Healthcare</a>
		 	 	<a class="aaa" href="updateabout.php">About Us</a>
		 	 	<a class="aaa" href="updatecontact.php">Contact Us</a>
		 	 	<a class="aaa" href="chatbotmanagement.php">Chatbot Management</a>
		 	 <ul>
		 	 	Users Management
		 	 </ul>
		 		<a class="aaa" href="adminadmintable.php">Administrator Management</a>
		 	 	<a class="aaa" href="admindoctortable.php">Doctor Management</a>
		 	 	<a class="aaa" href="adminpatienttable.php">Patient Management</a>

		 	 	<br>
		 	 	<a class="aaa"href="AdminMessages.php">Messages</a>

		 	 	<br>
		 	 	<a class="aaa"href="adminpanel.php">Home</a>

		 	 	<br>
		 	 	<a class="aaa"href="adminNotifications.php">Notifications</a>

		 	 	<br>
		 	 	<a class="aaa"href="adminSettings.php">Admin Profile</a>

				<br>
		 	 	<a class="aaa"href="logout.php">Log Out</a>

		 </div>
<?php
	include_once('../connection/connection.php');
	$chatresults="SELECT * FROM chatms";
	$cmresults=mysqli_query($conn, $chatresults);
?>

		 <div class="cbtbl">
		 	<br><br>
		 	<table>
		 		<tr>
		 		<th><div class="inlinediv header">Chat ID#</div></th>
		 		<th><div class="inlinediv header">Questions</div></th>
		 		<th><div class="inlinediv header">Answers</div></th>
		 		<th><div class="inlinediv header">Actions</div></th>
		 		</tr>
<?php
		 			while ($rows=mysqli_fetch_assoc($cmresults)) 
		 			{
		 		?>
		 		<tr>
		 		<td><div class="inlinediv cbnumber"><?php echo $rows['id'];?></div></td>

		 		<td><div class="inlinediv cbquestion"><?php echo $rows['quest'];?></div></td>
		 		<td><div class="inlinediv cbanswer"><?php echo $rows['answer'];?></div></td>
		 		<td>
		 			<div class="inlinediv cbactions">
		 				<center>
		 					<input type="button" class="actionbtn" name="" value="Edit" id="Update" name="Update">
		 					<input type="button" class="actionbtn spaced" name="" value="Delete" id="">
		 				</center>
		 			</div>
		 		</td>
		 		</tr>
		 		<?php
		 			}
		 		?>
		 	</table>

		 	
		 	
		 </div>

  	<!-- Update Chatbot Message -->

				<div class="popup2 center">
  					<h4>Update Questions and Answers</h4>
  			<div class="description">

  				<form class="updatechatbotmessage" style="background-color:white;" method="post">

  			
  			<br>
  			<label>Question</label><br>
  			<textarea class="botarea"></textarea><br><br>
  			<label>Answer</label><br>
  			<textarea class="botarea"></textarea>
  			<br>

  			<div class="dismiss-btn">
  			<button>Update</button>
  			</div>

  		</form>
  </div>
  <div class="dismiss-btn">
    <button id="dismiss-popup2-btn">
      Close
    </button>
  </div>
</div>

  	


  	<!-- Add Chatbot Message -->

				<div class="popup center">
  					<h4>Add Questions and Answers</h4>
  			<div class="description">

  				<form class="chatbotaddform" style="background-color:white;" method="post">

  			
  			<br>
  			<label>Question</label><br>
  			<textarea class="botarea"></textarea><br><br>
  			<label>Answer</label><br>
  			<textarea class="botarea"></textarea>
  			<br>

  			<div class="dismiss-btn">
  					<button>Add</button>
  			</div>

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
/*Add Chatbot Message*/
	document.getElementById("openAddBotForm").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup")[0].classList.remove("active");
});
/*Update Chatbot Message*/
	document.getElementById("Update").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.add("active");
});
 
document.getElementById("dismiss-popup2-btn").addEventListener("click",function(){
  document.getElementsByClassName("popup2")[0].classList.remove("active");
});
</script>
</html>