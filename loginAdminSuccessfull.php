<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::. - ADMIN</title>

<?php 
session_start();
if(!$_SESSION['id']){header("location:SilaloginAdmin.php");}
?>

<style type="text/css">
<!--
.style4 {
	color: #9EC763;
	font-weight: bold;
	font-size: small;
}
.style16 {
	font-size: small;
	color: #000000;
	font-weight: bold;
}
.style18 {
	font-size: small;
	color: #333333;
	font-weight: bold;
}
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
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style23 {
	color: #FFFFFF;
	font-weight: bold;
}
.style24 {color: #FFFFFF}
.style26 {
	color: #FF0000;
	font-style: italic;
	font-weight: bold;
}
.style29 {
	color: #FF0000;
	font-weight: bold;
}
.style30 {font-size: small; color: #0000FF; font-weight: bold; }
.style31 {font-size: 13px}
.style32 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<div align="center"><br>
  <table width="1005" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="999" height="505" bgcolor="#FFFFFF"><table width="999" height="503" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="84" bgcolor="#FFFFFF"><script type="text/javascript">
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
            <td width="999" height="27" bgcolor="#FFFFFF"><div align="right">
              
                <div align="left">
                  <table width="1001" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="986" height="42"><div align="right"><a href="logoutAdmin.php"><img src="icons/logout.png" width="30" height="30" /></a></div></td>
                    </tr>
                  </table>
                </div>
            </div></td>
          </tr>
          <tr>
            <td height="21" bgcolor="#990000"><div align="left">
              <?php include("footer/IdAdmin.php"); ?>
            </div></td>
          </tr>
          <tr>
            <td height="261" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menuAdmin.php"); ?>
            </div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
          </tr>
          
      </table></td>
    </tr>
  </table>
  <br>
</div>
</body>
</html>
