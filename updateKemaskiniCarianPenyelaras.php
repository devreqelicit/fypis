<?php
session_start();
$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";


// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");


$staffId=$_SESSION['staffId'];
$nama=$_POST['nama'];
$matrik=$_POST['matrik'];
$pemeriksa=$_POST['pemeriksa'];
$penyelia=$_POST['penyelia'];
$penerangan=$_POST['penerangan'];
$namaSistem=$_POST['namaSistem'];
$id=$_POST['id'];

// update data in mysql database
$sql="UPDATE listfinalyearproject SET nama='$nama', pemeriksa='$pemeriksa', penyelia='$penyelia', namaSistem='$namaSistem' WHERE id=$id";
$result=mysql_query($sql);


$sql="UPDATE listprojectpenerangan SET penerangan='$penerangan' WHERE idpenerangan=$id";
$result=mysql_query($sql);


//$sql="UPDATE * FROM listprojectpenerangan a,  listfinalyearproject b WHERE a.idpenerangan=b.id and a.idpenerangan='$id'";



// if successfully updated.
header("location:viewkemaskinicarianprojek.php?id=$id");

?>



 