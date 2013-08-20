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
.style26 {color: #990000}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style40 {color: #0000FF}
.style41 {
	color: #FF0000;
	font-style: italic;
}
.style49 {color: #FFFFFF; font-weight: bold; font-size: small; }
.style50 {color: #FFFF33}
.style51 {color: #000000}
.style53 {	color: #FF0000;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="javascript">
function validateForm()
{

	var a=document.forms["form1"]["keyword"].value
	if (a==null || a=="")
	{
	  alert("Mandatory keywords. Please try again.");
	  return false;
	}	  
}
</script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<div align="center"><br>
  <table width="1004" height="478" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="474" bgcolor="#FFFFFF"><table width="998" height="472" border="0" cellpadding="0" cellspacing="0">
        <tr>
 
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>

        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/matrik.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menu2.php"); ?>
            <table width="690" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                <tr>
                  <td width="684" height="74"><table width="216" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="style34">&nbsp;</td>
                      <td height="15" class="style34">&nbsp;</td>
                      <td class="style34">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="14" class="style34">&nbsp;</td>
                      <td width="24" height="18" class="style34"><img src="menu/search.jpg" width="39" height="37"></td>
                      <td width="178" class="style34">&nbsp;<span class="style35">.: Search Project :.</span></td>
                    </tr>
                  </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="190">&nbsp;</td>
                        </tr>
                      </table>
                    <div align="center"></div>
                    <div align="center">
                        <table width="657" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="33">&nbsp;</td>
                            <td width="686"><div align="center">
                                <div align="center">
                                  <div align="center">
                                    <div align="center">
                                      <table width="540" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="540" height="223" bgcolor="#CC9999"><div align="left">
                                              <form name="form1" method="post" action="detailsListProject.php" onSubmit="return validateForm()"  >
                                                <table width="754" border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td height="175" bgcolor="#CC9999"><div align="center">
                                                        <table width="614" border="0" cellpadding="0" cellspacing="0">
                                                          <tr>
                                                            <td width="443"><div align="center">
                                                                <table width="492" height="136" border="0" cellpadding="0" cellspacing="0">
                                                                  <tr>
                                                                    <td width="130" height="26">&nbsp;</td>
                                                                    <td width="24">&nbsp;</td>
                                                                    <td width="238">&nbsp;</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="35"><span class="style49 style51">Project Title/Keyword</span></td>
                                                                    <td><span class="style49 style51">:</span></td>
                                                                    <td><input name="keyword" type="text" size="35" maxlength="50" /></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="15">&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                  </tr>
                                                                </table>
                                                            </div></td>
                                                          </tr>
                                                        </table>
                                                      <br>
                                                        <input type="submit" name="search" value="Search" />
                                                    </div></td>
                                                  </tr>
                                                </table>
                                              </form>
                                          </div></td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div>
                                  <br>
                                </div>
                            </div></td>
                            <td width="58">&nbsp;</td>
                          </tr>
                        </table>
                    </div></td>
                </tr>
              </table>
            <br>
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

