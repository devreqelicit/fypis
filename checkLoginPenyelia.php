<?php
session_start();
include('connection/con_db.php');
// username and password sent from form 
$staffId=$_POST['staffId']; 
$katalaluan=$_POST['katalaluan']; 

// To protect MySQL injection (more detail about MySQL injection)
$staffId = stripslashes($staffId);
$katalaluan = stripslashes($katalaluan);
$staffId = mysql_real_escape_string($staffId);
$katalaluan = mysql_real_escape_string($katalaluan);
$sql="SELECT * FROM loginpenyelia WHERE staffId='".$staffId."' and katalaluan='".$katalaluan."' ";
									//Table DB = Post Form Field
$result=mysql_query($sql);
 

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$_SESSION['staffId']=$staffId;
	header("location:sv_student_list.php");
}
else {
	header("location:wrongLoginPenyelia.php");
}


?>