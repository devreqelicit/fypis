<?php
session_start();
include('connection/con_db.php');

$matrik=$_SESSION['matrik'];
$katalaluan=$_POST["katalaluan"];
$katalaluanBaru=$_POST["katalaluanBaru"];

$result1 = mysql_query("SELECT * from loginpelajar WHERE matrik=$matrik and katalaluan='$katalaluan'");
if(mysql_num_rows($result1)!=0){
$result2 = mysql_query("UPDATE loginpelajar SET katalaluan='$katalaluanBaru' WHERE matrik=$matrik");
echo "<script language='javascript'>";
echo "alert('Katalaluan baru berjaya ditukar!');";
echo "location.href='maklumatPelajar1.php';";


echo "</script>";

}
else{
echo "<script language='javascript'>";
echo "alert('Katalaluan yang dimasukkan Salah!');";
echo "location.href='ubahKatalaluan.php';";
echo "</script>";

}

mysql_close();
?>
