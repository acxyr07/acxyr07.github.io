<?php
include('../connection/patientsession.php'); 
include_once('../connection/connection.php'); // Using database connection file here

$id = $_GET['rpa_id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM tbl_responded_appointments WHERE rpa_id = $id"); // delete query

if($del)
{   
    echo "<script>alert('Appointment Deleted!')</script>";
    header("location:pappointment.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>