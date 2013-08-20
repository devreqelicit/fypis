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
.style52 {color: #FFFFFF; font-weight: bold; }
.style50 {color: #0000FF; font-weight: bold; }
.style45 {color: #000000}
.style60 {	font-size: small;
	color: #000000;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div align="center"><br>
  <table width="1004" height="602" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="600" border="0" cellpadding="0" cellspacing="0">
        <tr>
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
          </tr>
        <tr>
        <tr>
          <td height="17" bgcolor="#FFFFFF"><div align="right">
            <div align="right"><a href="logout.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/matrik.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menu2.php"); ?><table width="749" height="78" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="777" height="74"><table width="216" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="style34">&nbsp;</td>
                    <td height="15" class="style34">&nbsp;</td>
                    <td class="style34">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14" class="style34">&nbsp;</td>
                    <td width="24" height="18" class="style34"><div align="center"><img src="menu/info.gif" width="39" height="41"></div></td>
                    <td width="178" class="style34">&nbsp;<span class="style35">.: Maklumat Projek :.</span></td>
                  </tr>
                </table>
                  <table width="200" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="190">&nbsp;</td>
                    </tr>
                  </table>
                  <div align="center"></div>
                  <div align="center">
                    <table width="722" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="19">&nbsp;</td>
                        <td width="700"><div align="center">
                          <div align="center"><form id="form1" name="form1" method="post" action="maklumatprojekInsertSuccessfull.php">
<center>
  <table width="684" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000">
    <tr>
      <td width="678" height="227" bgcolor="#FFCCFF"><div align="center" >
        <p>
          <?php
					 
					$semester=$_POST['semester'];
					$tahun=$_POST['tahun'];
					$cgpa=$_POST['cgpa'];
					$jamKredit=$_POST['jamKredit'];
					$staffId=$_POST['staffId'];
					$tajukProjek=$_POST['tajukProjek'];
					$penerangan=$_POST['penerangan'];
					  
					  ?>
        </p>
        <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="27"><?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="addproject";// Table name
				$tbl_name="maklumatpenyelia";// Table name
						
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$matrik=$_SESSION['matrik'];
						$sql="SELECT * FROM maklumatpenyelia WHERE staffId='$staffId'";
						$result=mysql_query($sql);

						while($rows=mysql_fetch_array($result))
						{
						$namaPenyelia=$rows['namaPenyelia'];
						$noOfStudent=$rows['noOfStudent'];
						}
						
			//if(mysql_num_rows($result)){		
			
				?></td>
            <td height="34" class="style40"><span class="style52 style45">&nbsp;&nbsp;Matrik</span></td>
            <td class="style40"><div align="center" class="style52 style45">:</div></td>
            <td><? echo $matrik ?>
              <input type="hidden" name="matrik" id="matrik" value="<? echo $matrik ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="34" class="style52 style45">&nbsp;&nbsp; Semester</td>
            <td class="style40"><div align="center" class="style52 style45">:</div></td>
            <td><? echo $semester ?>
              <input type="hidden" name="semester" id="semester" value="<? echo $semester ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="29" class="style52 style45">&nbsp;&nbsp; Tahun</td>
            <td class="style40"><div align="center" class="style52 style45">:</div></td>
            <td><? echo $tahun ?>
              <input type="hidden" name="tahun" id="tahun" value="<? echo $tahun ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="34" class="style40"><span class="style52 style45">&nbsp;&nbsp;&nbsp;CGPA</span></td>
            <td class="style40"><div align="center" class="style52 style45">:</div></td>
            <td>&nbsp;<span class="style45"><? echo $cgpa ?>
                <input type="hidden" name="cgpa" id="cgpa" value="<? echo $cgpa ?>"/>
            </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="125" height="34" class="style40"><span class="style52 style45">&nbsp;&nbsp; Jam Kredit</span></td>
            <td width="36" class="style40"><div align="center" class="style52 style45">:</div></td>
            <td width="397"><? echo $jamKredit ?>
              <input type="hidden" name="jamKredit" id="jamKredit" value="<? echo $jamKredit ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="32" class="style50"><span class="style52 style45">&nbsp;&nbsp; Nama Penyelia</span></td>
            <td class="style40"><div align="center" class="style52 style45">
                <div align="center">:</div>
            </div></td>
            <?php
			$sql="SELECT * FROM maklumatpenyelia WHERE noOfStudent !=2";
			$result=mysql_query($sql);
			?>
            <td><? echo $namaPenyelia ?>
              <input type="hidden" name="staffId" id="staffId" value="<? echo $staffId ?>"/>
              <input type="hidden" name="noOfStudent" id="noOfStudent" value="<? echo $noOfStudent ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="38" class="style40"><span class="style52 style45">&nbsp;&nbsp; Tajuk Projek </span></td>
            <td class="style40"><div align="center" class="style52 style45">:</div></td>
            <td><? echo $tajukProjek ?>
              <input type="hidden" name="tajukProjek" id="tajukProjek" value="<? echo $tajukProjek ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="style52 style45">&nbsp; &nbsp;Penerangan</span>
              <table width="95" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
              </table></td>
            <td><div align="center" class="style52 style45">:</div>
              <table width="27" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
                <tr>
                  <td class="style60">&nbsp;</td>
                </tr>
              </table></td>
            <td><? echo $penerangan ?>
              <input type="hidden" name="penerangan" id="penerangan" value="<? echo $penerangan ?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table width="651" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="651"><div align="center">
                <input type="submit" value="Setuju" />
                <a href="maklumatprojek1.php">
                <input type="button" value="Batal" />
                </a></div></td>
          </tr>
        </table>
        <?php

					// close connection
					mysql_close();
					
					?>
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

