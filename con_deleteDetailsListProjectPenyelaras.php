  <?php
$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="listprojectpenerangan";
$tbl_name="listfinalyearproject";
				
					// Connect to server and select database.
					mysql_connect("$host", "$username", "$password")or die("cannot connect");
					mysql_select_db("$db_name")or die("cannot select DB");
					

// get value of id that sent from address bar
$id=$_GET['id'];

$sql="DELETE * FROM listprojectpenerangan WHERE id=$idpenerangan";
// Delete data in mysql from row that has this id
//$sql="DELETE * FROM listprojectpenerangan a,  listfinalyearproject b WHERE a.idpenerangan=b.id and a.idpenerangan='$id'";
$result=mysql_query($sql);

$sql="DELETE * FROM listfinalyearproject WHERE id=$id";




// if successfully deleted
if($result){
header("location:deleteSuccessfull.php");
}



// close connection
mysql_close();

?>