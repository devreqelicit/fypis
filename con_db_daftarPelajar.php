<?php

$host = "localhost";
$username = "root"; 	
$password = "root";
$db_name = "smppta";
$tbl_name="maklumatpelajar";
$tbl_name="loginpelajar";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");

// Get values from form
$nama=$_POST['nama'];
$matrik=$_POST['matrik'];
$katalaluan=$_POST['katalaluan'];
$emel=$_POST['emel'];

// Insert data into mysql
$sql="INSERT INTO maklumatpelajar (nama, matrik, emel)VALUES('$nama', '$matrik', '$emel')";
$result=mysql_query($sql);

// Insert data into mysql
$sql="INSERT INTO loginpelajar (matrik, katalaluan)VALUES('$matrik','$katalaluan')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
header("location:loginPelajar.php");
}

else {
header("location:wrongDaftarPelajar.php");
}


// close connection
mysql_close();

?>