<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 
session_start();
if(!$_SESSION['matrik']){header("location:SilaloginPelajar.php");}
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
.style26 {color: #990000}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style43 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 16px;
}
.style44 {font-size: 13px}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div align="center"><br>
  <table width="1004" height="565" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="561" bgcolor="#FFFFFF"><table width="998" height="559" border="0" cellpadding="0" cellspacing="0">
          <tr>
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
          </tr>
        <tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/matrik.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF">
			<div align="center">
				<?php include("footer/menu2.php"); ?><br />
			
				<!-- content -->
				<div id="content-wrapper" style="width: 70%;float: left;margin-left:20px;">
					<div class="section-title" style="text-align:left;margin-left: 20px;">Announcement</div>
					<?php
						include('connection/con_db.php');
						// Fetch data for 5 rows only
						$query = mysql_query("SELECT * FROM buletin ORDER BY id DESC LIMIT 0,5");
						// Display results
						while($result = mysql_fetch_array($query)){
					
					?>
					
					<div class="news-header">
						<div class="news"><p><?php echo $result['tajuk']; ?></p>
							<span><?php echo date('d / m / Y', strtotime($result['tarikh'])); ?></span>
						</div>
					</div>
					<div class="separator"></div>
					<div class="desc"><?php echo $result['buletin']; ?></div>
					
					<?php } ?>
				</div>
				<div class="box" style="width: 25%;float: right;margin-right:20px;margin-top:29px;">
					<div class="heading"><h1>Useful Links</h1></div>
					<div class="content">
						<div class="right_menu">
							<ul>
								<li><a href="http://smp.upm.edu.my" target="_blank">SMP-UPM</a></li>
								<li><a href="http://zonict.upm.edu.my/aduan/zon2" target="_blank">Report System ICT</a></li>
								<li><a href="http://lms.upm.edu.my" target="_blank">Putra LMS</a></li>
								<li><a href="http://www.facebook.com/fcsitupm/" target="_blank">Facebook CSiT</a></li>
								<li><a href="http://www.putra.upm.edu.my/" target="_blank">uGroup</a></li>
							</ul>
						</div>
						
					</div>
				</div><!--
				<div class="box" style="width:25%;float:right;margin-right:20px;margin-top:0px;">
					<div class="heading"><h1>Download</h1></div>
					<div class="content">
						
					</div>
				</div>
				<div class="counter" style="width:25%;float:right;margin-right:20px;margin-top:0px;">
				</div>
				<div class="clear"></div>-->
			</div>
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

