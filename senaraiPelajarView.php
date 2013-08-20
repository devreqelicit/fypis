<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>

<?php 
session_start();
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}
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
.style42 {color: #990000}
.style43 {color: #FF0000}
.style49 {color: #FFFFFF}
.style52 {font-size: small}
.style53 {color: #000000; font-weight: bold; font-size: small; }
.style73 {	color: #FF0000;
	font-style: italic;
}
.style44 {color: #0000FF; font-weight: bold; }
.style70 {font-size: small; font-weight: bold; }
.style75 {
	font-weight: bold;
	color: #000000;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>

<body>
<div align="center"><br />
  <table width="1004" height="705" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="504" bgcolor="#FFFFFF"><table width="998" height="703" border="0" cellpadding="0" cellspacing="0">
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
                <div align="right"><a href="logoutPenyelia.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
            </div></td>
          </tr>
          <tr>
            <td height="17" bgcolor="#990000" class="style26"><span class="style42">
              <?php include("footer/staffIdPenyelia.php"); ?>
            </span></td>
          </tr>
          <tr>
            <td width="998" height="470" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menupenyelia2.php"); ?>
                <table width="870" height="400" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                  <tr>
                    <td width="864" height="396"><table width="235" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="9" class="style34">&nbsp;</td>
                        <td width="56" height="56" class="style34"><img src="menu/Student-Icon.gif" width="56" height="37" /></td>
                        <td width="198" class="style34">&nbsp;<span class="style35">.: Maklumat Pelajar :.</span></td>
                      </tr>
                    </table>
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                            <td width="190">&nbsp;</td>
                        </tr>
                      </table>
                     
              <?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root123";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="maklumatpelajar";// Table name

					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						$matrik=$_GET['matrik'];
						$sql="SELECT * FROM $tbl_name WHERE matrik=$matrik";
						$result=mysql_query($sql);
						
				while($rows=mysql_fetch_array($result)){
				?>
              <div align="center">
                <table width="841" border="0" cellpadding="0" cellspacing="0" bor="bor"">
                  <tr>
                    <td width="12" >&nbsp;</td>
                    <td width="820" bgcolor="#FFFFFF"><div align="center"><br>
                      <table width="805" border="2" bordercolor="#990000" bgcolor="#FFCCFF" cellpadding="0" cellspacing="0">
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
                                  <td width="18%" height="27" ><span class="style53">&nbsp;&nbsp;Matrik</span></td>
                                  <td width="3%"><div align="center" class="style53">:</div></td>
                                  <td width="28%" ><span class="style52"><? echo $rows['matrik']; ?></span></td>
                                  <td width="2%">&nbsp;</td>
                                  <td width="16%"><span class="style53">&nbsp;&nbsp;Emel</span></td>
                                  <td width="3%"><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['emel']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;Nama</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['nama']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Agama</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['agama']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;Jantina</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['jantina']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Tarikh Lahir</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td width="26%" class="style39"><font color="#000000"><? echo $rows['tarikhLahir']; ?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="27"><span class="style53">&nbsp;&nbsp;No Kad Pengenalan</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td class="style43" ><span class="style52"><font color="#000000"><? echo $rows['nokp']; ?></font></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Alamat Semester</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['alamatSemester1']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;Alamat Semasa</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['alamatSemasa1']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style26"></span></td>
                                  <td><div align="center"><span class="style43"><span class="style49"><span class="style52"><span class="style52"><span class="style26"></span></span></span></span></span></div></td>
                                  <td><span class="style52"><? echo $rows['alamatSemester2']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="23">&nbsp;</td>
                                  <td><div align="center" class="style40"><span class="style49"><span class="style52"><span class="style52"><span class="style26"></span></span></span></span></div></td>
                                  <td ><span class="style52"><? echo $rows['alamatSemasa2']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Poskod</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['poskodSemester']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="23"><span class="style53">&nbsp;&nbsp;Poskod</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['poskodSemasa']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td><span class="style53">&nbsp;&nbsp;Negeri</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td><span class="style52"><? echo $rows['negeriSemester']; ?></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="27"><span class="style40 style40"><span class="style53">&nbsp;&nbsp;Negeri</span></span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><? echo $rows['negeriSemasa']; ?></span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="26"><span class="style53">&nbsp;&nbsp;No. Telefon</span></td>
                                  <td><div align="center" class="style53">:</div></td>
                                  <td ><span class="style52"><font color="#000000"><? echo $rows['notelefon']; ?></font></span></td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><div align="center" class="style40"><span class="style52"><span class="style52"></span></span></div></td>
                                  <td>&nbsp;</td>
                                </tr>
                              </table>
                            <table width="460" height="26" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td><div align="center"><br />
                                      <?php
										}
									  ?>
                                  </div></td>
                                </tr>
                              </table>
                          </div></td>
                        </tr>
                      </table><br>
                      <div align="left">
                        <table width="216" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td class="style34">&nbsp;</td>
                            <td height="15" class="style34">&nbsp;</td>
                            <td class="style34">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="14" class="style34">&nbsp;</td>
                            <td width="24" height="18" class="style34"><div align="center"><img src="menu/info.gif" width="39" height="41" /></div></td>
                            <td width="178" class="style34">&nbsp;<span class="style35">.: Maklumat Projek :.</span></td>
                          </tr>
                        </table>
                        <br>
                      </div>
                      <table width="801" border="2" bordercolor="#990000" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="795" height="326" bgcolor="#FFCCFF"><div align="center">
                              <table width="92%" height="326" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="15"><?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root123";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="addproject";// Table name
				$tbl_name="maklumatpenyelia";// Table name
				$tbl_name="maklumatpelajar";
				
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						$matrik=$_GET['matrik'];
						//$matrik=$_SESSION['matrik'];
						$sql="SELECT * FROM addproject WHERE matrik=$matrik";
						$result=mysql_query($sql);
						while($rows=mysql_fetch_array($result))
						{
						$jamKredit=$rows['jamKredit'];
						$tajukProjek=$rows['tajukProjek'];
						$semester=$rows['semester'];
						$tahun=$rows['tahun'];
						//$program=$rows['program'];
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
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="style40">&nbsp;</td>
                                  <td height="25" class="style40"><span class="style72 style71 style68 style26"><strong>&nbsp;&nbsp;Matrik</strong></span></td>
                                  <td class="style40"><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div></td>
                                  <td><span class="style52"><? echo $matrik; ?></span></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="style68 style71">&nbsp;</td>
                                  <td height="23" class="style72 style71 style68"><span class="style26"><strong>&nbsp; Semester</strong></span></td>
                                  <td class="style40"><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div></td>
                                  <td><span class="style52"><? echo $semester; ?></span></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="style68 style71">&nbsp;</td>
                                  <td height="23" class="style72 style71 style68"><span class="style26"><strong>&nbsp;&nbsp;Tahun</strong></span></td>
                                  <td class="style40"><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div></td>
                                  <td><span class="style52"><? echo $tahun; ?></span></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="style40">&nbsp;</td>
                                  <td height="25" class="style40"><span class="style72 style71 style68 style26"><strong>&nbsp;&nbsp;CGPA</strong></span></td>
                                  <td class="style40"><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div></td>
                                  <td><span class="style73"><span class="style42 style71"><? echo $cgpa; ?></span></span></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="4%" class="style40">&nbsp;</td>
                                  <td width="23%" height="23" class="style40"><span class="style72 style71 style68 style26"><strong>&nbsp;&nbsp;Jam Kredit</strong></span></td>
                                  <td width="6%" class="style40"><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div></td>
                                  <td width="64%"><span class="style52"><? echo $jamKredit; ?></span></td>
                                  <td width="3%">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="style44">&nbsp;</td>
                                  <td height="32" class="style44"><span class="style72 style71 style68 style26"><strong>&nbsp;&nbsp;Nama Penyelia</strong></span></td>
                                  <td class="style40"><div align="center" class="style68 style71 style72 style75">
                                      <div align="center">:</div>
                                  </div></td>
                                  <td><span class="style52"><? echo $namaPenyelia; ?></span></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="style40">&nbsp;</td>
                                  <td height="30" class="style40"><span class="style72 style71 style68 style26"><strong>&nbsp;&nbsp;Tajuk Projek </strong></span></td>
                                  <td class="style40"><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div></td>
                                  <td><span class="style52"><? echo $tajukProjek; ?></span></td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td height="125"><span class="style72 style71 style68 style26"><strong>&nbsp;&nbsp;Penerangan Projek</strong></span>
                                      <table width="99" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="99" class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  <td><div align="center" class="style72 style71 style68 style26"><strong>:</strong></div>
                                      <table width="35" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="35" class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td class="style72 style71 style70 style26">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  <td><span class="style52"><? echo $penerangan; ?><br />
                                  </span></td>
                                  <td>&nbsp;</td>
                                </tr>
                              </table>
                            <br />
                              <?php
	
	}?>
	
			

<?php
					// close connection
					mysql_close();
					
					?>
                              <br />
                          </div></td>
                          <br />
                        </tr>
                      </table>
                      <br>
                    </div></td>
                    <td width="9">&nbsp;</td>
                  </tr>
                </table><br>
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
