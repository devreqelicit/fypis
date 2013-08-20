<?php 
session_start();
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}

require_once('header.php');
require_once('connection/con_db.php');

?>


<!-- header -->
<?php echo heading(); ?>

 
<table width="988" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978"><div align="center">
      <?php include("footer/menuPenyelaras.php"); ?>
    </div></td>
  </tr>
</table>
<br>
<table width="868" height="220" border="2" cellpadding="0" cellspacing="0" bordercolor="#333333">
  <tr>
    <td width="862" height="216"><table width="237" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td class="style34">&nbsp;</td>
        <td height="15" class="style34">&nbsp;</td>
        <td class="style34">&nbsp;</td>
      </tr>
      <tr>
        <td width="10" class="style34">&nbsp;</td>
        <td width="65" height="18" class="style34"><div align="center"><img src="menu/senaraiStudent.png" width="65" height="42"></div></td>
        <td width="262" class="style34">&nbsp;<span class="style35">.: Student Information :.</span></td>
      </tr>
    </table>
        <table width="200" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="190"><?php


$tbl_name="maklumatpelajar";

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

$query = "SELECT * FROM maklumatpelajar LIMIT $offset, $rowsPerPage";
$result = mysql_query($query) or die('Error, query failed');	
	
					
?>
</td>
          </tr>
        </table>
       

      <br>
        <div align="center"></div>
      <div align="center">
          <table width="832" height="126" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="15">&nbsp;</td>
              <td width="833"><div align="center">
                  <div align="center">
                    <table width="791" height="27" border="1"  bgcolor="#999999" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="393" bgcolor="#CCCCCC"><div align="center" class="style26"><span class="style35">Student Name</span></div></td>
                        <td width="114" bgcolor="#CCCCCC"><div align="center" class="style26"><span class="style35">Matric</span></div></td>
 
                        <td width="114" bgcolor="#CCCCCC"><div align="center"><span class="style26"><span class="style26"></span></span></div></td>
                      </tr>
                      <?php
					  $bil=1;
						while($rows=mysql_fetch_array($result)){
						?>
                    </table>
                    <table width="791" bgcolor="#CC9999" height="46" border="0"  cellpadding="0" cellspacing="0">
                     
                      <tr>
                        <td width="34"><div align="center" class="style48 style24">
                          <div align="center"><? echo $bil ?>.</div>
                        </div></td>
                        
                        <td width="311" height="46" bgcolor="#CC9999"><div align="left" class="style48">&nbsp;<? echo $rows['nama']; ?></div></td>
                        <td width="98"><div align="center" class="style48"><? echo $rows['matrik']; ?></div></td>

                        <td width="101"><div align="left" class="style50">
                            <div align="center"><a href="maklumatPelajarPenyelarasDetails.php?matrik=<? echo $rows['matrik']; ?>"><em>More &gt;&gt; </em></a></div>
                        </div></td>
                      </tr>
                      <?php 
					  $bil++;
					} 
					?>
                    </table>
                    <br>
                     <?php
                                // how many rows we have in database
$query   = "SELECT COUNT(matrik) AS numrows FROM maklumatpelajar";
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
   $prev  = " <a href=\"$self?page=$page\">[Prev]</a> ";

   $first = " <a href=\"$self?page=1\">[First]</a> ";
}
else
{
   $prev  = '&nbsp;'; // we're on page one, don't print previous link
   $first = '&nbsp;'; // nor the first page link
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = " <a href=\"$self?page=$page\">[Next]</a> ";

   $last = " <a href=\"$self?page=$maxPage\">[Last]</a> ";
}
else
{
   $next = '&nbsp;'; // we're on the last page, don't print next link
   $last = '&nbsp;'; // nor the last page link
}

// print the navigation link
echo $first . $prev . $nav . $next . $last;
								?><br>
                  </div>
              </div></td>
              <td width="11">&nbsp;</td>
            </tr>
          </table>
      </div></td>
  </tr>
</table>
<?php

		// close connection
		mysql_close();
					
		?>
<br>
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

