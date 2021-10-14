<?php

$conn = new PDO('mysql:host=localhost; dbname=healthcare','root', ''); 

$get_id=$_REQUEST['admin_id'];

move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);			
$location1=$_FILES["image"]["name"];


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE tbl_administrator SET adminPhoto ='$location1' WHERE admin_id = '$get_id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Updated!!!'); window.location='updateAdminInfo.php'</script>";
?>