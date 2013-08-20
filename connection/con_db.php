<?php
					$host = "localhost";
					$username = "reqelici_smppta"; 	
					$password = "smppta123";
					$db_name = "reqelici_smppta";
					
					// Development
					//$username = "root"; 	
					//$password = "root";
					
					// Connect to server and select databse.
					mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
					mysql_select_db("$db_name") or die ("Cannot Select Database");


?>