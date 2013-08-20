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
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style45 {color: #0000FF; font-weight: bold; }
.style52 {color: #FFFFFF; font-size: small; font-weight: bold; }
.style56 {font-size: small}
.style58 {color: #FFFFFF; font-weight: bold; }
.style59 {color: #0000FF; font-weight: bold; font-size: small; }
.style61 {font-size: small; font-weight: bold; }
.style62 {color: #000000; font-size: small; }
.style63 {font-size: small; font-weight: bold; color: #000000; }
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1007" height="542" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="1001" height="538" bgcolor="#FFFFFF"><table width="1001" height="536" border="0" cellpadding="0" cellspacing="0">
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
          <td width="1001" height="313" bgcolor="#FFFFFF"><table width="1001" height="23" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><div align="center">
                  <?php include("footer/menu2.php"); ?>
                  <table width="870" height="327" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                    <tr>
                      <td width="864" height="323"><table width="216" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="13" class="style34">&nbsp;</td>
                          <td width="28" height="41" class="style34"><div align="center"><img src="menu/lists.png" width="40" height="41"></div></td>
                          <td width="175" class="style34">&nbsp;<span class="style35">.: Profile:.</span></td>
                        </tr>
                      </table>
                      <table width="200" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="190">&nbsp;</td>
                            </tr>
                          </table>
                        <?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="maklumatpenyelia";// Table name

					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$staffId=$_GET['staffId'];

						$sql="SELECT * FROM maklumatpenyelia WHERE staffId='$staffId'";
						$result=mysql_query($sql);
						
				while($rows=mysql_fetch_array($result)){
				?>
                          <div align="center">
                            <table width="841" border="0" cellpadding="0" cellspacing="0" bor="bor"">
                              <tr>
                                <td width="54" >&nbsp;</td>
                                <td width="731" bgcolor="#FFFFFF"><div align="center">
                                    <table width="753" border="2" bordercolor="#990000" bgcolor="#FFCCFF" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="747" height="230"><div align="center">
                                            <table width="95%" height="197" cellpadding="0" cellspacing="0" >
                                              <tr>
                                                <td >&nbsp;</td>
                                                <td height="15" >&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td >&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td width="4%" class="style61" >&nbsp;</td>
                                                <td width="15%" height="27" class="style61" ><span class="style26 style58">&nbsp;&nbsp;&nbsp;</span>Staff Id</td>
                                                <td width="3%" class="style61"><span class="style61">:</span></td>
                                                <td width="31%" ><span class="style56"><? echo $rows['staffId']; ?></span></td>
                                                <td width="3%">&nbsp;</td>
                                                <td width="14%" class="style35"><span class="style59">&nbsp;&nbsp;<span class="style63">Position</span></span></td>
                                                <td width="1%" class="style35"><div align="center" class="style56"><strong><span class="style26">:</span></strong></div></td>
                                                <td><span class="style56"><? echo $rows['jawatan']; ?></span></td>
                                              </tr>
                                              <tr>
                                                <td class="style61">&nbsp;</td>
                                                <td height="30" class="style61"><span class="style45 style26"><strong>&nbsp;&nbsp;&nbsp;</strong></span><strong>Name</strong><span class="style45 style26"><strong><br>
                                                                                                </strong></span></td>
                                                <td class="style61">:</td>
                                                <td ><span class="style56"><? echo $rows['namaPenyelia']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td class="style35"><span class="style61"><span class="style62">&nbsp;&nbsp; Email</span></span></td>
                                                <td class="style35"><div align="center" class="style63">:</div></td>
                                                <td><span class="style56"><? echo $rows['emel']; ?></span></td>
                                              </tr>
                                              <tr>
                                                <td class="style61">&nbsp;</td>
                                                <td height="26" class="style61"><span class="style45 style26"><strong>&nbsp;&nbsp;</strong></span><span class="style26 style58">&nbsp;</span>Gender</td>
                                                <td class="style61"><span class="style61">:</span></td>
                                                <td ><span class="style56"><? echo $rows['jantina']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td class="style35"><span class="style52">&nbsp;&nbsp;</span><span class="style61"> Room No</span></td>
                                                <td class="style35"><div align="center" class="style63">:</div></td>
                                                <td width="29%" class="style26"><span class="style56"><? echo $rows['noBilik']; ?></span></td>
                                              </tr>
                                              <tr>
                                                <td class="style61">&nbsp;</td>
                                                <td height="33" class="style61"><span class="style26 style58">&nbsp;&nbsp;</span>&nbsp;Phone No</td>
                                                <td class="style61">:</td>
                                                <td class="style26" ><span class="style56"><? echo $rows['notelefon']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td class="style35">&nbsp;</td>
                                                <td class="style35">&nbsp;</td>
                                                <td width="29%" class="style26">&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td class="style61">&nbsp;</td>
                                                <td height="27" class="style61"><span class="style62"><strong>&nbsp;&nbsp;&nbsp;Expertise</strong></span>
                                                  <table width="95" border="0" cellpadding="0" cellspacing="0">
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
                                                <td class="style61">:
                                                  <table width="33" border="0" cellpadding="0" cellspacing="0">
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
                                                <td ><span class="style56"><? echo $rows['kepakaran']; ?></span>
                                                  <table width="47" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="47">&nbsp;</td>
                                                    </tr>
                                                  </table></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                            </table>
                                          <table width="460" height="26" border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td><div align="center">
                                                    <table width="150" border="0" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                    </table>
                                                    <br />
                                                    <?php
										}
									  ?>
                                                </div></td>
                                              </tr>
                                            </table>
                                        </div></td>
                                      </tr>
                                    </table>
                                </div></td>
                                <td width="56">&nbsp;</td>
                              </tr>
                            </table>
                            <?

					// close connection
					mysql_close();
					
					?>
                            <br>
                        </div></td>
                    </tr>
                  </table>
              </div></td>
            </tr>
          </table>
          <div align="center"></div>
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

