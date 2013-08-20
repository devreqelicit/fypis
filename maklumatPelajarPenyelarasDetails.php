<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 
session_start();
if(!$_SESSION['staffId']){header("location:SilaloginPenyelaras.php");}
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
.style39 {color: #FF0000; font-style: italic; }
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style40 {color: #0000FF}
.style42 {color: #990000}
.style43 {color: #FF0000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>
<!-- css -->
			<link rel="stylesheet" type="text/css" href="styles.css">
<body>
<div align="center"><br />
  <table width="1004" height="705" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="494" bgcolor="#FFFFFF"><table width="998" height="492" border="0" cellpadding="0" cellspacing="0">
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>

        <tr>
          <td height="17" bgcolor="#990000" class="style26"><div align="center">
            <table width="981" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="114"><span class="style31">
                  <?php include("footer/staffIdPenyelaras.php"); ?>
                </span></td>
                <td width="867"><div align="center"></div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <tr>
            <td width="998" height="470" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menuPenyelaras.php"); ?>
              <table width="847" height="444" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                  <tr>
                    <td width="841" height="440">
					<table width="237" border="0" cellpadding="0" cellspacing="0">

                      <tr>
                        <td width="10" class="style34">&nbsp;</td>
                        <td width="65" height="18" class="style34"><div align="center"><img src="menu/senaraiStudent.png" width="65" height="34" /></div></td>
                        <td width="262" class="style34">&nbsp;<span class="style35">.: Student Information :.</span></td>
                      </tr>
                    </table>
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                            <td width="190"><?php

				$tbl_name="maklumatpelajar";// Table name

$matrik=$_GET['matrik'];

					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$sql="SELECT * FROM $tbl_name WHERE matrik='$matrik'";
						$result=mysql_query($sql);
						
				while($rows=mysql_fetch_array($result)){
				?></td>
                        </tr>
                        </table>
                     
                    <div align="center">
                <table width="841" border="0" cellpadding="0" cellspacing="0" bor="bor"">
                  <tr>
                    <td width="54" >&nbsp;</td>
                    <td width="731" bgcolor="#FFFFFF"><div align="center">
                      <table width="775" border="2" bordercolor="#990000" bgcolor="#CC9999" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="769" height="334"><div align="center">
                              <table width="96%" height="248" cellpadding="0" cellspacing="0" >
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
                                  <td width="5%" >&nbsp;</td>
                                  <td width="18%" height="27" ><span class="style53"><strong>&nbsp;&nbsp;Matric</strong></span></td>
                                  <td width="4%"><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td width="26%" ><? echo $rows['matrik']; ?></td>
                                  <td width="3%">&nbsp;</td>
                                  <td width="15%"><span class="style53"><strong>&nbsp;&nbsp;Email</strong></span></td>
                                  <td width="4%"><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td><? echo $rows['emel']; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53"><strong>&nbsp;&nbsp;Nama</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td ><? echo $rows['nama']; ?></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53"><strong>&nbsp;&nbsp;Religion</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td><? echo $rows['agama']; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53"><strong>&nbsp;&nbsp;PNGK</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td ><? echo $rows['pngk']; ?></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53"><strong>&nbsp;&nbsp;Birth Date</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td width="25%" class="style39"><font color="#000000"><? echo $rows['tarikhLahir']; ?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="27"><span class="style53"><strong>&nbsp;&nbsp;Program</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td class="style43" ><font color="#000000"><? echo $rows['program']; ?></font></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53"><strong>&nbsp;&nbsp;Address</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td><? echo $rows['alamatSemester1']; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53"><strong>&nbsp;&nbsp;Department</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td ><? echo $rows['department']; ?></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><div align="center"></div></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="23">&nbsp;</td>
                                  <td><div align="center" class="style40"></div></td>
                                  <td >&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53"><strong>&nbsp;&nbsp;Phone No</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td><? echo $rows['notelefon']; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="23"><span class="style53"><strong>&nbsp;&nbsp;Phone No</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td ><? echo $rows['notelefon']; ?></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53"><strong>&nbsp;&nbsp;Negeri</strong></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td><? echo $rows['negeriSemester']; ?></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="27"><span class="style40 style40"><span class="style53"><strong>&nbsp;&nbsp;<span class="style26">Academic Advisor</span></strong></span></span></td>
                                  <td><div align="center" class="style53"><strong>:</strong></div></td>
                                  <td >&nbsp;<? echo $rows['advisor']; ?></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53"><strong>&nbsp;</strong></span></td>
                                  <td><div align="center" class="style53"><strong>&nbsp;</strong></div></td>
                                  <td ><font color="#000000">&nbsp;</font></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><div align="center" class="style40"></div></td>
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
                    <td width="56"><BR></td>
                  </tr>
                </table>
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
