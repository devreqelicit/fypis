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
.style48 {color: #000000; font-weight: bold; font-size: 14px; }
.style50 {
	font-size: 13px;
	color: #0000FF;
	font-weight: bold;
	font-style: italic;
}
.style54 {font-size: 13px; color: #000000; font-weight: bold; }
.style56 {
	color: #0000FF;
	font-weight: bold;
	font-style: italic;
}
.style57 {color: #000000}
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
            <div align="right"><a href="logoutPenyelaras.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/staffIdPenyelaras.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menupenyelia.php"); ?><table width="900" height="215" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="922" height="211"><table width="216" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="13" class="style34">&nbsp;</td>
                    <td width="28" height="18" class="style34"><div align="center"><img src="menu/bulletinIcon.png" width="54" height="33" /></div></td>
                    <td width="175" class="style34">&nbsp;<span class="style35">.: Buletin :.</span></td>
                  </tr>
                </table>
                <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190">
					  <?php

$host = "localhost";
$username = "root"; 	
$password = "root";
$db_name = "smppta";
$tbl_name="mybuletin";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");



// get value of id that sent from address bar
//$id=$_GET['id'];


$result=mysql_query($sql);

?></td>
                    </tr>
                  </table><br>
                  <div align="center"></div>
                  <div align="center">
                    <table width="843" height="126" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28">&nbsp;</td>
                        <td width="823"><div align="center">
                          <div align="center">
                            <table width="822" bgcolor="#CC9999" height="46" border="0"  cellpadding="0" cellspacing="0">
                              
                           
                              <?php
							  	$bil=1;
								while($rows=mysql_fetch_array($result)){
								?>
                              
                              <tr>
                                <td width="42"><div align="center" class="style48">
                                  &nbsp;<? echo $bil ?>.</div></td>
                                <td width="309" height="46"><div align="left" class="style54">
                                  <div align="left"><? echo $rows['namaSistem']; ?></div>
                                </div></td>
                                <td width="95"><div align="left" class="style54">
                                  <div align="center"><? echo $rows['matrik']; ?></div>
                                </div></td>
                                <td width="97"><div align="left" class="style54">
                                  <div align="center"><? echo $rows['semester']; ?></div>
                                </div></td>
                                <td width="96"><div align="left" class="style54">
                                  <div align="center"><? echo $rows['tahun']; ?></div>
                                </div></td>
                                <td width="83"><div align="center" class="style56"><a href="deleteDetailsListProjectPenyelaras.php?id=<? echo $rows['id']; ?>">Padam</a></div></td>
                                </tr>
                           
                              <?php
							  $bil++;
							}
							?> </table>
                          
                            
                            <br>
                          </div>
                        </div></td>
                        <td width="10">&nbsp;</td>
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

