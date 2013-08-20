<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 
session_start();
if(!$_SESSION['matrik']){header("location:SilaloginPelajar.php");}
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
.style39 {
	color: #FF0000;
	font-style: italic;
	font-size: small;
}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style40 {color: #0000FF}
.style41 {
	color: #0000FF;
	font-weight: bold;
	font-size: 14px;
}
.style42 {color: #990000}
.style43 {color: #FF0000}
.style49 {color: #FFFFFF}
.style51 {color: #FFFFFF; font-weight: bold; font-size: small; }
.style52 {font-size: small}
.style53 {color: #000000; font-weight: bold; font-size: small; }
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
<body>
<div align="center"><br />
  <table width="1004" height="705" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="504" bgcolor="#FFFFFF"><table width="998" height="703" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
          </tr>
        <tr>
          <tr>
            <td height="17" bgcolor="#990000" class="style26"><span class="style42">
              <?php include("footer/matrik.php"); ?>
            </span></td>
          </tr>
          <tr>
            <td width="998" height="470" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menu2.php"); ?>
                <table width="870" height="400" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                  <tr>
                    <td width="864" height="396"><table width="235" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="9" class="style34">&nbsp;</td>
                        <td width="56" height="56" class="style34"><img src="menu/Student-Icon.gif" width="56" height="37" /></td>
                        <td width="198" class="style34">&nbsp;<span class="style35">.: Student Information :.</span></td>
                      </tr>
                    </table>
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                            <td width="190">&nbsp;</td>
                          </tr>
                        </table>
                     
              <?php
					$tbl_name="maklumatpelajar";// Table name

					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$sql="SELECT * FROM $tbl_name WHERE matrik='$matrik'";
						$result=mysql_query($sql);
						
				while($rows=mysql_fetch_array($result)){
				?>
              <div align="center">
                <table width="841" border="0" cellpadding="0" cellspacing="0" bor="bor"">
                  <tr>
                    <td width="12" >&nbsp;</td>
                    <td width="820" bgcolor="#FFFFFF"><div align="center">
                      <table width="805" border="2" bordercolor="#990000" bgcolor="#cc9999" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="799" height="334"><div align="center">
                              <table width="98%" height="248" cellpadding="0" cellspacing="0" >
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
                                  <td width="4%" >&nbsp;</td>
                                  <td width="18%" height="27" ><span class="style53">&nbsp;&nbsp;Matric</span></td>
                                  <td width="3%"><div align="center" class="style53">:</div></td>
                                  <td width="28%" ><span class="style52"><? echo $rows['matrik']; ?></span></td>
                                  <td width="2%">&nbsp;</td>
                                  <td width="16%"><span class="style53">&nbsp;&nbsp;Password</span></td>
                                  <td width="3%"><div align="center" class="style53">:</div></td>
                                  <td><a href="ubahKatalaluan.php" class="style41">Change Password</a></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;Name</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['nama']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td width="16%"><span class="style53">&nbsp;&nbsp;Email</span></td>
                                  <td width="3%"><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['emel']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;CGPA</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['pngk']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Religion</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['agama']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="27"><span class="style53">&nbsp;&nbsp;Program</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td class="style43" ><span class="style52"><font color="#000000"><? echo $rows['program']; ?></font></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Birth Date</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td width="26%" class="style39"><font color="#000000"><? echo date('d/m/Y',strtotime($rows['tarikhLahir'])); ?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;Department</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['department']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Address</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['alamatSemester1']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="23">&nbsp;</td>
                                  <td><div align="center" class="style40"><span class="style49"><span class="style52"><span class="style52"><span class="style26"></span></span></span></span></div></td>
                                  <td ><span class="style52"><? echo $rows['alamatSemasa2']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style26">&nbsp;</span></td>
                                  <td><div align="center"><span class="style43"><span class="style49"><span class="style52"><span class="style52"><span class="style26"></span></span></span></span></span></div></td>
                                  <td><span class="style52">&nbsp;</span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="23"><span class="style53">&nbsp;&nbsp;Phone No.</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['notelefon']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Postcode</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['poskodSemester']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="27"><span class="style40 style40"><span class="style53">&nbsp;&nbsp;Academic Advisor</span></span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['advisor']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;State</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['negeriSemester']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;</span></td>
                                  <td><div align="center" class="style53">&nbsp;</div></td>
                                  <td ><span class="style52"><font color="#000000">&nbsp;</font></span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><div align="center" class="style40"><span class="style52"><span class="style52"></span></span></div></td>
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
                                    <table width="230" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="224" height="17"><div align="center"><a href="kemaskini_maklumat_pelajar.php?matrik=<? echo $rows['matrik']; ?>"><span class="style41">Update </span></a></div></td>
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
                    <td width="9">&nbsp;</td>
                  </tr>
                </table><br>
              </div>                    </td>
                  </tr>
                </table>
                <?

					// close connection
					mysql_close();
					
					?>
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
