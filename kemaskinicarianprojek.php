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
.style45 {font-size: 13px; color: #0000FF; }
.style53 {color: #0000FF; font-weight: bold; }
.style58 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18;
}
.style60 {font-size: 13px; color: #000000; }
.style61 {
	font-size: 18px;
	color: #000000;
}
.style41 {	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="531" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="529" border="0" cellpadding="0" cellspacing="0">
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
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/staffIdPenyelaras.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menupenyelia.php"); ?><table width="662" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="687" height="74"><table width="216" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="style34">&nbsp;</td>
                    <td height="15" class="style34">&nbsp;</td>
                    <td class="style34">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14" class="style34">&nbsp;</td>
                    <td width="24" height="18" class="style34"><div align="center"><img src="icons/pelajar_detail.png" width="24" height="23" /></div></td>
                    <td width="178" class="style34">&nbsp;<span class="style35">.: Penerangan Projek :.</span></td>
                  </tr>
                </table><br>
                  <div align="center">
                    <?php

$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="listprojectpenerangan";
$tbl_name="listfinalyearproject";


// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");

// get value of id that sent from address bar

$id=$_GET['id'];

// Retrieve data from database
$sql="SELECT * FROM listprojectpenerangan a,  listfinalyearproject b WHERE a.idpenerangan=b.id and a.idpenerangan='$id'";

$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
//$sql="SELECT * FROM listfinalyearproject WHERE idpenerangan='$id'";
//$result=mysql_query($sql);

//if($rows=mysql_fetch_array($result)){


//}

?>
                    <table width="660" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="660"><div align="center">
                          <form name="form1" method="post" action="updateKemaskiniCarianPenyelaras.php">
                            <table width="621" border="2"  bordercolor="#990000" bgcolor="#CC9999" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="658"><div align="center"><br>
                                        <br>
                                        <table width="548" border="0" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td class="style45">&nbsp;</td>
                                            <td height="31" class="style45"><span class="style53">Nama</span></td>
                                            <td class="style45"><div align="center" class="style53">:</div></td>
                                            <td><input name="nama" type="text" id="nama" value="<? echo $rows['nama']; ?>"  size="40" maxlength="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="style45">&nbsp;</td>
                                            <td height="29" class="style45"><span class="style53">Matrik</span></td>
                                            <td class="style45"><div align="center" class="style53">:</div></td>
                                            <td><input name="matrik" type="text" id="matrik" value="<? echo $rows['matrik']; ?>"  size="6" maxlength="6"></td>
                                          </tr>
                                          <tr>
                                            <td class="style45">&nbsp;</td>
                                            <td height="28" class="style45"><span class="style53">Pemeriksa</span></td>
                                            <td class="style45"><div align="center" class="style53">:</div></td>
                                            <td><input name="pemeriksa" type="text" id="pemeriksa" value="<? echo $rows['pemeriksa']; ?>"  size="30" maxlength="50"></td>
                                          </tr>
                                          <tr>
                                            <td class="style45">&nbsp;</td>
                                            <td height="27" class="style45"><span class="style53">Penyelia</span></td>
                                            <td class="style45"><div align="center" class="style53">:</div></td>
                                            <td><input name="penyelia" type="text" id="penyelia" value="<? echo $rows['penyelia']; ?>"  size="30" maxlength="50"></td>
                                          </tr>
                                          <tr>
                                            <td>&nbsp;</td>
                                            <td height="50"><span class="style53">Nama Sistem</span></td>
                                            <td><div align="center" class="style53">:</div>                                              </td>
                                            <td><textarea name="namaSistem" cols="45" rows="2" id="namaSistem"><? echo $rows['namaSistem']; ?></textarea></td>
                                          </tr>
                                          <tr>
                                            <td>&nbsp;</td>
                                            <td height="54"><span class="style53">Penerangan</span>
                                              <table width="92" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
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
                                            <td><div align="center" class="style53">:</div>
                                              <table width="35" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
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
                                            <td><textarea name="penerangan" cols="45" rows="4" id="penerangan" value="<? echo $rows['penerangan']; ?>"><? echo $rows['penerangan']; ?></textarea></td>
                                          </tr>
                                          <tr>
                                            <td width="23">&nbsp;</td>
                                            <td width="123" height="25">&nbsp;</td>
                                            <td width="35">&nbsp;</td>
                                            <td width="367"><input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>"></td>
                                          </tr>
                                        </table>
                                 
                                        <table width="330" border="0" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="320"><div align="center">
                                                <input type="submit" value="Simpan">
                                                
                                                <input type="submit" value="Padam">
                                            </div></td>
                                          </tr>
                                        </table>
                                  <br>
                                </div></td>
                              </tr>
                            </table>
                                </form>
                          </div></td>
                      </tr>

                    </table>
                  </div>
                  <table width="113" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190" height="20">  <p>
                     
					<?php
					  

		// close connection
		mysql_close();
					
		?>
                      </p>
                        </td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  </td>
              </tr>
            </table>
            
              
         
            <BR>
          </div>
            <div align="center"></div></td>
        </tr>
        
  <td height="75" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
  </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="left"></div></body>
</html>