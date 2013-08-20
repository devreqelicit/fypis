<?php
session_start();
require_once('connection/con_db.php');
$tbl_name="maklumatpelajar";
$tbl_name="loginpelajar";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$matrik=$_SESSION['matrik'];
$nama=$_POST['nama'];
$notelefon=$_POST['phone_no'];
$emel=$_POST['emel'];
$agama=$_POST['agama'];
// Update date according to Db format
$year= $_POST['year'];
$month = $_POST['month'];
$day= $_POST['day'];
$tarikhLahir =  $year . "-" . $month . "-" . $day;
$alamatSemester1=$_POST['alamatSemester1'];
$postcode=$_POST['postcode'];
$state=$_POST['state'];
$program=$_POST['program'];
$department=$_POST['department'];
$pngk=$_POST['pngk'];
$advisor=$_POST['advisor'];
 
 echo $tarikhLahir;

// update data in mysql database
$sql="UPDATE maklumatpelajar SET nama='$nama', 
								 notelefon='$notelefon', 
								 emel='$emel', 
								 agama='$agama',
								 tarikhLahir='$tarikhLahir',
								 alamatSemester1='$alamatSemester1',
								 poskodSemester='$postcode',
								 negeriSemester='$state',
								 program='$program',
								 department='$department',
								 pngk='$pngk',
								 advisor='$advisor'
	  WHERE matrik=$matrik";
$result=mysql_query($sql)or die(mysql_error());

// if successfully updated.
header("location:maklumatPelajar1.php");

?>



 