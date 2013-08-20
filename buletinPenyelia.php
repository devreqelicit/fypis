<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
<?php 
session_start();
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}
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
.style48 {color: #000000; font-weight: bold; font-size: 14px; }
.style50 {font-size: 13px; color: #0000FF; font-weight: bold; }
.style54 {font-size: 13px; color: #000000; font-weight: bold; }
.style55 {color: #FFFFFF}
.style56 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="479" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="475" bgcolor="#FFFFFF"><table width="998" height="479" border="0" cellpadding="0" cellspacing="0">
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
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/staffIdPenyelia.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menupenyelia2.php"); ?><table width="796" height="215" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="790" height="211"><table width="216" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="13" class="style34">&nbsp;</td>
                    <td width="28" height="18" class="style34"><div align="center"><img src="menu/bulletinIcon.png" width="54" height="33" /></div></td>
                    <td width="175" class="style34">&nbsp;<span class="style35">.: Buletin :.</span></td>
                  </tr>
                </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190"><?php

$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="mybuletin";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");


// Get values from form
$nama=$_POST['buletin'];

//$sql="SELECT * FROM listfinalyearproject WHERE namaSistem LIKE '%$katakunci%' AND tahun LIKE '%$tahun%' AND semester LIKE '%$semester%'";
//$result=mysql_query($sql);

$sql="SELECT * FROM listfinalyearproject WHERE namaSistem LIKE '%$katakunci%' AND tahun LIKE '%$tahun%' AND semester LIKE '%$semester%' order by namaSistem ASC";
$result=mysql_query($sql);

?></td>
                    </tr>
                  </table>
                  <br>
                  <div align="center"></div>
                  <div align="center">
                    <table width="755" height="126" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="38">&nbsp;</td>
                        <td width="677"><div align="center">
                          <div align="center"><br>
                          </div>
                        </div></td>
                        <td width="40">&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
            </table>
            <?php

		// close connection
		mysql_close();
					
		?>
            <BR>
          </div>
            <div align="center"></div></td>
        </tr>
        
  <td height="25" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
  </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="left"></div></body>
</html>

