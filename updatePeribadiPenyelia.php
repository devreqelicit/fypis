<?php
session_start();
require_once('connection/con_db.php');
$tbl_name="maklumatpenyelia";
$tbl_name="loginpenyelia";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$staffId=$_SESSION['staffId'];
$namaPenyelia=$_POST['namaPenyelia'];
$jantina=$_POST['jantina'];
$jawatan=$_POST['jawatan'];
$notelefon=$_POST['notelefon'];
$emel=$_POST['emel'];
$noBilik=$_POST['noBilik'];
$kepakaran=$_POST['kepakaran'];


// update data in mysql database
$sql="UPDATE maklumatpenyelia SET namaPenyelia='$namaPenyelia', jantina='$jantina', jawatan='$jawatan', notelefon='$notelefon', emel='$emel', noBilik='$noBilik', kepakaran='$kepakaran'
WHERE staffId='$staffId'";
$result=mysql_query($sql);

// if successfully updated.
header("location:maklumatPeribadiPenyelia.php");

?>



 