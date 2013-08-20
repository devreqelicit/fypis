<?php
session_start();
$host = "localhost";
$username = "root"; 	
$password = "root";
$db_name = "smppta";
$tbl_name="addproject";
$tbl_name="maklumatpenyelia";


// Connect to server and select databse.
$link=mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");

// Get values from form
$matrik=$_POST['matrik'];
$semester=$_POST['semester'];
$tahun=$_POST['tahun'];
$jamKredit=$_POST['jamKredit'];
$staffId=$_POST['staffId'];
$tajukProjek=$_POST['tajukProjek'];
$cgpa=$_POST['cgpa'];
$penerangan=$_POST['penerangan'];
$noOfStudent=$_POST['noOfStudent'];

// Insert data into mysql
$matrik=$_SESSION['matrik'];
$sql="INSERT INTO addproject (matrik, semester, tahun, jamKredit, staffId, tajukProjek, cgpa, penerangan)VALUES($matrik, '$semester',  '$tahun','$jamKredit', '$staffId', '$tajukProjek','$cgpa', '$penerangan')";
mysql_query($sql, $link)or die(mysql_error());

$noOfStudent=$noOfStudent+1;
$sql2="UPDATE maklumatpenyelia SET noOfStudent = $noOfStudent WHERE staffId='$staffId'";
mysql_query($sql2, $link)or die(mysql_error());

header("location:maklumatprojek1.php");



// close connection
mysql_close();

?>