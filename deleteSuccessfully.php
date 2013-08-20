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
.style61 {
	color: #FF0000;
	font-size: 18px;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="531" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="610" border="0" cellpadding="0" cellspacing="0">
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
            <?php include("footer/menupenyelia.php"); ?><table width="694" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="688" height="74"><table width="216" border="0" cellpadding="0" cellspacing="0">
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

if($rows=mysql_fetch_array($result)){
}
?>
                    <table width="688" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="688"><div align="center">
                          <table width="538" border="2"  bordercolor="#990000" bgcolor="#CC9999" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="561" height="51"><div align="center">
                                <table width="369" height="29" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="69"><div align="center"><img src="menu/write.png" width="61" height="59"></div></td>
                                    <td width="300"><div align="center" class="style61">REKOD BERJAYA DIHAPUS !</div></td>
                                  </tr>
                                </table>
                              </div></td>
                            </tr>
                          </table>
                        </div></td>
                      </tr>
                    </table>
                  </div>
                  <table width="113" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190" height="20">  <p>
                     
					<input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>">
					<?php
					  

		// close connection
		mysql_close();
					
		?>
                      </p>                        </td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  <div align="center"></div></td>
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