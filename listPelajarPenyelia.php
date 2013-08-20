<?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root123";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="addproject";// Table name
				$tbl_name="maklumatpelajar";// Table name
				$tbl_name="maklumatpenyelia";
		
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						//$staffId=$_SESSION['staffId'];
						$sql="SELECT matrik FROM addproject WHERE staffId='$staffId'";
						$result=mysql_query($sql);
						while($rows=mysql_fetch_array($result))
						{
						$matrik=$rows['matrik'];
						$sql="SELECT * FROM maklumatpelajar WHERE matrik=$matrik";
						$result=mysql_query($sql);

						
?>