<?php

$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="loginpenyelia";
$tbl_name="maklumatpenyelia";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");

// Get values from form
$namaPenyelia=$_POST['namaPenyelia'];
$staffId=$_POST['staffId'];
$katalaluan=$_POST['katalaluan'];
$emel=$_POST['emel'];

echo $namaPenyelia;
// Insert data into mysql

$sql="INSERT INTO maklumatpenyelia (staffId, namaPenyelia, emel)VALUES('$staffId', '$namaPenyelia', '$emel')";
$result=mysql_query($sql);


$sql="INSERT INTO loginpenyelia (staffId, katalaluan)VALUES('$staffId', '$katalaluan')";
$result=mysql_query($sql);



// if successfully insert data into database, displays message "Successful".
if($result){
header("location:addMaklumatPenyeliaInsertPenyelaras.php");
}
else{
header("location:WrongaddMaklumatPenyeliaInsertPenyelaras.php");
}



// close connection
mysql_close();

?>