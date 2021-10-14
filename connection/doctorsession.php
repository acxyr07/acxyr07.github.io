<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['doctor_id']) || (trim($_SESSION['doctor_id']) == '')) {
    header("location: ../doctorhomepage.php");
    exit();
}
$session_id=$_SESSION['doctor_id'];

?>