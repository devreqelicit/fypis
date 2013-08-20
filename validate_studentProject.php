<?php

$semester = $_POST['semester'];

$error = "";


if(empty($semester))
	$error = '<font color="red"><i>Error: Please select Semester!</i></font>';


	
	if($error != ""){
		echo $error;
	}else{
		echo "<script>location.href='report/list_of_student.php?semester=$semester'</script>";
	}

?>