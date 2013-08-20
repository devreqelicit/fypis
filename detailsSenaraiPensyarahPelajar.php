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
.style26 {
	color: #000000
}
.style31 {color: #990000}
.style55 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style70 {font-size: small}
.style71 {font-size: small; font-weight: bold; font-style: italic; }
.style72 {font-size: 12px}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="464" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="460" bgcolor="#FFFFFF"><table width="998" height="458" border="0" cellpadding="0" cellspacing="0">
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
          <td height="17" bgcolor="#990000" class="style26"><div align="center">
            <table width="972" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="114"><span class="style31">
                  <?php include("footer/matrik.php"); ?>
                </span></td>
                <td width="858"><div align="center"></div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td width="1282" height="236" bgcolor="#FFFFFF"><div align="center">
            <table width="985" border="0">
              <tr>
                <td width="979"></td>
              </tr>
            </table>
            <table width="988" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="978"><div align="center"><?php include("footer/menu2.php"); ?></div></td>
              </tr>
            </table><br>
            <table width="798" height="24" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="31">&nbsp;</td>
                <td width="735">
                  <table width="671" height="120" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
                    <tr>
                      <td width="665" height="116"><div align="center">
                        <div align="left"><br>
                          <table width="216" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="13" class="style55">&nbsp;</td>
                                    <td width="28" height="41" class="style55"><div align="center"><img src="menu/lists.png" width="40" height="41"></div></td>
                                    <td width="175" class="style55">&nbsp;<span class="style35">.: Senarai Penyelia :.</span></td>
                                  </tr>
                                </table>
                          <table width="200" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="190"><?php

$host = "localhost";
$username = "root"; 	
$password = "root";
$db_name = "smppta";
$tbl_name="maklumatpenyelia";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");


						
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
	
// how many rows to show per page
$rowsPerPage = 10;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
    $pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

$query = "SELECT * FROM maklumatpenyelia LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed');	
	
					
?></td>
                                  </tr>
                                </table><br>
                          <div align="center">
                            <table width="603" height="62" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="34" height="26" bgcolor="#CCCCCC">&nbsp;</td>
                                <td width="481" bgcolor="#CCCCCC"><strong>Nama Penyelia</strong></td>
                                <td width="123" bgcolor="#CCCCCC">&nbsp;</td>
                              </tr>
                              <?php
								$bil=1;
								while($rows = mysql_fetch_array($result))
								{
								?>
                              <tr>
                                <td height="35" bgcolor="#FFCCFF"><div align="center" class="style71 style26 style70"><span class="style26"><? echo $bil ?>.</span></div></td>
                                <td bgcolor="#FFCCFF"><strong><span class="style70"><? echo $rows['namaPenyelia']; ?></span></strong></td>
                                <td bgcolor="#FFCCFF"><div align="center" class="style71"><a href="maklumatPeribadiPenyeliaPelajarView.php?staffId=<? echo $rows['staffId']; ?>" class="style72">Profil</a>
                                  <?php
										$bil++;
								   }
								   ?>
</div></td>
                              </tr>
                            </table>
                            <?php
                                // how many rows we have in database
$query   = "SELECT COUNT(staffId) AS numrows FROM maklumatpenyelia";
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
   $prev  = " <a href=\"$self?page=$page\" title='Prev' style='text-decoration:none;'><</a> ";

   $first = " <a href=\"$self?page=1\" title='First' style='text-decoration:none;'><<</a> ";
}
else
{
   $prev  = '&nbsp;'; // we're on page one, don't print previous link
   $first = '&nbsp;'; // nor the first page link
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = " <a href=\"$self?page=$page\" title='Next' style='text-decoration:none;'>></a> ";

   $last = " <a href=\"$self?page=$maxPage\" title='Last' style='text-decoration:none;'>>></a> ";
}
else
{
   $next = '&nbsp;'; // we're on the last page, don't print next link
   $last = '&nbsp;'; // nor the last page link
}

// print the navigation link
echo $first . $prev . $nav . $next . $last;
								?>
                            <br>
                        </div></div>
                        <br>
                            </div></td>
                    </tr>
                  </table>
                  
                </td>
                <td width="32">&nbsp;</td>
              </tr>
            </table>
          <?php

		// close connection
		mysql_close();
					
		?>
            <br>
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

