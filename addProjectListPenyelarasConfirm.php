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
.style47 {color: #0000FF; font-weight: bold; }
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
            <?php include("footer/menupenyelia.php"); ?><table width="783" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="777" height="74"><table width="246" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="style34">&nbsp;</td>
                    <td height="15" class="style34">&nbsp;</td>
                    <td class="style34">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14" class="style34">&nbsp;</td>
                    <td width="24" height="18" class="style34"><div align="center"><img src="icons/pelajar_detail.png" width="24" height="23" /></div></td>
                    <td width="199" class="style34">&nbsp;<span class="style35">.: Tambah Maklumat Projek :.</span></td>
                  </tr>
                </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  <div align="center">
                    <table width="730" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="33">&nbsp;</td>
                        <td width="701"><div align="center">
                        <?php
                        $nama=$_POST['nama'];
						$matrik=$_POST['matrik'];
						$pemeriksa=$_POST['pemeriksa'];
						$namaSistem=$_POST['namaSistem'];
						$penyelia=$_POST['penyelia'];
						$semester=$_POST['semester'];
						$tahun=$_POST['tahun'];
						$penerangan=$_POST['penerangan'];
?>
                        
                        
                        
                          <div align="center"><form id="form1" name="form1" method="post" action="con_addProjectListPenyelaras.php">
<center>
  <table width="626" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
    <tr>
      <td width="620" height="227" bgcolor="#CC9999"><div align="center" >
        <table width="78%" cellpadding="0" cellspacing="0">
          <tr>
            <td height="15">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td height="28" class="style80"><strong>&nbsp;<span class="style40">&nbsp;Nama</span></strong></td>
            <td><span class="style40"><strong>:</strong></span></td>
            <td><? echo $nama ?>
              <input type="hidden" name="nama" id="nama" value="<? echo $nama ?>"/></td>
            </tr>
          <tr>
            <td width="17%" height="32" class="style40"><span class="style80"><strong>&nbsp;&nbsp;Matrik</strong></span></td>
            <td width="4%"><span class="style40"><strong>:</strong></span></td>
            <td width="79%"><? echo $matrik ?>
              <input type="hidden" name="matrik" id="matrik" value="<? echo $matrik ?>"/></td>
            </tr>
          <tr>
            <td height="32" class="style40"><span class="style80"><strong>&nbsp;&nbsp;Pemeriksa</strong></span></td>
            <td><span class="style40"><strong>:</strong></span></td>
            <td><? echo $pemeriksa ?>
              <input type="hidden" name="pemeriksa" id="pemeriksa" value="<? echo $pemeriksa ?>"/></td>
            </tr>
          <tr>
            <td height="29" class="style40"><span class="style80"><strong>&nbsp;&nbsp;Nama Penyelia</strong></span></td>
            <td><span class="style40"><strong>:</strong></span></td>
            <td><? echo $penyelia ?>
              <input type="hidden" name="penyelia" id="penyelia" value="<? echo $penyelia ?>"/></td>
            </tr>
          <tr>
            <td height="30" class="style40"><span class="style80"><strong>&nbsp;&nbsp;Tajuk Projek </strong></span></td>
            <td><span class="style40"><strong>:</strong></span></td>
            <td><? echo $namaSistem ?>
              <input type="hidden" name="namaSistem" id="namaSistem" value="<? echo $namaSistem ?>"/></td>
            </tr>
          <tr>
            <td height="30"><span class="style47">&nbsp;&nbsp;Semester</span></td>
            <td><span class="style40"><strong>:</strong></span></td>
            <td><? echo $semester ?>
              <input type="hidden" name="semester" id="semester" value="<? echo $semester ?>"/></td>
            </tr>
          <tr>
            <td height="28"><span class="style47">&nbsp;&nbsp;Tahun</span></td>
            <td><span class="style40"><strong>:</strong></span></td>
            <td><? echo $tahun ?>
              <input type="hidden" name="tahun" id="tahun" value="<? echo $tahun ?>"/></td>
          </tr>
          <tr>
            <td height="71"><span class="style47">&nbsp;&nbsp;<span class="style40"><strong>Penerangan</strong></span></span>
              <table width="114" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            <td><span class="style40"><strong>:
              </strong> </span>              <table width="25" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="style40">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style40">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style40">&nbsp;</td>
                </tr>
              </table></td>
            <td><? echo $penerangan ?>
              <input type="hidden" name="penerangan" id="penerangan" value="<? echo $penerangan ?>"/></td>
            </tr>
          <tr>
            <td height="19"><span class="style40"><strong>&nbsp; &nbsp;</strong></span></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
        </table>
        <table width="616" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="616"><div align="center">
                <input type="submit" value="Setuju" />
              <a href="addProjectListPenyelaras.php">  <input type="button"  value="Batal"></a>
            </div></td>
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

