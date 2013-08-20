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
.style48 {
	font-size: 16px;
	font-weight: bold;
	color: #FF0000;
}
.style52 {font-size: small; color: #000000; }
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>

<script language="javascript">
function validateForm()
{

	var a=document.forms["form1"]["uploadfail"].value
	if (a==null || a=="")
	{
	  alert("Sila buat pilihan fail");
	  return false;
	}
}
</script>



<body>
<div align="center"><br />
  <table width="1004" height="487" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="483" bgcolor="#FFFFFF"><table width="998" height="511" border="0" cellpadding="0" cellspacing="0">
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
            <td width="998" height="252" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menu.php"); ?>
              <br />
              </div>
              <table width="998" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="160" height="270">&nbsp;</td>
                  <td width="656"><table width="637" height="217" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                    <tr>
                      <td width="631" height="213"><table width="216" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="14" class="style34">&nbsp;</td>
                          <td width="28" height="18" class="style34"><div align="center"><img src="menu/uploads.jpg" width="34" height="32" /></div></td>
                          <td width="174" class="style34">&nbsp;<span class="style35">.: Muat Naik :.</span></td>
                        </tr>
                      </table>
                      <table width="200" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="190">&nbsp;</td>
                          </tr>
                        </table>
                        <div align="center"></div>
                        <div align="center">
                          <table width="579" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
                            <tr>
                              <td width="573" height="114"  bgcolor="#FFCCFF"><table width="394" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
<tr>
<form action="uploadSuccessfull.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return validateForm()">
<td width="438">
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
  <td  bgcolor="#FFCCFF">&nbsp;</td>
</tr>
<tr>
  <td  bgcolor="#FFCCFF"><span class="style52 style26"><strong>&nbsp;Muat Naik Fail (Had Saiz Fail 100 MB)</strong></span></td>
</tr>
<tr>
<td  bgcolor="#FFCCFF">&nbsp;</td>
</tr>
<tr>
<td align="center"  bgcolor="#FFCCFF"><span class="style52">Pilih Fail :</span> 
  <input name="uploadfail" type="file" id="uploadfail" size="35" /></td>
</tr>
<tr>
<td  height="57" align="center" bgcolor="#FFCCFF"><input type="submit" name="Submit" value="Muat Naik" /></td>
</tr>
</table></td>
</form>
</tr>
</table>
                                </td>
                            </tr>
                          </table><br />
                          <table width="344" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="67"><div align="center"><img src="menu/write.jpg" width="63" height="63" /></div></td>
                              <td width="261"><div align="center"><span class="style48 style26">Fail telah berjaya di Muat turun !</span></div></td>
                            </tr>
                          </table>
                          <br />
                        </div></td>
                    </tr>
                  </table></td>
                  <td width="160">&nbsp;</td>
                </tr>
              </table>
            <div align="center"></div></td>
          </tr>
          <tr>
            <td height="18" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
