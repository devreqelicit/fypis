<?php
$host = "localhost";
$username = "root";
$password = "root";
$db_name = "smppta";
$tbl_name="maklumatpelajar";
$tbl_name="loginpenyelia";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");


?>