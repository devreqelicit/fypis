<?php

	/**
		Since this system doesn't have proper heading, create simple function to handle header styles - keira 
	**/

	// Header
	function heading(){
	
		?>
		
			<html>
			<head>
			<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
			<style type="text/css">
			<!--
			body {
				background-color: #2b2928;
				background-image: url(images/templatemo_main_bg.jpg);
				background-repeat: repeat-x;
				margin-left: 0px;
				margin-top: 0px;
				margin-right: 0px;
				margin-bottom: 0px;
			}
			body,td,th {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 12px;
				color: #000000;
			}
			.style26 {
				color: #000000
			}
			.style24 {color: #FFFFFF}
			.style31 {color: #990000}
			.style34 {color: #666666}
			.style35 {font-size: 14px;
				font-weight: bold;
			}
			.style48 {
				color: #000000;
				font-weight: bold;
				font-size: small;
			}
			.style50 {
				font-size: small;
				color: #0000FF;
				font-weight: bold;
			}
			-->
			</style>
			<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
			<!-- css -->
			<link rel="stylesheet" type="text/css" href="styles.css">
			<!-- jquery -->
			<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
			<!-- TinyMCE -->
			<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
					mode : "textareas",
					theme : "simple",
					
				});
			</script>
			<!-- /TinyMCE -->

			<script>
				//check PADAM button Yes,No
				function confirmDelete(link) {
					if (confirm("Adakah anda pasti untuk padam rekod ini dari pangkalan data?")) {
						doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
					}
					return false;
				}
			</script>

			</head>
			<body>

			<div align="center"><br>
			  <table width="998" height="498" border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
				<tr>
				  <td width="998" height="494" bgcolor="#FFFFFF"><table width="998" height="492" border="0" cellpadding="0" cellspacing="0">
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>

					<tr>
					  <td height="17" bgcolor="#990000" class="style26"><div align="center">
						<table width="981" border="0" cellpadding="0" cellspacing="0">
						  <tr>
							<td width="114"><span class="style31">
							  <?php include("footer/staffIdPenyelaras.php"); ?>
							</span></td>
							<td width="867"><div align="center"></div></td>
						  </tr>
						</table>
					  </div></td>
					</tr>
					<tr>
					  <td width="1282" height="169" bgcolor="#FFFFFF"><div align="center">
		
		<?php
	
	}
?>