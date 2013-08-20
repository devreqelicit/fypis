<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
<style type="text/css">
<!--
.style4 {
	color: #9EC763;
	font-weight: bold;
	font-size: small;
}
.style16 {
	font-size: small;
	color: #FFFFFF;
}
.style18 {
	font-size: small;
	color: #333333;
	font-weight: bold;
}
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
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style23 {	color: #FFFFFF;
	font-weight: bold;
}
.style24 {color: #FFFFFF}
.style25 {font-size: small; color: #0000FF; font-weight: bold; }
.style26 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<div align="center"><br>
  <table width="1006" height="470" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="1000" height="466" bgcolor="#FFFFFF"><table width="1000" height="464" border="0" cellpadding="0" cellspacing="0">
          <tr>
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
          </tr>

          <tr>
            <td height="21" bgcolor="#990000"><div align="right" style="margin-right: 5px;">
				<table width="10" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="140">
				<div align="right"><strong><font face="tahoma" size="1" color="#FFFFFF"><?php include("footer/hari.php"); ?> </font></strong></div>
			  </td>
			  <td width="10" align="center"><strong><font face="tahoma" size="1" color="#FFFFFF">-</font></strong></td>
              <td width="20"><div align="left"><strong><font face="tahoma" size="1" color="#FFFFFF">
                <?php include("footer/jam.php"); ?>
              </font></font></strong></div></td>
            </tr>
          </table>
            </div></td>
          </tr>
		  <tr>
			<td width="436"><div align="center">
			  <table width="860" border="0" cellpadding="0" cellspacing="0">
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>
				<tr>
				  <td width="54"><div align="center"><img src="menu/error2.png" alt="" width="51" height="38" /></div></td>
				  <td width="324"><span class="style35">&nbsp;<span class="style31"><font color="red"><strong>Please login to proceed!</strong></font></span></span></td>
				</tr>
			  </table>
			</div></td>
			</tr>
          <tr>
            <td height="229" bgcolor="#FFFFFF"><table width="1000" height="243" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
              <tr>
                <td width="53" height="243" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="412" bgcolor="#FFFFFF"><table width="412" height="229" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="21">
						<div id="mainmenu">
							<div class="mainmenu">
								<ul>
									<li><a href="loginPelajar.php" class="login_btn">Student</a></li>
									<li><a href="loginPenyelia.php" class="login_btn">Supervisor</a></li>
									<li><a href="loginPenyelaras.php" class="login_btn">Coordinator</a></li>
								</ul>
							</div>
						</div>
						<div class="clear"></div>
					  </td>
                    </tr>
                    <tr>
                      <td height="202"><div align="left"></div>
                          <form id="form1" name="form1" method="post" action="checkLoginPenyelia.php">
                            <table width="432" height="159" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                              <tr>
                                <td width="426" height="155"><div align="left">
                                  <table width="284" height="26" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="21"><div align="center"><img src="icons/pengguna.png" width="20" height="20" /></div></td>
                                      <td width="276"><span class="style18">LOGIN : SUPERVISOR</span></td>
                                    </tr>
                                  </table>
                                  <div align="center">
                                    <table width="396" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
                                      <tr>
                                        <td bgcolor="#CC9999"><div align="center">
                                            <table width="336" height="143" border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td height="21">&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td height="60"><div align="center"><img src="icons/49.png" width="48" height="48" /></div></td>
                                                <td><table width="250" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="82" height="32"><div align="justify" class="style16 style26"><strong>Staff Id</strong></div></td>
                                                      <td width="21"><div align="justify" class="style25 style26">:</div></td>
                                                      <td width="147"><div align="justify">
                                                          <input name="staffId" type="text" size="12" maxlength="10" />
                                                      </div></td>
                                                    </tr>
                                                    <tr>
                                                      <td height="31"><div align="justify" class="style25 style26">Password</div></td>
                                                      <td><div align="justify" class="style25 style26">:</div></td>
                                                      <td><div align="justify">
                                                          <input name="katalaluan" type="password" size="12" maxlength="10" />
                                                      </div></td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                              <tr>
                                                <td width="94" height="54">&nbsp;</td>
                                                <td width="232"><table width="253" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="247"><div align="center">
                                                          <input type="submit" value="Login" />
                                                      </div></td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                            </table>
                                        </div></td>
                                      </tr>
                                    </table>
                                    <br />
                                  </div>
                                  </div></td>
                              </tr>
                            </table>
                          </form></td>
                    </tr>
                </table></td>
                <td width="81" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="376" bgcolor="#FFFFFF"><table width="378" height="227" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="372" height="21">&nbsp;</td>
                    </tr>
                    <tr>
                      <td><div align="left">
                          <table width="284" height="26" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="21"><img src="icons/arahan_detail.png" width="20" height="20" /></td>
                              <td width="276"><span class="style4">LOGIN INFO</span></td>
                            </tr>
                          </table>
                      </div>
                          <div align="justify"></div>
                        <table width="282" height="56" border="2" cellpadding="0" cellspacing="0" bordercolor="#336600">
                      <tr>
                              <td width="260" height="26"><p><script type="text/javascript">
var iframesrc="info/infoLoginPenyelaras2.html"
document.write('<iframe id="datamain" src="'+iframesrc+'" width="285px" height="103px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" allowtransparency="true" scrolling="no"></iframe>')
</script></p></td>
                            </tr>
                        </table>
                        <table width="150" border="0" cellpadding="0" cellspacing="0">
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
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table></td>
                    </tr>
                </table></td>
                <td width="56" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
            </table></td>
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
