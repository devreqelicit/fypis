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
<script language="javascript">
function validateForm()
{

	var a=document.forms["form1"]["staffId"].value
	if (a==null || a=="")
	{
	  alert("Isikan ruangan Staff Id");
	  return false;
	}
	var b=document.forms["form1"]["katalaluan"].value
	if (a==null || a=="")
	{
	  alert("Isikan ruangan Katalaluan");
	  return false;
	}
	
	var d=document.forms["form1"]["emel"].value
		if (d==null || d=="")
		{
		  alert("Isikan ruangan emel");
		  return false;
		}

		var atpos=d.indexOf("@");
		var dotpos=d.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=d.length)
		  {
		  alert("Emel yang di masukkan Salah!");
		  return false;
		  }
	  
}
</script>

</head>
<body>
<div align="center"><br>
  <table width="1004" height="589" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="587" border="0" cellpadding="0" cellspacing="0">
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
          <td width="998" height="357" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menupenyelia.php"); ?><table width="686" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="680" height="74"><table width="273" border="0" cellpadding="0" cellspacing="0">
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
                    <table width="669" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="12">&nbsp;</td>
                        <td width="653"><div align="center">
                          <div align="center"><form id="form1" name="form1" method="post" onSubmit="return validateForm()" action="con_addMaklumatPenyeliaInsertPenyelaras.php">
<center>
<table width="622" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
  <tr>
    <td width="616" height="227" bgcolor="#CC9999"><div align="center" >
      <table width="78%" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td height="15">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="style80">&nbsp;</td>
          <td height="23" class="style80"><span class="style48">&nbsp;&nbsp;Staff Id</span></td>
          <td><span class="style48">:</span></td>
          <td><input name="staffId" type="text" id="staffId" size="10" maxlength="10"></td>
        </tr>
        <tr>
          <td width="5%" class="style40">&nbsp;</td>
          <td width="19%" height="29" class="style40"><span class="style80 style49"><strong>&nbsp;&nbsp;Katalaluan</strong></span></td>
          <td width="5%"><span class="style49"><strong>:</strong></span></td>
          <td width="71%"><input name="katalaluan" type="password" id="katalaluan" size="10" maxlength="10" />            </td>
        </tr>
        <tr>
          <td class="style40">&nbsp;</td>
          <td height="32" class="style40"><span class="style80 style49"><strong>&nbsp;&nbsp;<strong>Nama </strong></strong></span></td>
          <td><span class="style49"><strong>:</strong></span></td>
          <td><input name="namaPenyelia" type="text" id="namaPenyelia" size="40" maxlength="50"></td>
        </tr>
        <tr>
          <td class="style40">&nbsp;</td>
          <td height="29" class="style40"><span class="style80 style49"><strong>&nbsp;&nbsp;Emel</strong></span></td>
          <td><span class="style49"><strong>:</strong></span></td>
          <td><input name="emel" type="text" id="emel" size="40" maxlength="50" /></td>
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
            <input name="Submit" type="submit" value="Simpan" />
            <input type="reset" id="button" value="Padam">
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

