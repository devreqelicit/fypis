<?php

session_start();

include('connection/con_db.php');


$time = $_POST['time'];
$time2 = $_POST['time2'];
$day = $_POST['day'];
$matric_no = $_POST['matrik_no'];
$examiner = $_POST['examiner'];

$semester= $_POST['semester'];
$curr_day = $_POST['current_day'];
$venue= $_POST['venue'];
$session = $_POST['current_session'];



// update value 
mysql_query("UPDATE presentation_schedule SET 	
						time_from = '".$time."',
						time_until = '".$time2."',
						venue= '".$venue."',
						day = '".$day."',
						examiner_id = '".$examiner."'
			 WHERE student_id = '".$matric_no."'");

echo "<div class='success'>Updated! redirecting ...</div>";												
echo "<script>setTimeout(\"location.href = 'penyelaras_jadualseminar.php?search=true&semester=$semester&chosen_day=$curr_day&venue=$venue&session=$session';\",1500);</script>";


?>