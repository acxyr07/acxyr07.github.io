<?php

$conn2 = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

$get_id=$_REQUEST['doctor_id'];

move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];


$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tbl_doctor SET d_photo ='$location1' WHERE doctor_id = '$get_id' ";

$conn2->exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='../doctor/doctorprofile.php'</script>";
?>