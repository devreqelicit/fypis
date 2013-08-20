<?php

$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="listfinalyearproject";
$tbl_name="listprojectpenerangan";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");

// Get values from form
$nama=$_POST['nama'];
$matrik=$_POST['matrik'];
$pemeriksa=$_POST['pemeriksa'];
$namaSistem=$_POST['namaSistem'];
$penyelia=$_POST['penyelia'];
$semester=$_POST['semester'];
$tahun=$_POST['tahun'];
$penerangan=$_POST['penerangan'];

// Insert data into mysql
$sql="INSERT INTO listfinalyearproject (nama, matrik, pemeriksa, namaSistem, penyelia, semester, tahun)VALUES('$nama', '$matrik', '$pemeriksa' , '$namaSistem' , '$penyelia', '$semester' , '$tahun')";
$result=mysql_query($sql);

// Insert data into mysql
$sql="INSERT INTO listprojectpenerangan (penerangan)VALUES('$penerangan')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){
header("location:addProjectListPenyelaras.php");
}
 else
 {
 header("location:WrongaddProjectListPenyelaras.php");

}

// close connection
mysql_close();

?>