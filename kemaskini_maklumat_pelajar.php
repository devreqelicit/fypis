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
.style26 {color: #990000}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style40 {color: #0000FF}
.style54 {color: #FFFFFF}
.style56 {color: #FFFFFF; font-weight: bold; font-size: small; }
.style57 {font-size: small}
.style58 {color: #FFFF00; font-size: small; }
.style59 {color: #000000}
.style60 {font-size: 14px; font-weight: bold; color: #000000; }
.style61 {
	color: #FF0000;
	font-weight: bold;
}
.style63 {
	color: #FFFF00
}
.style64 {
	color: #FF0000;
	font-style: italic;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link rel="stylesheet" href="jscalendar-1.0/calendar-brown.css" type="text/css">
	<script type="text/javascript" src="jscalendar-1.0/calendar.js"></script>
	<script type="text/javascript" src="jscalendar-1.0/lang/calendar-en.js"></script>
	<script type="text/javascript" src="jscalendar-1.0/calendar-setup.js"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">	
</head>
<body>
<div align="center"><br>
  <table width="1004" height="700" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="696" bgcolor="#FFFFFF"><table width="998" height="694" border="0" cellpadding="0" cellspacing="0">
        <tr>
			<td height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
        </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/matrik.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="470" bgcolor="#FFFFFF"><div align="center"><?php include("footer/menu2.php"); ?>
            <table width="885" height="454" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
              <tr>
                <td width="878" height="411"><table width="235" border="0" cellpadding="0" cellspacing="0">
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
					$tbl_name="loginpelajar";// Table name
				
					// Connect to server and select database.
					mysql_connect("$host", "$username", "$password")or die("cannot connect");
					mysql_select_db("$db_name")or die("cannot select DB");
					
					// get value of matric that sent from address bar
					//$matrik=$_GET['matrik'];
					
					
					// Retrieve data from database
					$sql="SELECT * FROM maklumatpelajar WHERE matrik='$matrik'";
					$result=mysql_query($sql);
					$rows=mysql_fetch_array($result);
					
					?>
                  <form name="form1" method="post" action="updateMaklumatPelajarSuccessful.php">
                    <div align="center">
                      <table width="869" border="0">
                        <tr>
                          <td width="881"><div align="center">
                            <table width="860" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="7" height="269" >&nbsp;</td>
                                <td width="850" bgcolor="#FFFFFF"><div align="center">
                                  <table width="844" border="2" bordercolor="#990000" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td width="838" height="320" bgcolor="#cc9999"><div align="center">
                                          <table width="99%" height="277" cellpadding="0" cellspacing="0" border="0"> 
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="21">&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td width="2%">&nbsp;</td>
                                              <td width="17%" height="24"><span class="style56 style57 style59">&nbsp;&nbsp;Matric</span></td>
                                              <td width="3%"><div align="center" class="style56 style57 style59">:</div></td>
                                              <td width="31%"><span class="style57 style57"><? echo $rows['matrik']; ?></span></td>
                                              <td width="1%">&nbsp;</td>
                                              <td width="15%"><span class="style56 style59 style57">&nbsp;&nbsp;Email</span></td>
                                              <td width="2%"><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><input name="emel" type="text" class="style57"  value="<? echo $rows['emel']; ?>" size="33" maxlength="50" /></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="28"><span class="style56 style57 style59">&nbsp;&nbsp;Name</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><input name="nama" type="text" class="style57"  value="<? echo $rows['nama']; ?>" size="40" maxlength="100" /></td>
                                              <td>&nbsp;</td>
                                              <td><span class="style56 style59 style57">&nbsp;&nbsp;Religion</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><span class="style57 style57">
                                                <select name="agama" id="agama" >
												  <option <?php if($rows['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                                                  <option <?php if($rows['agama'] == 'Cina') echo 'selected'; ?>>Cina</option>
                                                  <option <?php if($rows['agama'] == 'India') echo 'selected'; ?>>India</option>
                                                  <option <?php if($rows['agama'] == 'Lain-lain') echo 'selected'; ?>>Lain-lain</option>
                                                </select>
                                              </span> </td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="28"><span class="style56 style57 style59">&nbsp;&nbsp;CGPA</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><span class="style57 style57"><input name="pngk" type="text" class="style57"   size="10" maxlength="10" value="<? echo $rows['pngk']; ?>"/>
                                              </span> </td>
                                              <td>&nbsp;</td>
                                              <td><span class="style56 style59 style57">&nbsp;&nbsp;Birth Date</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td width="29%">
                                                <select name="year">
													<option value="">-- Year--</option>
													<?php
														for($i=1970;$i<2010;$i++){
															echo "<option>".$i."</option>";
														}
													?>
												</select>
												<select name="month">
													<option value="">-- Month--</option>
													<?php
														for($i=1;$i<13;$i++){
															echo "<option>".$i."</option>";
														}
													?>
												</select>
												<select name="day">
													<option value="">-- Day--</option>
													<?php
														for($i=1;$i<32;$i++){
															echo "<option>".$i."</option>";
														}
													?>
												</select>
                                                  
											  </td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="28"><span class="style56 style57 style59">&nbsp;&nbsp;Program</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td class="style58 style57">
												<select name="program">
													<option>Bachelor Sains Komputer</option>
												</select>
											
                                                </td>
                                              <td>&nbsp;</td>
                                              <td><span class="style56 style59 style57">&nbsp;&nbsp;Semester &nbsp;&nbsp;Address</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><input name="alamatSemester1" type="text" class="style57"  value="<? echo $rows['alamatSemester1']; ?>" size="28" maxlength="25" /></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="30"><span class="style56 style57 style59">&nbsp;&nbsp;Department</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><select name="department">
													<option <?php if($rows['department'] == 'Software Engineering') echo 'selected'; ?>>Software Engineering</option>
													<option <?php if($rows['department'] == 'Computer Science') echo 'selected'; ?>>Computer Science</option>
													<option <?php if($rows['department'] == 'Multimedia') echo 'selected'; ?>>Multimedia</option>
													<option <?php if($rows['department'] == 'Network') echo 'selected'; ?>>Network</option>
												</select></td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td><div align="center"><span class="style54"><span class="style57"><span class="style57"><span class="style59"><span class="style57"><span class="style59"></span></span></span></span></span></span></div></td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="28"><span class="style56 style59 style57">&nbsp;&nbsp;Phone No.</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><input name="phone_no" type="text" class="style57" size="25"  value="<?php echo $rows['notelefon']; ?>"/></td>
                                              <td>&nbsp;</td>
                                              <td><span class="style56 style59 style57">&nbsp;&nbsp;Postcode</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><input name="postcode" type="text" class="style57"  size="5" maxlength="5" value="<?php echo $rows['poskodSemester']; ?>"/></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="31"><span class="style56 style57 style59">&nbsp; Academic Advisor</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td>
												<select name="advisor">
													<?php
														include('connection/con_db/php');
														
														$query = mysql_query("SELECT * FROM maklumatpenyelia ORDER BY id")or die(mysql_error());
		
														echo "<option>-- select --</option>";
														
														while( $result = mysql_fetch_assoc($query)){
															$advisor = $rows['advisor'];
															echo "<option ".($advisor == $result['namaPenyelia'] ? 'selected':"").">".$result['namaPenyelia']."</option>";
														}
													?>
												</select>
											  </td>
                                              <td>&nbsp;</td>
                                              <td><span class="style56 style59 style57">&nbsp;&nbsp;State</span></td>
                                              <td><div align="center" class="style56 style57 style59">:</div></td>
                                              <td><span class="style57 style57">
                                                <select name="state">
                                                  <option <?php if($rows['negeriSemester'] == 'Perlis') echo 'selected'; ?>>Perlis</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Kedah') echo 'selected'; ?>>Kedah</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Pulau Pinang') echo 'selected'; ?>>Pulau Pinang</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Perak') echo 'selected'; ?>>Perak</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Melaka') echo 'selected'; ?>>Melaka</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Selangor') echo 'selected'; ?>>Selangor</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Negeri Sembilan') echo 'selected'; ?>>Negeri Sembilan</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Kuala Lumpur') echo 'selected'; ?>>Kuala Lumpur</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Terengganu') echo 'selected'; ?>>Terengganu</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Kelantan') echo 'selected'; ?>>Kelantan</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Pahang') echo 'selected'; ?>>Pahang</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Johor') echo 'selected'; ?>>Johor</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Serawak') echo 'selected'; ?>>Serawak</option>
                                                  <option <?php if($rows['negeriSemester'] == 'Sabah') echo 'selected'; ?>>Sabah</option>
                                                </select>
                                              </span></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td height="27"><span class="style56 style57 style59">&nbsp;&nbsp;&nbsp;</span></td>
                                              <td><div align="center" class="style56 style57 style59">&nbsp;</div></td>
                                              <td><span class="style57 style57">
                                               &nbsp;
                                              </span></td>
                                              <td>&nbsp;</td>
                                              <td><span class="style59"></span></td>
                                              <td><div align="center" class="style40"><span class="style57"><span class="style57"><span class="style59"><span class="style57"><span class="style59"></span></span></span></span></span></div></td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td><span class="style56 style57 style59">&nbsp;&nbsp;&nbsp;</span></td>
                                              <td><div align="center" class="style60">&nbsp;</div></td>
                                              <td><span class="style61"><span class="style57 style63">
                                                &nbsp;
                                                </td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td><div align="center" class="style40"><span class="style57"><span class="style57"></span></span></div></td>
                                              <td>&nbsp;</td>
                                            </tr>
                                          </table>
                                        <table width="324" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                              <td><div align="center">
                                                  <input name="matrik" type="hidden" id="matrik" value="<? echo $rows['matrik']; ?>" />
                                                  <table width="150" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td>&nbsp;</td>
                                                    </tr>
                                                  </table>
                                                <table width="153" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="67">&nbsp;</td>
                                                      <td width="17"><input type="submit"  value="Update" /></td>
                                                      <td width="55" height="17"><a href="maklumatPelajar1.php"><input type="button" value="Reset" /></a></td>
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
                                <td width="10">&nbsp;</td>
                              </tr>
                            </table>
                          </div></td>
                        </tr>
                      </table>
                     
                    </div>
                  </form>                  </td>
              </tr>
            </table>
            <?

					// close connection
					mysql_close();
					
					?>
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


