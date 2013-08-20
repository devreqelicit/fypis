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
.style26 {
	color: #000000
}
.style31 {color: #990000}
.style34 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: small;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="464" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="460" bgcolor="#FFFFFF"><table width="998" height="458" border="0" cellpadding="0" cellspacing="0">
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
            <div align="right"><a href="logout.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><div align="center">
            <table width="972" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="114"><span class="style31">
                  <?php include("footer/matrik.php"); ?>
                </span></td>
                <td width="858"><div align="center"></div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td width="1282" height="236" bgcolor="#FFFFFF"><div align="center">
            <table width="985" border="0">
              <tr>
                <td width="979"></td>
              </tr>
            </table>
            <table width="988" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="978"><div align="center"><?php include("footer/menu.php"); ?></div></td>
              </tr>
            </table><br>
            <table width="676" height="24" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="115">&nbsp;</td>
                <td width="509"><form name="form1" method="post" action="detailsSenaraiPensyarahPelajar.php">
                  <table width="388" height="132" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" bgcolor="#CC6666">
                    <tr>
                      <td width="432" height="128"><table width="368" height="25" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="30">&nbsp;</td>
                          <td width="322"><span class="style34">Carian Pensyarah</span></td>
                        </tr>
                      </table>
                        <table width="353" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="42">&nbsp;</td>
                              <td width="262">&nbsp;</td>
                              <td width="49">&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="31">&nbsp;</td>
                              <td><input name="carianPensyarah" type="text" id="carianPensyarah" size="35" maxlength="50"></td>
                              <td><input type="submit" value="Cari"></td>
                            </tr>
                            
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                        </table></td>
                    </tr>
                  </table>
                </form>
                </td>
                <td width="52">&nbsp;</td>
              </tr>
            </table><br>
            <BR>
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

