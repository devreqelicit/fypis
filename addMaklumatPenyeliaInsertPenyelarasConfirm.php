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
.style26 {color: #990000}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style40 {color: #0000FF}
.style48 {
	color: #000000;
	font-weight: bold;
}
.style49 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="602" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="600" border="0" cellpadding="0" cellspacing="0">
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
            <div align="right"><a href="logoutPenyelia.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/staffIdPenyelaras.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menupenyelia.php"); ?><table width="743" height="372" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="737" height="368"><table width="273" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="style34">&nbsp;</td>
                    <td height="15" class="style34">&nbsp;</td>
                    <td class="style34">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="13" class="style34">&nbsp;</td>
                    <td width="41" height="18" class="style34"><div align="center"><img src="menu/supervisor.jpg" width="41" height="34"></div></td>
                    <td width="219" class="style34">&nbsp;<span class="style35">.: Tambah Maklumat Penyelia :.</span></td>
                  </tr>
                </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  <div align="center">
                    <table width="689" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="25">&nbsp;</td>
                        <td width="658"><div align="center">
                        <?php
                        $namaPenyelia=$_POST['namaPenyelia'];
						$staffId=$_POST['staffId'];
						$katalaluan=$_POST['katalaluan'];
						$emel=$_POST['emel'];
						?>
                          <div align="center"><form id="form1" name="form1" method="post" action="con_addMaklumatPenyeliaInsertPenyelaras.php">
<center>
  <table width="621" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
    <tr>
      <td width="615" height="227" bgcolor="#CC9999"><div align="center" >
          <table width="78%" cellpadding="0" cellspacing="0">
            <tr>
              <td>&nbsp;</td>
              <td height="15">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="style80">&nbsp;</td>
              <td height="25" class="style80"><span class="style48">&nbsp;&nbsp;Staff Id</span></td>
              <td><span class="style48">:</span></td>
              <td><? echo $staffId ?>
                  <input type="hidden" name="staffId" id="staffId" value="<? echo $staffId ?>"/></td>
            </tr>
            <tr>
              <td width="5%" class="style40">&nbsp;</td>
              <td width="23%" height="32" class="style40"><span class="style80 style49"><strong>&nbsp;&nbsp;Katalaluan</strong></span></td>
              <td width="3%"><span class="style49"><strong>:</strong></span></td>
              <td width="69%"><? echo $katalaluan ?>
                <input name="katalaluan" type="hidden" id="katalaluan" value="<? echo $katalaluan ?>"/></td>
            </tr>
            <tr>
              <td class="style40">&nbsp;</td>
              <td height="32" class="style40"><span class="style80 style49"><strong>&nbsp;&nbsp;<strong>Nama</strong></strong></span></td>
              <td><span class="style49"><strong>:</strong></span></td>
              <td><? echo $namaPenyelia ?>
                <input type="hidden" name="namaPenyelia" id="namaPenyelia" value="<? echo $namaPenyelia ?>"/></td>
            </tr>
            <tr>
              <td class="style40">&nbsp;</td>
              <td height="29" class="style40"><span class="style80 style49"><strong>&nbsp;&nbsp;Emel</strong></span></td>
              <td><span class="style49"><strong>:</strong></span></td>
              <td><? echo $emel ?>
                  <input type="hidden" name="emel" id="emel" value="<? echo $emel ?>"/></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="19"><span class="style40"><strong>&nbsp; &nbsp;</strong></span></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
        <table width="616" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="616"><div align="center">
                  <input type="submit" value="Setuju" />
                  <a href="addMaklumatPenyeliaInsertPenyelaras.php">
                    <input type="button" id="button" value="Batal">
                  </a> </div></td>
            </tr>
          </table>
        <br>
      </div></td>
    </tr>
  </table>
  <br>
                          </center>
  
  
</form>
                          </div>
                        </div></td>
                        <td width="10">&nbsp;</td>
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

