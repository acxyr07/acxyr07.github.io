<?php
        include('../connection/patientsession.php');
        include ('../connection/connection.php');
        

        if(count($_POST)>0) {
        

    $sql = "INSERT INTO tbl_patient_medical_history (patient_id, Height, Weight, Blood_type, Drug_allergies, Any_illness, Other_illness, Past_operations, Current_medication, Exercise, Dietplan, Alcoholc, CaffeineC, SmokeC, Cmdh, Ic_name, Ic_phone, Ic_Address, Ic_Email) VALUES ('". $_POST["patient_id"] . "', '" . $_POST["Height"] . "', '". $_POST["Weight"] . "', '". $_POST["Bloodtype"] . "', '" . $_POST["drug_allergies"] . "', '". $_POST["any_illness"] ."' , '". $_POST["other_illness"] . "', '" . $_POST["past_operations"] . "', '". $_POST["current_medication"] . "', '". $_POST["p_exercise"] . "', '" . $_POST["p_dietplan"] . "', '" . $_POST["p_alcoholc"] . "', '" . $_POST["p_caffeinec"] . "', '" . $_POST["p_smokec"] . "', '" . $_POST["comment"] . "', '" . $_POST["Name"] . "', '" . $_POST["Phone"] . "', '" . $_POST["Address"] . "', '" . $_POST["Email"] . "')";
 
        mysqli_query($conn,$sql);
        $current_id = mysqli_insert_id($conn);
        if(!empty($current_id)) 
    {
              header("Location: ../patient/pmedicalhistory.php");
    }
}
?>

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
	<div class="header">
		<center>
			<h1 class="headerh3"><img class="clinic" src="../icons/healthcarelogo.png">Healthcare</h1>
		</center>
	</div>
	<div class="headerwhite">
    <form name="medForm" action="pmedform.php" method="post" class="medform">
		<h2>Patient's Medical History Form</h2>
        <br>
        <?php
                include('../connection/connection.php');
                $sessionmedid="SELECT * FROM tbl_patient WHERE patient_id='$session_id'";
                $sessionresult=mysqli_query($conn, $sessionmedid);
        ?>
            <?php
                    while ($rows=mysqli_fetch_assoc($sessionresult)) 
                    {
            ?>
            <input type="hidden" name="patient_id" value="<?php echo $rows['patient_id'];?>">
        <?php }?>
			<label>Height</label><br>
            
                
				<input type="number" name="Height" id="Height" class="medstats" placeholder="In CMs" required=""><br><br>
			
			<label>Weight</label><br>
				<input type="number" name="Weight" id="Weight" class="medstats" placeholder="In KGs" required=""><br><br>
			
			 <label>Blood Type</label><br>
				<select id="Bloodtype" name="Bloodtype" required="">
                    <option value ="">Select Bloodtype</option>
                    <option value ="A">A</option>
                    <option value ="B">B</option>
                    <option value ="AB">AB</option>
                    <option value ="O">O</option>
                    <option value ="A+">A+</option>
                    <option value ="B+">B+</option>
                    <option value ="AB+">AB+</option>
                    <option value ="O+">O+</option>
                    <option value ="A-">A-</option>
                    <option value ="B-">B-</option>
                    <option value ="AB-">AB-</option>
                    <option value ="O-">O-</option>
                </select>
            <h2>Drug Allergie's</h2>

			<label>Please list any Drug allergies (Optional)</label><br>
            <textarea id="drug_allergies" name="drug_allergies">
                      
                  </textarea>

   
             <h2>Illnesses</h2>

            <label>Please choose any Illnesses  that you are feeling right now</label><br>
                  <select class="illness" id="any_illness" name="any_illness">
                    <option>SELECT / PUMILI</option>
                    <option value="Eye irritation / Pangangati ng mata">Eye irritation / Pangangati ng mata</option>
                    <option value="Runny nose / Sipon">Runny nose / Sipon</option>
                    <option value="Stuffy nose / Baradong ilong">Stuffy nose / Baradong ilong</option>
                    <option value="Puffy, watery eyes / Nagtutubig o nagluluhang mga mata">Puffy, watery eyes / Nagtutubig o nagluluhang mga mata</option>
                    <option value="Sneezing / Pagbahin">Sneezing / Pagbahin</option>
                    <option value="Inflamed, itchy nose and throat / Namamaga, nangangati ilong at lalamunan">Inflamed, itchy nose and throat / Namamaga, nangangati ilong at lalamunan</option>
                    <option value="Hives or skin rashes / Mga pantal o pantal sa balat">Hives or skin rashes / Mga pantal o pantal sa balat</option>
                    
                   
                    <option value="Itchiness / Pangangati">Itchiness / Pangangati</option>
                    <option value="Difficulty breathing or wheezing / Pinagkakahirapan sa paghinga o paghinga">Difficulty breathing or wheezing / Pinagkakahirapan sa paghinga o paghinga</option>
                    <option value="Fainting or lightheadedness / Pagkahilo">Fainting or lightheadedness / Pagkahilo</option>
                    <option value="Fever 37°C / Mataas na Lagnat">Fever 37°C / Mataas na Lagnat</option>
                    
                    <option value="Constant, dull ache / pare-pareho, mapurol na sakit">Constant, dull ache / pare-pareho, mapurol na sakit</option>
                  </select>



              <h2>Other Illnesses</h2>

            <label>Please list any other Illnesses  that you felt before and still feeling right now (Optional)</label><br>
                  <textarea id="other_illness" name="other_illness">
                      
                  </textarea>

            <h2>Any Past Operations</h2>

            <label>Please list any Past Operations  that you've experienced before; Please include the date (Optional)</label><br>
                  <textarea id="past_operations" name="past_operations">
                      
                  </textarea>

             <h2>Current Medication</h2>

            <label>Please list any Current Medication (Optional)</label><br>
                  <textarea id="current_medication" name="current_medication">
                      
                  </textarea>

             <h2>Healty and Unhealthy Habits</h2>

             <label for="p_exercise">Exercise</label><br>
                    <select id="p_exercise" name="p_exercise" required="">
                        <option value="">Select One Habits</option>
                        <option value="Never">Never</option>
                        <option value="1 - 2 days">1 - 2 days</option>
                        <option value="3 - 4 days">3 - 4 days</option>
                        <option value="5 + days">5 + days</option>
                    </select>
            <br>
            <br>
            <label for="p_dietplan">Eating following a diet</label><br>
                 <select  id="p_dietplan" name="p_dietplan" required="">
                    <option value="">Select One Habits</option>
                    <option value="I dont have any diet plan">I dont have any diet plan</option>
                    <option value="I have a loose diet">I have a loose diet</option>
                    <option value="I have strict diet">I have strict diet</option>
                </select>

            <br>
            <br>
            <label for="p_alcoholc">Alocohol Consumption</label><br>
                <select  id="p_alcoholc" name="p_alcoholc" required="">
                    <option value="">Select One Habits</option>
                    <option value="I dont drink">I dont drink</option>
                    <option value="1 - 2 glass a day">1 - 2 glass a day</option>
                    <option value="3 - 4 glass a day">3 - 4 glass a day</option>
                    <option value="5 + glass a day">5 + glass a day</option>
                </select>
       
            <br>
            <br>
            <label for="p_caffeinec">Caffeine Consumption</label><br>
                <select  id="p_caffeinec" name="p_caffeinec" required="">
                    <option value="">Select One Habits</option>
                    <option value="I dont use Caffeine">I dont use Caffeine</option>
                    <option value="1 - 2 cups a day">1 - 2 cups a day</option>
                    <option value="3 - 4 cups a day">3 - 4 cups a day</option>
                    <option value="5 + cups a day">5 + cups a day</option>
                </select>

            <br>
            <br>
            <label for="p_smokec">Do you smoke</label><br>
                <select  id="p_smokec" name="p_smokec" required="">
                    <option value="">Select One Habits</option>
                    <option value="No">No</option>
                    <option value="1 - 2 stick a day">1 - 2 stick a day</option>
                    <option value="3 - 4 stick a day">3 - 4 stick a day</option>
                    <option value="5 + stick a day">5 + stick a day</option>
                    <option value="half pack per day">half pack per day</option>
                    <option value="one pack per day">one pack per day</option>
                    <option value="more than one pack per day">more than one pack per day</option>
                </select>

            <br>
            <br>
            <label for="p_cmdh">Include other comments regarding your Medical History</label><br>
                    <textarea id="comment" name="comment">
                      
                    </textarea>


            <h2>In Case of Emergency</h2>

            <label for="pgname">Name</label><br>
                    <input type="text" class="sl" id="Name" name="Name" placeholder="Juan Dela Cruz" required="">

            <br>
            <br>
            <label for="pgphone">Phone</label><br>
                    <input type="number" class="sl" id="Phone" name="Phone" placeholder="Phone #" required="">
          
            <br>
            <br>
            <label for="pgname">Address</label><br>
                    <input type="text" class="sl" id="Address" name="Address" placeholder="" required="">
          
            <br>
            <br>
            <label for="pgname">Email</label><br>
                    <input type="text" class="sl" id="Email" name="Email" placeholder="Optional">
      


            <br>
            <br>   

            <input type="submit" class="medformsubmit" value="Submit" name="">
   

            <br>
            <br>
             <a class="homepageloginlink" href="preqappointment.php">Back to Home</a>
                  </form>
	</div>
			 <br>
             <br>
             <br>
             <br>
</body>
</html>