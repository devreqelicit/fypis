<style type="text/css">
<!--
.style25 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<div align="center">
  <table width="986" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="28" height="26"><img src="icons/pengguna.png" width="20" height="20" /></td>
      <font face="tahoma" size="2" color="#FFFFFF">
      <td width="90"><span class="style25">Logged in as</span></td>
        <td width="8"><span class="style25">:</span></td>
        <td width="1050" class="style25"><font face="tahoma" size="1" color="#FFFFFF"><strong>&nbsp;&nbsp;
          <?php

include('connection/con_db.php');

$matrik=$_SESSION['matrik'];


// Retrieve data from database 
$sql="SELECT * FROM maklumatpelajar WHERE matrik='".$matrik."'";
$result=mysql_query($sql);
// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){

?>
          <? echo $rows['nama'] . " - " . $rows['matrik']; ?>
          <?

// close while loop 
}

// close connection 
mysql_close();
?>
        </strong></font></td>
        <td width="80" class="style25" ><div align="right">
          <table width="190" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="140">
				<div align="right"><strong><font face="tahoma" size="1" color="#FFFFFF"><?php include("footer/hari.php"); ?> </font></strong></div>
			  </td>
			  <td width="10" align="center"><strong><font face="tahoma" size="1" color="#FFFFFF">-</font></strong></td>
              <td width="20"><div align="left"><strong><font face="tahoma" size="1" color="#FFFFFF">
                <?php include("footer/jam.php"); ?>
              </font></font></strong></div></td>
            </tr>
          </table>
        </div></td>
      </font>    </tr>
  </table>
</div>

