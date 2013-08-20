<?php
session_start();
include('connection/con_db.php');

$staffId=$_SESSION['staffId'];
echo $staffId;
$katalaluan=$_POST["katalaluan"];
$katalaluanBaru=$_POST["katalaluanBaru"];

$result1 = mysql_query("SELECT * from loginpenyelia WHERE staffId='$staffId' and katalaluan='$katalaluan'");
if(mysql_num_rows($result1)!=0){
$result2 = mysql_query("UPDATE loginpenyelia SET katalaluan='$katalaluanBaru' WHERE staffId=$staffId");
echo "<script language='javascript'>";
echo "alert('Katalaluan baru berjaya ditukar!');";
echo "location.href='maklumatPeribadiPenyelia.php';";
echo "</script>";

}
else{
echo "<script language='javascript'>";
echo "alert('Katalaluan yang dimasukkan Salah!');";
echo "location.href='ubahKatalaluanPenyelia.php';";
echo "</script>";

}

mysql_close();
?>
