<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['admin_id']) || (trim($_SESSION['admin_id']) == '')) {
    header("location: ../HealthcareAdminlogin11012.php");
    exit();
}
$session_id=$_SESSION['admin_id'];

?>