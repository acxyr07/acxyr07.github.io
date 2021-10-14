	<?php
				include_once("../connection/connection.php");

				if (isset($_POST['UpdateSchedule']))
				{
					$rpa_id= $_GET['rpa_id'];

					$query="UPDATE tbl_responded_appointments SET schedule='$_POST[newSched]', comments='$_POST[comments]' WHERE rpa_id=$rpa_id";
					$query_update = mysqli_query($conn,$query);	

				if ($query_update)
				{	
					echo "<script>alert('Data Update Success')</script>";
					header("location:pappointment.php");
				}
				else
				{
					echo "<script>alert('Data Update Failed')</script>";
				}
			}

			?>