﻿<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 

####################################
#	Modified by: Hilmi Azli 	   #
#	Date: Febuary 2013			   #	
#	Email: hilmiazli@gmail.com	   #	
####################################

session_start();
if(!$_SESSION['staffId']){header("location:SilaloginPenyelaras.php");}
?>

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
.style29 {
	color: #000000;
	font-size: 16px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style23 {
	color: #000000;
	font-weight: bold;
}
.style24 {color: #FFFFFF}
.style30 {color: #FFFFFF;
	font-weight: bold;
}
.style31 {color: #990000}

#backgrd{
	background: #000000;
	opacity: 0.9;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 20;
}

#studentProjectList{
	background: #000000;
	opacity: 0.9;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 20;
}

.content-center{
	background: #FFFFFF;
	margin: 200px auto;
	width: 500px;
	min-height: 100px;
	border: 1px solid #bbbbbb;
	z-index: 25;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	-webkit-border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
	-khtml-border-radius: 5px 5px 5px 5px;
	border-radius: 5px 5px 5px 5px;
	
}

.select-option{
	width: 200px;
	height: 30px;
	font-size: 19px;
	background: #f6f4b9;
	border: 1px solid #DDDDDD;
	color: #131a47;

}

.proceed-button{
	-webkit-border-radius: 5px 5px 5px 5px;
	-moz-border-radius: 5px 5px 5px 5px;
	-khtml-border-radius: 5px 5px 5px 5px;
	border-radius: 5px 5px 5px 5px;
	background: #3a4bb3;
	padding: 5px;
	text-align: center;
	color: #FFFFFF;
	border: 1px solid #28347d;
	cursor:pointer;
}
.proceed-button:hover{
	color: #8a98eb;


	
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- jquery -->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
		
		$(document).ready(function() {
			$("#presentation_report").submit(function(event) {  
			
				/* stop form from submitting normally */  
				event.preventDefault();   

				$.ajax({
					type:'POST',
					url:'validate_schedule.php',
					data:$("#presentation_report").serialize(),
					success:function(data) {
						$("#result_report").html(data);
						
						
					}  
				});  
			});
			$("#studentProject_report").submit(function(event) {  
			
				/* stop form from submitting normally */  
				event.preventDefault();   

				$.ajax({
					type:'POST',
					url:'validate_studentProject.php',
					data:$("#studentProject_report").serialize(),
					success:function(data) {
						$("#result_stdProj").html(data);
						
						
					}  
				});  
			});
		});
	</script>


<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
</head>
<body>
<!-- generate report for presentation schedule -->
<div id="backgrd" style="display:none;">
	<div class="content-center">
		<form action="#" method="post" id="presentation_report" target="_blank">
			<div style="float:right;padding-right:10px;cursor:pointer;" id="close"><img src="images/116.png" width="30px"/></div>
			<div class="clear"></div>
			<div class="style29">Select Semester and Day:</div>
			<br />
			<select name="semester" class="select-option">
				<option value="">-- Semester --</option>
				<?php
					include('connection/con_db.php');
					
					$query = mysql_query("SELECT DISTINCT year_of_semester FROM year_of_project ORDER BY id ASC");
					while($row = mysql_fetch_array($query)){
						echo "<option>".$row['year_of_semester']."</option>";
					}		
				?>
			</select>
			<br /><br />
			<select name="day" class="select-option">
				<option value="">-- Day --</option>
				<?php
					include('connection/con_db.php');
					
					$query = mysql_query("SELECT DISTINCT day FROM year_of_project ORDER BY id ASC");
					while($row = mysql_fetch_array($query)){
						echo "<option>".$row['day']."</option>";
					}		
				?>
			</select>
			<br/><br/>
			<div id="result_report">&nbsp;</div>
			<br/><br/>
			<input type="submit" class="proceed-button" value="Proceed"/>
		</form>
	</div>
</div>
<!-- generate report for student and project list -->
<div id="studentProjectList" style="display:none;">
	<div class="content-center">
		<form action="#" method="post" id="studentProject_report" target="_blank">
			<div style="float:right;padding-right:10px;cursor:pointer;" id="close2"><img src="images/116.png" width="30px"/></div>
			<div class="clear"></div>
			<div class="style29">Select Semester and Day:</div>
			<br />
			<select name="semester" class="select-option">
				<option value="">-- Semester --</option>
				<?php
					include('connection/con_db.php');
					
					$query = mysql_query("SELECT DISTINCT year_of_semester FROM year_of_project ORDER BY id ASC");
					while($row = mysql_fetch_array($query)){
						echo "<option>".$row['year_of_semester']."</option>";
					}		
				?>
			</select>
			<br/><br/>
			<div id="result_stdProj">&nbsp;</div>
			<br/><br/>
			<input type="submit" class="proceed-button" value="Proceed"/>
		</form>
	</div>
</div>
<div align="center"><br>
  <table width="1004" height="498" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
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
<table width="988" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978"><div align="center">
      <?php include("footer/menuPenyelaras.php"); ?>
    </div></td>
  </tr>
</table>
<br>
		
		<!-- content -->
		<div class="box" style="width: 90%;overflow: hidden;">
			<div class="heading"><h1>Reports</h1></div>
			<div class="content">
				<div id="report-container">
					
					<a id="report_listStudent"><div class="content-left"><img src="images/report_ico1.png" class="picture"/></div></a>
					<div class="content-right">
						<h1>List Of Students and Project Title</h1>
					</div>
				</div>
				<div id="report-container">
					<a  id="report_schedule"><div class="content-left"><img src="images/report_ico2.png" class="picture"/></div></a>
					<div class="content-right">
						<h1>Presentation Schedule</h1>
					</div>
				</div>
				<br />
			</div>
		</div>
		<script type="text/javascript">
			$('#report_listStudent').click(function(e) {
				$('#studentProjectList').slideUp(300).delay(300).fadeIn(400);
			});
			$('#close2').click(function(e) {
				$('#studentProjectList').hide();
			});
		</script>
		<script type="text/javascript">
			$('#report_schedule').click(function(e) {
				$('#backgrd').slideUp(300).delay(300).fadeIn(400);
			});
			$('#close').click(function(e) {
				$('#backgrd').hide();
			});
		</script>	
		   
		   

            <div align="center"></div></td>
        </tr>
        
  <td height="18" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
  </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="left"></div></body>
</html>

