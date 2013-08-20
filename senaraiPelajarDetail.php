<?php

####################################
#	Modified by: Hilmi Azli 	   #
#	Date: Febuary 2013			   #	
#	Email: hilmiazli@gmail.com	   #	
####################################

session_start();
// DB Connection


// Check login
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}

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
  <table width="1004" height="498" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="494" bgcolor="#FFFFFF"><table width="998" height="492" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="151" bgcolor="#FFFFFF"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','998','height','151','src','banner/banner','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','banner/banner' ); //end AC code
      </script>
              <noscript>
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="998" height="151">
                <param name="movie" value="banner/banner.swf" />
                <param name="quality" value="high" />
                <embed src="banner/banner.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="998" height="151"></embed>
              </object>
            </noscript></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#FFFFFF"><div align="right">
            <div align="right"><a href="logoutPenyelaras.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
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
      <?php include("footer/menupenyelia2.php"); ?>
    </div></td>
  </tr>
</table>

<!-- content -->

	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/pengguna.png" style="margin-right: 10px;"/>Maklumat Pelajar</div>
		<div id="content">
		
			<?php
				
				include('connection/con_db.php');
				
				if(isset($_GET['id'])){
				
					$noMatrik = isset($_GET['id']) ? $_GET['id'] : "";
					
					$result = mysql_query("SELECT * FROM maklumatpelajar WHERE matrik = '".$noMatrik."'")or die(mysql_error());
					$row = mysql_fetch_assoc($result);
					
					?>
					
					<div class="dashboard-heading">Profil</div>
					<div class="dashboard-content">
						<div class="details">
							<table>
								<tr>
									<td>No Matrik</td>
									<td class="dot">:</td>
									<td><?php echo $row['matrik']; ?></td>
								</tr>
								<tr>
									<td>Nama Pelajar</td>
									<td class="dot">:</td>
									<td><?php echo $row['nama']; ?></td>
								</tr>
								<tr>
									<td>Alamat Semester</td>
									<td class="dot">:</td>
									<td><?php echo $row['alamatSemester1']; ?></td>
								</tr>
								<tr>
									<td>No Telefon</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Jantina</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Agama</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
							</table>
						</div>
					</div>
					<br />
					<div class="dashboard-heading">Maklumat Sistem</div>
					<div class="dashboard-content">
						<div class="details">
							<table>
								<tr>
									<td>No Matrik</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Nama Pelajar</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Alamat Semester</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>No Telefon</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Jantina</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Agama</td>
									<td class="dot">:</td>
									<td>&nbsp;</td>
								</tr>
							</table>
						</div>
					</div>
					
					<?php
				
				} else {
					//echo "<script>location.href='senaraiPelajar.php'</script>";
				}
				
			
			?>
		
		</div>	
	</div>


<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>