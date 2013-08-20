 <?php

$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="listprojectpenerangan";
$tbl_name="listfinalyearproject";


// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");

// get value of id that sent from address bar

$id=$_GET['id'];

// Delete data in mysql from row that has this id
$sql="DELETE FROM listprojectpenerangan WHERE idpenerangan=$id";
$result=mysql_query($sql);

$sql="DELETE FROM listfinalyearproject WHERE id=$id";
$result=mysql_query($sql);


// if successfully deleted
if($result){
header("location:deleteSuccessfully.php?id=$id");
}

else {
//header("location:deleteDetailsListProjectPenyelaras.php");
}

// close connection
mysql_close();

?>