

<?php

include('connection/con_db.php');

$progress_id = $_POST['std_prog_id'];
$student_id = $_POST['student_id'];
$curr_prog = $_POST['progress_id'];
$comment = $_POST['comment'];
//$progress_id = $_POST['std_prog_id'];


	// Insert data
	mysql_query("INSERT INTO progress_approve SET progress_id = '".$progress_id."', student_id = '".$student_id."', comment = '".$comment."'");
	
	// Update progress
	$progress_id++;
	
	mysql_query("UPDATE addproject SET progress_id = '".$progress_id."', progress_status = '' WHERE matrik = '".$student_id."'");
	
	
	
	echo "<div class='success'>Success: Progress successfully approved.</div>";

?>