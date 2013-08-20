<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style42 {color: #990000}
.style49 {font-size: large}
.style52 {color: #FFFFFF}
.style55 {color: #0000FF}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>

<body>
<div align="center"><br />
  <table width="1003" height="563" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="997" height="504" bgcolor="#FFFFFF"><table width="998" height="561" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="153" bgcolor="#FFFFFF"><script type="text/javascript">
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
            <td height="17" bgcolor="#990000" class="style26"><span class="style42">
              <?php include("footer/matrik.php"); ?>
            </span></td>
          </tr>
          <tr>
            <td width="998" height="333" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menu.php"); ?>
                <table width="742" height="265" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                  <tr>
                    <td width="736" height="261"><table width="216" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="13" class="style34">&nbsp;</td>
                        <td width="28" height="18" class="style34"><div align="center"><img src="menu/bulletinIcon.png" width="54" height="33" /></div></td>
                        <td width="175" class="style34">&nbsp;<span class="style35">.: Buletin :.</span></td>
                      </tr>
                    </table>
            <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                            <td width="190">&nbsp;</td>
                        </tr>
                      </table>
                     
              <div align="center">
                <table width="736" border="0" cellpadding="0" cellspacing="0" bor="bor"">
                  <tr>
                    <td width="51" >&nbsp;</td>
                    <td width="688" bgcolor="#FFFFFF"><div align="center">
                      <table width="652" border="2" bordercolor="#990000" bgcolor="#FFCCFF" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="646" height="144"><div align="center">
                            <?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root123";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="buletin";// Table name
			
						
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						//$id=$_GET['id'];
						$sql="SELECT * FROM $tbl_name";
						$result=mysql_query($sql);
			
			while($rows=mysql_fetch_array($result)){
?>
                            <table width="529" height="27" border="1">
                              <tr>
                                <td width="519"><div align="center"><? echo $rows['buletin'] ?></div></td>
                              </tr>
                            </table><br>
                            <form id="form1" name="form1" method="post" action="">
                              <table width="456" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="456"><div align="center">
                                    <textarea name="buletin" id="buletin" cols="45" rows="3"></textarea>
                                  </div></td>
                                </tr>
                              </table>
                              <input type="submit" name="button" id="button" value="Hantar" />
                              <br>
                                        </form>
                           
                            <br>
                            <table width="647" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="647" height="21"><?php
								   }
								   ?></td>
                                </tr>
                              </table>
                              <br>
                              <?php

					// close connection
					mysql_close();
					
					?>
                              <br>
                            </div></td>
                        </tr>
                      </table>
                    </div></td>
                    <td width="94">&nbsp;</td>
                  </tr>
                </table>
              </div>                    </td>
                  </tr>
                </table>
                <br />
              </div>
                <div align="center"></div></td>
          </tr>
          <tr>
            <td height="22" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>