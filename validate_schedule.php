<?php

$semester = $_POST['semester'];
$day = $_POST['day'];
$error = "";


if(empty($day))
	$error = '<font color="red"><i>Error: Please select Day!</i></font>';
if(empty($semester))
	$error = '<font color="red"><i>Error: Please select Semester!</i></font>';

	
	if($error != ""){
		echo $error;
	}else{
		echo "<script>location.href='report/rpt_presentation.php?day=$day&semester=$semester'</script>";
	}

?>