<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 
ob_start();
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
.style26 {color: #990000}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style40 {color: #0000FF}
.style42 {
	color: #000000;
	font-size: small;
}
.style44 {color: #0000FF; font-weight: bold; }
.style50 {color: #FFFFFF; font-weight: bold; font-size: small; }
.style51 {font-size: small}
.style52 {color: #000000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div align="center"><br>
  <table width="1004" height="576" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="572" bgcolor="#FFFFFF"><table width="998" height="570" border="0" cellpadding="0" cellspacing="0">
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
            <?php include("footer/menu2.php"); ?><table width="746" height="312" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="740" height="308"><table width="216" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="style34">&nbsp;</td>
                    <td height="15" class="style34">&nbsp;</td>
                    <td class="style34">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14" class="style34">&nbsp;</td>
                    <td width="24" height="18" class="style34"><div align="center"><img src="menu/info.gif" width="39" height="41"></div></td>
                    <td width="178" class="style34">&nbsp;<span class="style35">.: Project Information :.</span></td>
                  </tr>
                </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  <div align="center">
                    <table width="687" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="6">&nbsp;</td>
                        <td width="664"><div align="center">
                          <div align="center">
                            <form name="form1" method="post" action="updateMaklumatProjek.php">
                              <table width="639" border="2" bordercolor="#990000" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="633" height="214" bgcolor="#cc9999"><div align="center">
                                      <table width="91%" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td height="15"><?php

				$tbl_name="addproject";// Table name
				$tbl_name="maklumatpenyelia";// Table name
						
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$matrik=$_SESSION['matrik'];
						$sql="SELECT * FROM addproject WHERE matrik=$matrik";
						$result=mysql_query($sql);
						while($rows=mysql_fetch_array($result))
						{
						$jamKredit=$rows['jamKredit'];
						$tajukProjek=$rows['tajukProjek'];
						$semester=$rows['year_of_semester'];
						$tahun=$rows['tahun'];
						//$jabatan=$rows['jabatan'];
						$cgpa=$rows['cgpa'];
						//$kodSubjek=$rows['kodSubjek'];
						$staffId=$rows['staffId'];
						$penerangan=$rows['penerangan'];
						}
						
						
			if(mysql_num_rows($result))
			{
			$sql2="SELECT * FROM maklumatpenyelia WHERE staffId='$staffId'";
			$result2=mysql_query($sql2);		
			while($rows=mysql_fetch_array($result2))
			{
			$namaPenyelia=$rows['namaPenyelia'];
			}
				?></td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          </tr>
                                        <tr>
                                          <td class="style40">&nbsp;</td>
                                          <td height="34" class="style40"><span class="style50 style51 style52">&nbsp;&nbsp;Matric No</span></td>
                                          <td class="style40"><div align="center" class="style50 style51 style52">:</div></td>
                                          <td><span class="style51 style51"><? echo $matrik; ?></span></td>
                                          </tr>
                                        <tr>
                                          <td class="style50 style51">&nbsp;</td>
                                          <td height="34" class="style50 style51 style52">&nbsp;&nbsp;Semester</td>
                                          <td class="style40"><div align="center" class="style50 style51 style52">:</div></td>
                                          <td><span class="style51 style51"><? echo $semester; ?></span></td>
                                          </tr>
                                          <td class="style40">&nbsp;</td>
                                          <td height="34" class="style40"><span class="style50 style51 style52">&nbsp;&nbsp;CGPA</span></td>
                                          <td class="style40"><div align="center" class="style50 style51 style52">:</div></td>
                                          <td><span class="style42 style51"><? echo $cgpa; ?></span></td>
                                          </tr>
                                        <tr>
                                          <td class="style44">&nbsp;</td>
                                          <td height="28" class="style44"><span class="style50 style51 style52">&nbsp;&nbsp;Supervisor</span></td>
                                          <td class="style40"><div align="center" class="style50 style51 style52">
                                              <div align="center">:</div>
                                          </div></td>
                                          <td><span class="style51 style51"><? echo $namaPenyelia; ?></span></td>
                                          </tr>
                                        <tr>
                                          <td class="style40">&nbsp;</td>
                                          <td height="33" class="style40"><span class="style50 style51 style52">&nbsp;&nbsp;Project Title</span></td>
                                          <td class="style40"><div align="center" class="style50 style51 style52">:</div></td>
                                          <td><input name="tajukProjek" type="text" class="style51" id="tajukProjek" value="<? echo $tajukProjek; ?>" size="50" maxlength="60" /></td>
                                          </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td height="34"><span class="style50 style51 style52">&nbsp;&nbsp;Project Description</span>
                                              <table width="99" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td width="99" class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                            </table></td>
                                          <td><div align="center" class="style50 style51 style52">:</div>
                                              <table width="35" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td width="35" class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td class="style51 style52">&nbsp;</td>
                                                </tr>
                                            </table></td>
                                          <td><span class="style51 style51">
                                            <textarea name="penerangan" id="penerangan" cols="40" rows="6"><? echo $penerangan; ?></textarea>
                                          </span></td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td height="15">&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td><div align="center"></div></td>
                                          </tr>
                                      </table>
                                    <input type="submit" value="Update">
                                      <a href="maklumatprojek1.php">
                                    
                                      <br>
                                      <div align="center"> </div>
                                    <?php
	
	}
else {
	header ("location:MaklumatProjekTiadaRekod.php");
	
			}


					// close connection
					mysql_close();
					
					?>
                                  <br></div></td>
                                </tr>
                              </table>
                                  </form>
                            <br>
                          </div>
                        </div></td>
                        <td width="17">&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
              </tr>
            </table>
            <BR>
          </div>
            <div align="center"></div></td>
        </tr>
        
  <td height="22" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
  </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="left"></div></body>
</html>

