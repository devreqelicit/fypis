<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
<?php 
session_start();
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}
require_once('connection/con_db.php');
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
.style46 {
	color: #FF0000;
	font-weight: bold;
	font-style: italic;
	font-size: small;
}
.style53 {font-size: small}
.style60 {
	color: #FFFFFF;
	font-weight: bold;
}
.style63 {
	font-size: 12px;
	font-weight: bold;
}
.style64 {font-size: 12px; font-weight: bold; color: #000000; }
.style66 {color: #000000; font-size: 12px; }
.style67 {font-size: 12px}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
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
          <td height="17" bgcolor="#FFFFFF"><div align="right">
            <div align="right"><a href="logoutPenyelia.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><div align="center">
            <table width="972" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="114"><span class="style31">
                  <?php include("footer/staffIdPenyelia.php"); ?>
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
                  <?php include("footer/menupenyelia.php"); ?>
                  <table width="875" height="345" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                    <tr>
                      <td width="869" height="341"><table width="238" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="13" class="style34">&nbsp;</td>
                          <td width="28" height="18" class="style34"><div align="center"><img src="menu/preferences_contact_list.png" width="45" height="38"></div></td>
                          <td width="175" class="style34">&nbsp;<span class="style35">.: Profile Info :.</span></td>
                        </tr>
                      </table>
                        <table width="200" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="190"><?php

				$tbl_name="maklumatpenyelia";// Table name
				$tbl_name="loginpenyelia";// Table name
				
					// Connect to server and select database.
					mysql_connect("$host", "$username", "$password")or die("cannot connect");
					mysql_select_db("$db_name")or die("cannot select DB");
					
					// get value of matric that sent from address bar
					//$matrik=$_GET['matrik'];
					
					
					// Retrieve data from database
					$sql="SELECT * FROM maklumatpenyelia WHERE staffId='$staffId'";
					$result=mysql_query($sql);
					$rows=mysql_fetch_array($result);
					
					?></td>
                            </tr>
                          </table>
                          <form name="form1" method="post" action="updatePeribadiPenyelia.php">
                            <div align="center">
                              <table width="866" border="0">
                                <tr>
                                  <td width="860"><div align="center">
                                      <table width="819" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="22" height="269" >&nbsp;</td>
                                          <td width="783" bgcolor="#FFFFFF"><div align="center">
                                              <table width="785" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" bgcolor="#FFCCCC">
                                                <tr>
                                                  <td width="759" height="230" bgcolor="#FFCCCC"><div align="center">
                                                    <table width="96%" height="154" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                        <td height="15">&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td width="4%" >&nbsp;</td>
                                                        <td width="12%" height="27" ><span class="style64">&nbsp;&nbsp;&nbsp;</span><span class="style63">&nbsp;<b>Staff Id</b></span></td>
                                                        <td width="2%" class="style63">:</td>
                                                        <td width="36%"><span class="style53 style53"><? echo $rows['staffId']; ?></span></td>
                                                        <td width="3%">&nbsp;</td>
                                                        <td width="11%"><span class="style66 style67">&nbsp;<strong>&nbsp;&nbsp;<b>Designation</b></strong></span></td>
                                                        <td width="0%"><div align="center" class="style67">&nbsp;:</div></td>
                                                        <td><input name="jawatan" type="text" class="style53" id="jawatan" value="<? echo $rows['jawatan']; ?>" size="33" maxlength="50" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="style63">&nbsp;</td>
                                                        <td height="26" class="style63"><span class="style26"><strong><strong><strong>&nbsp;&nbsp;&nbsp;</strong></strong></strong></span><strong>Name</strong><span class="style26"><strong><strong><strong><br>
                                                        </strong></strong></strong></span></td>
                                                        <td class="style63">:</td>
                                                        <td><input name="namaPenyelia" type="text" class="style53" id="namaPenyelia" value="<? echo $rows['namaPenyelia']; ?>" size="40" maxlength="50" /></td>
                                                        <td>&nbsp;</td>
                                                        <td><span class="style67"><strong>&nbsp;&nbsp;<b> Expertise</b></strong></span></td>
                                                        <td><div align="center" class="style67">:</div></td>
                                                        <td><input name="kepakaran" type="text" class="style53" id="kepakaran" value="<? echo $rows['kepakaran']; ?>" size="33" maxlength="50" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="style64">&nbsp;</td>
                                                        <td height="26" class="style64"><strong><strong><strong>&nbsp;&nbsp;</strong></strong></strong><span class="style60">&nbsp;</span><b>Gender</b></td>
                                                        <td class="style63">:</td>
                                                        <td><span class="style53 style53">
                                                          <select name="jantina" id="jantina">
                                                              <?php if($rows['jantina']=="Perempuan"){ ?>
                                                            <option selected="selected"><? echo $rows['jantina']; ?></option>
                                                            <option >Male</option>
                                                                <?php } else if($rows['jantina']=="Lelaki"){?>
                                                            <option selected="selected"><? echo $rows['jantina']; ?></option>
                                                            <option >Female</option>
                                                                <?php } else { ?>
															<option >-- Select --</option>
															<option >Male</option>
															<option >Female</option>
                                                            </select>
																 <?php } ?>
                                                        </span></td>
                                                        <td>&nbsp;</td>
                                                        <td class="style63">&nbsp;&nbsp;&nbsp;<b>Room No</b></td>
                                                        <td><div align="center" class="style64">
                                                          <div align="center">:</div>
                                                        </div></td>
                                                        <td width="32%"><input name="noBilik" type="text" class="style53" id="noBilik" value="<? echo $rows['noBilik']; ?>" size="33" maxlength="50" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                        <td height="27"><span class="style63">&nbsp;&nbsp;&nbsp;&nbsp;<b>Contact No</b></span></td>
                                                        <td class="style63">:</td>
                                                        <td><span class="style46 style53 style53">
                                                          <input name="notelefon" type="text" id="notelefon" value="<? echo $rows['notelefon']; ?>" size="10" maxlength="10">
*eg:0172002305</span></td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                      <tr>
                                                        <td class="style35">&nbsp;</td>
                                                        <td height="34" class="style35"><span class="style66">&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email</strong></span></td>
                                                        <td class="style35"><span class="style66">:</span></td>
                                                        <td><input name="emel" type="text" class="style53" id="emel" value="<? echo $rows['emel']; ?>" size="40" maxlength="50" /></td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                    </table>
                                                    <table width="324" border="0" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                          <td><div align="center">
                                                              <input name="staffId" type="hidden" id="staffId" value="<? echo $rows['staffId']; ?>" />
                                                              <table width="150" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                  <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                  <td>&nbsp;</td>
                                                                </tr>
                                                              </table>
                                                            <table width="153" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                  <td width="67"><input type="submit"  value="Submit" /></td>
                                                                  <td width="17">&nbsp;</td>
                                                                  <td width="69" height="17"><a href="maklumatPeribadiPenyelia.php" style="text-decoration:none;"> <input type="button" value="Cancel"></a></td>
                                                                </tr>
                                                              </table>
                                                            <br />
                                                          </div></td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                              </table>
                                          </div></td>
                                          <td width="55">&nbsp;</td>
                                        </tr>
                                      </table>
                                  </div></td>
                                </tr>
                              </table>
                            </div>
                          </form></td>
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
<div align="left"></div>
</body>
</html>

