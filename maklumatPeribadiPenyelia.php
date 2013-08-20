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
.style41 {	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style56 {font-size: small}
.style66 {font-size: 12px; color: #000000; font-weight: bold; }
.style67 {
	font-size: 12px;
	font-weight: bold;
}
.style69 {color: #000000; font-size: 12px; }
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
                  <table width="870" height="327" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                    <tr>
                      <td width="864" height="323"><table width="238" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="13" class="style34">&nbsp;</td>
                            <td width="28" height="18" class="style34"><div align="center"><img src="menu/preferences_contact_list.png" width="45" height="38"></div></td>
                            <td width="175" class="style34">&nbsp;<span class="style35">.: Profile Info :.</span></td>
                          </tr>
                        </table>
                          <table width="200" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="190">&nbsp;</td>
                            </tr>
                          </table>
                        <?php

				$tbl_name="maklumatpenyelia";// Table name

					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$sql="SELECT * FROM $tbl_name WHERE staffId='$staffId'";
						$result=mysql_query($sql);
						
				while($rows=mysql_fetch_array($result)){
				?>
                          <div align="center">
                            <table width="841" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="54" >&nbsp;</td>
                                <td width="731" bgcolor="#FFFFFF"><div align="center">
                                    <table width="810" border="2" bordercolor="#990000" bgcolor="#FFCCCC" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="804" height="230"><div align="center">
                                            <table width="93%" height="157" cellpadding="0" cellspacing="0" >
                                              <tr>
                                                <td >&nbsp;</td>
                                                <td height="15" >&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td >&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td width="3%" >&nbsp;</td>
                                                <td width="12%" height="27" ><span class="style66">&nbsp;&nbsp;&nbsp;</span><span class="style67"><b>Staff Id</b></span></td>
                                                <td width="3%" class="style67">:</td>
                                                <td width="32%" ><span class="style56"><? echo $rows['staffId']; ?></span></td>
                                                <td width="4%">&nbsp;</td>
                                                <td width="16%"><span class="style66">&nbsp;&nbsp;<strong>Password</strong></span></td>
                                                <td width="1%"><div align="center" class="style66">:</div></td>
                                                <td><a href="ubahKatalaluanPenyelia.php" class="style41">Change Password</a></td>
                                              </tr>
                                              <tr>
                                                <td class="style67">&nbsp;</td>
                                                <td height="26" class="style67"><span class="style26 "><strong><strong>&nbsp;&nbsp;</strong>Nama<strong><br>
                                                                                                </strong></strong></span></td>
                                                <td class="style67">:</td>
                                                <td ><span class="style56"><? echo $rows['namaPenyelia']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td width="16%"><span class="style66">&nbsp;&nbsp;<b>Designation</b></span></td>
                                                <td width="1%"><div align="center" class="style66">:</div></td>
                                                <td><span class="style56"><? echo $rows['jawatan']; ?></span></td>
                                              </tr>
                                              <tr>
                                                <td class="style67">&nbsp;</td>
                                                <td height="26" class="style67">&nbsp;&nbsp;<strong>Gender</strong></td>
                                                <td class="style67">:</td>
                                                <td ><span class="style56"><? echo $rows['jantina']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td><span class="style66">&nbsp;&nbsp;<b>Expertise</b></span></td>
                                                <td><div align="center" class="style66">:</div></td>
                                                <td><span class="style56"><? echo $rows['kepakaran']; ?></span></td>
                                              </tr>
                                              <tr>
                                                <td>&nbsp;</td>
                                                <td height="27"><span class="style67">&nbsp;&nbsp;<b>Contact No</b></span></td>
                                                <td class="style67">:</td>
                                                <td class="style26" ><span class="style56"><? echo $rows['notelefon']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td><span class="style66">&nbsp;&nbsp;<b>Room No</b></span></td>
                                                <td><div align="center" class="style66">:</div></td>
                                                <td width="29%" class="style26"><span class="style56"><? echo $rows['noBilik']; ?></span></td>
                                              </tr>
                                              <tr>
                                                <td class="style35">&nbsp;</td>
                                                <td height="34" class="style35"><span class="style69">&nbsp;&nbsp;<b>Email</b></span></td>
                                                <td class="style35"><span class="style69">:</span></td>
                                                <td ><span class="style56"><? echo $rows['emel']; ?></span></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              </tr>
                                            </table>
                                          <table width="460" height="26" border="0" cellpadding="0" cellspacing="0">
                                              <tr>
                                                <td><div align="center">
                                                    <table width="150" border="0" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                    </table>
                                                  <table width="230" height="23" border="0" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td width="224" height="17"><div align="center"><a href="kemaskini_peribadi_penyelia.php?staffId=<? echo $rows['staffId']; ?>"><span class="style41">Update </span></a></div></td>
                                                      </tr>
                                                    </table>
                                                  <br />
                                                    <?php
										}
									  ?>
                                                </div></td>
                                              </tr>
                                            </table>
                                        </div></td>
                                      </tr>
                                    </table>
                                </div></td>
                                <td width="56">&nbsp;</td>
                              </tr>
                            </table>
                            <?

					// close connection
					mysql_close();
					
					?>
                            <br>
                        </div></td>
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
<div align="left"></div></body>
</html>

