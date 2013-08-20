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
.style50 {color: #0000FF; font-weight: bold; }
.style54 {color: #000000; font-weight: bold; font-size: small; }
.style55 {color: #000000}
.style56 {
	color: #FF0000;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<script language="javascript">
function validateForm()
{

	var a=document.forms["form1"]["semester"].value
	if (a==null || a=="")
	{
	  alert("Isikan ruangan Semester");
	  return false;
	}
	var b=document.forms["form1"]["tahun"].value
	if (b==null || b=="")
	{
	  alert("Isikan ruangan Tahun");
	  return false;
	}	
	var c=document.forms["form1"]["cgpa"].value
	if (c==null || c=="")
	{
	  alert("Isikan ruangan cgpa");
	  return false;
	}
	var d=document.forms["form1"]["jamKredit"].value
	if (d==null || d=="")
	{
	  alert("Isikan ruangan Jam Kredit");
	  return false;
	}
	  
}
</script>

</head>

<body>
<div align="center"><br>
  <table width="1004" height="602" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="488" bgcolor="#FFFFFF"><table width="998" height="600" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="151" bgcolor="#FFFFFF"><script type="text/javascript">
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
            <div align="right"><a href="logout.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/matrik.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF"><div align="center">
            <?php include("footer/menu.php"); ?><table width="754" height="491" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="748" height="487"><table width="216" border="0" cellpadding="0" cellspacing="0">
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
                    <table width="719" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="21">&nbsp;</td>
                        <td width="688"><div align="center">
                          <div align="center"><form id="form1" name="form1" method="post" onSubmit="return validateForm()" action="maklumatprojekInsertConfirm.php">
<center>
<table width="662" border="2" bordercolor="#990000" cellpadding="0" cellspacing="0">
  <tr>
    <td width="656" height="410" bgcolor="#FFCCFF"><div align="center">
      <p><?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="addproject";// Table name
				
						
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						$matrik=$_SESSION['matrik'];
						
						
			//if(mysql_num_rows($result)){		
			
				?></p>
      <table border="0" cellpadding="0" cellspacing="0">
        
        <tr>
          <td width="27">&nbsp;</td>
          <td height="30" class="style40"><span class="style54">&nbsp;&nbsp; Matrik</span></td>
          <td class="style40"><div align="center" class="style54">:</div></td>
          <td><? echo $matrik; ?></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="28" class="style54">&nbsp;&nbsp; Semester</td>
          <td class="style40"><div align="center" class="style54">:</div></td>
          <td><input name="semester" type="text" id="semester" size="10" maxlength="10" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="25" class="style54">&nbsp;&nbsp; Tahun</td>
          <td class="style40"><div align="center" class="style54">:</div></td>
          <td><input name="tahun" type="text" id="tahun" size="10" maxlength="15" />
          &nbsp;<span class="style56">&nbsp;*contoh 2010/11</span></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="30" class="style40"><span class="style54">&nbsp;&nbsp;&nbsp;CGPA</span></td>
          <td class="style40"><div align="center" class="style54">:</div></td>
          <td><input name="cgpa" type="text" id="cgpa" size="6" maxlength="6" />
  &nbsp;<span class="style56">&nbsp;* contoh : 3.7777</span></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="130" height="25" class="style40"><span class="style54">&nbsp;&nbsp;Jam Kredit</span></td>
          <td width="30" class="style40"><div align="center" class="style54">:</div></td>
          <td width="423"><input name="jamKredit" type="text" id="jamKredit" size="6" maxlength="6" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="32" class="style50"><span class="style54">&nbsp;&nbsp;Nama Penyelia</span></td>
          <td class="style40"><div align="center" class="style54">
              <div align="center">:</div>
          </div></td>
           <?php
			$sql="SELECT * FROM maklumatpenyelia WHERE noOfStudent !=2";
			$result=mysql_query($sql);
			?>
          
          <td><select name="staffId" id="staffId">
              <?php
			while($rows=mysql_fetch_array($result))
			{
			?>
              <option value="<? echo $rows['staffId']; ?>"><? echo $rows['namaPenyelia']; ?></option>
              <?php
			}
			?>
          </select></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="34" class="style40"><span class="style54">&nbsp;&nbsp;Tajuk Projek </span></td>
          <td class="style40"><div align="center" class="style54">:</div></td>
          <td><input name="tajukProjek" type="text" id="tajukProjek" size="50" maxlength="100" /></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="style54">&nbsp;&nbsp;Penerangan</span></td>
          <td><div align="center" class="style54">:</div></td>
          <td><textarea name="penerangan" id="penerangan" cols="45" rows="4"></textarea></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="style55"></span></td>
          <td><span class="style55"></span></td>
          <td>&nbsp;</td>
          </tr>
      </table>
      <table width="616" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="616"><div align="center">
              <input type="submit" value="Simpan" />
              <input type="reset" id="button" value="Padam">
          </div></td>
        </tr>
      </table>
      <br />
      <div align="center"> </div>
      </div></td>
  </tr>
</table>

                            <?php

					// close connection
					mysql_close();
					
					?>
                            <br>
                          </center>
  
  
</form>
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

