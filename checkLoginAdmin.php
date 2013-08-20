<?php
session_start();
include('connection/con_db.php');
// username and password sent from form 
$id=$_POST['id']; 
$katalaluan=$_POST['katalaluan']; 

// To protect MySQL injection (more detail about MySQL injection)
$id = stripslashes($id);
$katalaluan = stripslashes($katalaluan);
$id = mysql_real_escape_string($id);
$katalaluan = mysql_real_escape_string($katalaluan);
$sql="SELECT * FROM admin WHERE id='".$id."' and katalaluan='".$katalaluan."' ";
									//Table DB = Post Form Field
$result=mysql_query($sql);
 

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	$_SESSION['staffId']=$id;
	header("location:addMaklumatPenyeliaInsertPenyelaras.php");
}
else {
	header("location:wrongLoginAdmin.php");
}


?>