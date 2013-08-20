<?php
	
	session_start();
	
	include('connection/con_db.php');
	
	$semester_y = $_POST['semester_y'];
	$semester = $_POST['semester'];
	$day_of_present = $_POST['day_of_present'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];	
	$venue = $_POST['venue'];
	$chairperson = $_POST['chairperson'];
	$timekeeper = $_POST['timekeeper'];

	
	$error = "";
	
	if(empty($timekeeper))
		$error = "Please select timekeeper";
	
	if(empty($chairperson))
		$error = "Please select chairperson";
	
	if(empty($venue))
		$error = "Please select venue";

		
	if(empty($day) || empty($month) || empty($year))
		$error = "Please select date";	
	
	if(empty($day_of_present))
		$error = "Please select Day of presentation";
	
	if(empty($semester_y) || empty($semester))
		$error = "Please select semester";

	
	// We need to check the existing data 1st
	$year_of_semester = $semester_y . "-" . $semester;
	$date_check = $year."-".$month."-".$day;

	$query = mysql_query("SELECT * FROM year_of_project WHERE year_of_semester = '".$year_of_semester."' AND day = '".$day_of_present."' AND date = '".$date_check."' AND venue = '".$venue."'")or die(mysql_error()); 
	
	if( mysql_fetch_row($query) > 0 )
		$error = "Date \"".$date_check."\" and Venue  \"".$venue."\" already exists on selected day of semester \"".$year_of_semester."\". Please try again";
		
		
	if($error != ""){
		echo "<div class='warning'>".$error."</div>";
	} else {
		$date = $year."-".$month."-".$day;
		
		
		if($semester == 1)
			$title_semester = "1st Semester";
		else
			$title_semester = "2nd Semester";
		
		$title = "Presentation Scheduled For Final Year (SIM 4999)" . " - " . $title_semester . " " . $semester_y;
		
		// Insert Data
		mysql_query("INSERT INTO year_of_project SET 	year_of_semester = '".$year_of_semester."',
																year = '".$semester_y."',
																semester = '".$semester."',
																day = '".$day_of_present."',
																date = '".$date."',
																venue = '".$venue."',
																title = '".$title."',
																chairperson = '".$chairperson."',
																timekeeper = '".$timekeeper."'");
		
		
		echo "<div class='success'>Added new record! Redirecting to previous page...</div>";
		
		echo	"<script>setTimeout(\"location.href = 'penyelaras_jadualseminar.php';\",1500);</script>";
		
	}

?>