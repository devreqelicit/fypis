<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
<?php 
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
	color: #FFFFFF;
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
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- jquery -->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
</head>
<body>
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
				<div class="heading">
					<h1>Home Page</h1>
				</div>
				<div class="content">
					<div class="overview">
						<div class="dashboard-heading">Summary</div>
						<div class="dashboard-content">
							<table>
								<tbody>
									<tr>
										<td>Registered Students:</td>
										<td>40</td>
									</tr>
									<tr>
										<td>Total Supervisors:</td>
										<td>10</td>
									</tr>
									<tr>
										<td>Total students for current semester:</td>
										<td>30</td>
									</tr>
									<tr>
										<td>Total projects:</td>
										<td>20</td>
									</tr>
									<tr>
									<td>Visitor Counter:</td>
									<td>
										<a>
											<img src="http://hitwebcounter.com/counter/counter.php?page=4810723&style=0008&nbdigits=6&type=ip&initCount=0" title="" Alt=""   border="0" >
										</a>
									</td>
								</tr>
								<tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="upm-logo"></div>
					<div class="clear"></div>
					<div class="anjung-penyelaras">
						<div class="dashboard-heading">Coordinator Webpage</div>
						<div class="dashboard-content">
							<table>
								<tr>
									<td><div class="style1">Sistem Maklumat Projek Pelajar Tahun Akhir telah dibangunkan bagi memudahkan penggunanya. Sistem ini digunakan di Fakulti Sains Komputer Dan Teknologi Maklumat (FSKTM). Sistem Maklumat Projek Pelajar Tahun Akhir ini akan dilarikan di persekitaran internet. Memandangkan Jabatan Sistem Maklumat, Fakulti Sains Komputer, UPM masih menggunakan kaedah secara manual dalam pengurusan projek pelajar tahun akhir, maka Sistem Maklumat Projek Pelajar Tahun Akhir yang telah dibangunkan ini bertujuan bagi memudahkan pengurusan pendaftaran projek yang berlaku antara pelajar, penyelia dan penyelaras projek sepanjang perlaksanaan projek tahun akhir</div></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
     
		   
		   
		   
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

