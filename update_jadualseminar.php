<?php
	
	session_start();
	
	include('connection/con_db.php');
	
	$presentation_id = $_POST['presentation_id'];

	$chairperson = $_POST['chairperson'];
	$timekeeper = $_POST['timekeeper'];
	
	$error = "";
	
	if(empty($timekeeper)){
		$error = "Please select timekeeper";
	}else{
		$query = mysql_query("SELECT * FROM year_of_project WHERE id = '".$presentation_id."' AND timekeeper = '".$timekeeper."'");
		if(mysql_fetch_row($query) > 0){
			$error = "Timekeeper already exists. Please try again.";
		}
	}	
	
	if(empty($chairperson)){
		$error = "Please select chairperson";
	}else{
		$query = mysql_query("SELECT * FROM year_of_project WHERE id = '".$presentation_id."' AND chairperson = '".$chairperson."'");
		if(mysql_fetch_row($query) > 0){
			$error = "Chairperson already exists. Please try again.";
		}
	}
	/* -- check if exists -- */
	
	
	if($error != ""){
		echo "<div class='warning'>".$error."</div>";
	} else {
		$date = $year."-".$month."-".$day;
		

		
		// Insert Data
		mysql_query("UPDATE year_of_project SET 				chairperson = '".$chairperson."',
																timekeeper = '".$timekeeper."'
					WHERE id ='".$presentation_id."'")or die(mysql_error());
		
		
		echo "<div class='success'>Successfully updated! Redirecting to previous page...</div>";
		
		echo	"<script>setTimeout(\"location.href = 'penyelaras_jadualseminar.php';\",1500);</script>";
		
	}

?>