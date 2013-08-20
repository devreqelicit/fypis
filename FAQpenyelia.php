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
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style42 {color: #990000}
.style49 {font-size: large}
.style54 {
	color: #000000;
	font-weight: bold;
	font-size: 14px;
}
.style56 {	color: #0000FF;
	font-size: 14px;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script></head>


<body>
<div align="center"><br />
  <table width="1003" height="563" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="997" height="504" bgcolor="#FFFFFF"><table width="998" height="561" border="0" cellpadding="0" cellspacing="0">
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
            <td width="998" height="333" bgcolor="#FFFFFF"><div align="center">
              <?php include("footer/menupenyelia2.php"); ?>
              <table width="806" height="335" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                <tr>
                  <td width="800" height="331"><table width="216" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="13" class="style34">&nbsp;</td>
                        <td width="28" height="18" class="style34"><div align="center"><img src="menu/question-mark3a.png" width="36" height="45" /></div></td>
                        <td width="175" class="style34">&nbsp;<span class="style35">.: F.A.Q :.</span></td>
                      </tr>
                    </table>
                      <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="190">&nbsp;</td>
                        </tr>
                      </table>
                    <div align="center">
                        <table width="800" border="0" cellpadding="0" cellspacing="0" bor="bor"">
                          <tr>
                            <td width="731" bgcolor="#FFFFFF"><div align="center">
                                <table width="713" border="2" bordercolor="#990000" bgcolor="#cc6666" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="707" height="231" bgcolor="#FFCCCC"><div align="center"><br />
                                            <div align="center">
                                              <table width="679" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td>&nbsp;</td>
                                                  <td><?php
				$host = "localhost";// Host name
				$username = "root";// Mysql username
				$password = "root123";// Mysql password
				$db_name = "smppta";// Database name
				$tbl_name="faq";// Table name
			
						
					// Connect to server and select database.
						mysql_connect("$host", "$username", "$password")or die("cannot connect");
						mysql_select_db("$db_name")or die("cannot select DB");
						
						// how many rows to show per page
$rowsPerPage = 4;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
    $pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

$query = "SELECT * FROM faq LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed');
?>
                                                      <?php
$bil=$offset+1;
while($row = mysql_fetch_array($result))
{
?></td>
                                                </tr>
                                                <tr>
                                                  <td width="27" height="22" bgcolor="#FFCCCC"><span class="style54"><? echo $bil ?>.</span></td>
                                                  <td width="652" bgcolor="#FFCCCC"><table width="72" border="0" cellpadding="0">
                                                    <tr>
                                                      <td width="68" bgcolor="#CC6666"><div align="center"><span class="style49"><span class="style35"><span class="style26">Soalan</span></span></span></div></td>
                                                    </tr>
                                                  </table></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#FFCCCC">&nbsp;</td>
                                                  <td height="35" bgcolor="#FFCCCC" class="style26"><? echo $row['faq']; ?></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#FFCCCC" class="style35">&nbsp;</td>
                                                  <td height="22" bgcolor="#FFCCCC" class="style35"><table width="73" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td width="73" bgcolor="#66FFFF"><div align="center"><span class="style56">Jawapan</span></div></td>
                                                    </tr>
                                                  </table></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#FFCCCC">&nbsp;</td>
                                                  <td height="38" bgcolor="#FFCCCC"><? echo $row['answer']; ?>
                                                    <hr /></td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#FFCCCC">&nbsp;</td>
                                    <td><div align="center">
                                                      <?php
										$bil++;
								   }
								   ?>
                                                  </div></td>
                                                </tr>
                                              </table>
                                              <?php
                                // how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM faq";
$result  = mysql_query($query) or die('Error, query failed');
$row     = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows/$rowsPerPage);

// print the link to access each page
$self = $_SERVER['PHP_SELF'];
$nav  = '';

for($page = 1; $page <= $maxPage; $page++)
{
   if ($page == $pageNum)
   {
      $nav .= " $page "; // no need to create a link to current page
   }
   else
   {
      $nav .= " <a href=\"$self?page=$page\">$page</a> ";
   }
}

// creating previous and next link
// plus the link to go straight to
// the first and last page

if ($pageNum > 1)
{
   $page  = $pageNum - 1;
   $prev  = " <a href=\"$self?page=$page\">[Sebelum]</a> ";

   $first = " <a href=\"$self?page=1\">[Pertama]</a> ";
}
else
{
   $prev  = '&nbsp;'; // we're on page one, don't print previous link
   $first = '&nbsp;'; // nor the first page link
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = " <a href=\"$self?page=$page\">[Seterusnya]</a> ";

   $last = " <a href=\"$self?page=$maxPage\">[Akhir]</a> ";
}
else
{
   $next = '&nbsp;'; // we're on the last page, don't print next link
   $last = '&nbsp;'; // nor the last page link
}

// print the navigation link
echo $first . $prev . $nav . $next . $last;
								?>
                                              <br />
                                              <?php

					// close connection
					mysql_close();
					
					?>
                                              <br />
                                            </div>
                                    </div></td>
                                  </tr>
                                </table>
                              <br />
                            </div></td>
                          </tr>
                        </table>
                    </div></td>
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