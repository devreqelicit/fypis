<style type="text/css">
<!--
.style25 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<div align="center">
  <table width="956" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="31" height="26"><img src="icons/pengguna.png" width="20" height="20" /></td>
      <font face="tahoma" size="2" color="#FFFFFF">
      <td width="51"><span class="style25"> ADMIN</span></td>
      <td width="12"><span class="style25">:</span></td>
    <td width="115" class="style25"><font face="tahoma" size="2" color="#FFFFFF"><strong>
          <?php

include('connection/con_db.php');

$id=$_SESSION['id'];


// Retrieve data from database 
$sql="SELECT * FROM admin WHERE id='".$id."'";
$result=mysql_query($sql);

// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){

?>
          <? echo $rows['id']; ?>
          <?

// close while loop 
}

// close connection 
mysql_close();
?>
        </strong></font></td>
      <td width="747" class="style25"><div align="right">
          <table width="208" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="114"><div align="center"><strong><font face="tahoma" size="2" color="#FFFFFF"><font face="tahoma" size="2" color="#FFFFFF"><font face="tahoma" size="2" color="#FFFFFF"><font face="tahoma" size="2" color="#FFFFFF"><font face="tahoma" size="2" color="#FFFFFF">
                <?php include("footer/hari.php"); ?>
              </font></font></font></font></font></strong></div></td>
              <td width="94"><div align="center"><strong><font face="tahoma" size="2" color="#FFFFFF"><font face="tahoma" size="2" color="#FFFFFF">
                <?php include("footer/jam.php"); ?>
              </font></font></strong></div></td>
            </tr>
          </table>
        </div></td>
      </font>    </tr>
  </table>
</div>

