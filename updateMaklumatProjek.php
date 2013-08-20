<?php
				session_start();
require_once('connection/con_db.php');
				$tbl_name="addproject";// Table name
				
				
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$matrik=$_SESSION['matrik'];
$tajukProjek=$_POST['tajukProjek'];
$penerangan=$_POST['penerangan'];

// update data in mysql database
$sql="UPDATE addproject SET tajukProjek='$tajukProjek', penerangan='$penerangan' WHERE matrik=$matrik";
$result=mysql_query($sql);

// if successfully updated.
header("location:maklumatProjek1.php");

?>



 