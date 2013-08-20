<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
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
.style40 {color: #0000FF}
.style42 {color: #990000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>


<script language="javascript">
function validateForm()
{
var x=document.forms["form1"]["katalaluan"].value
var y=document.forms["form1"]["katalaluan2"].value
var z=document.forms["form1"]["katalaluan3"].value
if (x==null || x=="")
  {
  alert("Isikan Katalaluan asal!");
  return false;
  }
if (y==null || y=="")
  {
  alert("Isi Katalaluan baru!");
  return false;
  }
if (y!=z)
  {
  alert("Password doesn't match. Please re-enter your password!");
  return false;
  }
}
</script>
</head>


<body>
<div align="center"><br>
  <table width="1007" height="542" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="1001" height="538" bgcolor="#FFFFFF"><table width="1001" height="536" border="0" cellpadding="0" cellspacing="0">
        <tr>
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
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
                <table width="546" height="253" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                  <tr>
                    <td width="540" height="249"><table width="216" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="13" class="style34">&nbsp;</td>
                        <td width="28" height="18" class="style34"><div align="center"><img src="menu/key.jpg" width="46" height="38" /></div></td>
                        <td width="175" class="style34">&nbsp;<span class="style35">.: Ubah Katalaluan :.</span></td>
                      </tr>
                    </table>
            <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                            <td width="190">&nbsp;</td>
                          </tr>
                        </table>
                     
              <div align="center"></div>
              <div align="center">
                <table width="527" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="12">&nbsp;</td>
                    <td width="503"><div align="center">
                      <table width="468" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" bgcolor="#FFCCFF">
                        <tr>
                          <td width="462" bgcolor="#FFCCFF"><div align="center"><form name="form1" method="post" action="ubahKatalaluandb.php" onSubmit="return validateForm()">
  <table width="438" height="120" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
      <td height="15">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="28">&nbsp;</td>
      <td width="162" height="32"><strong>Katalaluan Asal</strong></td>
      <td width="28"><div align="center"><strong>:</strong></div></td>
      <td width="220"><input name="katalaluan" type="password" id="katalaluan" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="29"><strong>Katalaluan Baru</strong></td>
      <td><div align="center"><strong>:</strong></div></td>
      <td><input name="katalaluanBaru" type="password" id="katalaluanBaru" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="29"><strong>Ulang Katalaluan Baru</strong></td>
      <td><div align="center"><strong>:</strong></div></td>
      <td><input name="ulangkatalaluanBaru" type="password" id="ulangkatalaluanBaru" size="10" maxlength="10"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="15">&nbsp;</td>
      <td><div align="center"><span class="style40"></span></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <br />
  <table width="244" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="234"><div align="center">
      <input type="submit" value="Hantar" />
      <a href="maklumatPelajar1.php">
      <input type="button" value="Batal" /></a>
      </a></div></td>
  </tr>
</table><br />

</form></div></td>
                        </tr>
                      </table>
                    </div></td>
                    <td width="25">&nbsp;</td>
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
