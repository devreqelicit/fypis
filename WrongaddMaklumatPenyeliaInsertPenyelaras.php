<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 
session_start();
if(!$_SESSION['id']){header("location:SilaloginAdmin.php");}
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
.style40 {color: #0000FF}
.style47 {color: #0000FF; font-weight: bold; }
.style43 {	color: #FFFFFF;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="526" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="524" border="0" cellpadding="0" cellspacing="0">
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
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/IdAdmin.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="303" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menuAdmin.php"); ?>
            <table width="783" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="777" height="74"><table width="328" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="style34">&nbsp;</td>
                      <td height="15" class="style34">&nbsp;</td>
                      <td class="style34">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="10" class="style34">&nbsp;</td>
                      <td width="73" height="18" class="style34"><div align="center"><img src="menu/add.png" width="44" height="33"></div></td>
                      <td width="245" class="style34">&nbsp;<span class="style35">.: Tambah Maklumat Penyelia :.</span></td>
                    </tr>
                  </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  <div align="center">
                    <table width="777" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="33">&nbsp;</td>
                        <td width="701"><div align="center">
              
                        
                        
                          <div align="center"><form id="form1" name="form1" method="post" action="con_addProjectListPenyelaras.php">
<center>
  <table width="653" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
    <tr>
      <td width="668" height="173" bgcolor="#CC9999"><div align="center" >
        <table width="281" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FF0000">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><div align="center"><img src="menu/error.gif" width="32" height="32"></div></td>
            <td bgcolor="#FF0000">&nbsp;&nbsp;<span class="style43">MAKLUMAT PENYELIA TELAH DIREKODKAN !!! </span></td>
          </tr>
          <tr>
            <td width="89" bgcolor="#FFFFFF"><div align="center"></div></td>
            <td width="192" bgcolor="#FF0000">&nbsp;</td>
          </tr>
        </table>
        <br>
      </div></td>
    </tr>
  </table>
  </center>
  
  
</form><br>
                          </div>
                        </div></td>
                        <td width="43">&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
            </table>
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


