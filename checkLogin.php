<?php
session_start();
include('connection/con_db.php');

// username and password sent from form 
$matrik=$_POST['matrik']; 
$katalaluan=$_POST['katalaluan']; 

// To protect MySQL injection (more detail about MySQL injection)
$matrik = stripslashes($matrik);
$katalaluan = stripslashes($katalaluan);
$matrik = mysql_real_escape_string($matrik);
$katalaluan = mysql_real_escape_string($katalaluan);
$sql="SELECT * FROM loginpelajar WHERE matrik='".$matrik."' and katalaluan='".$katalaluan."' ";
//Table DB = Post Form Field
$result=mysql_query($sql);
 

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	// Register $myusername, $mypassword and redirect to file "loginSuccess.php"
	
	$_SESSION['matrik']=$matrik;
	header("location:PelajarBulletin.php");
}
else {
	header("location:wrongLoginPelajar.php");
}
?>