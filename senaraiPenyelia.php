<?php

####################################
#	Modified by: Hilmi Azli 	   #
#	Date: Febuary 2013			   #	
#	Email: hilmiazli@gmail.com	   #	
####################################

session_start();
// DB Connection


// Check login
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}

require_once('header.php');

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

	<!-- content -->

	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/pengguna.png" style="margin-right: 10px;"/>List Of Supervisor</div>
		<div id="content">
			<div style="margin-right:10px;margin-top:5px;margin-bottom:20px;float:right;"><a href="daftarPenyelia.php" class="button">Register</a></div>
			<div class="clear"></div>
			<table class="list">
				<thead>
					<tr>
						<td class="left">Supervisor Name</td>
						<td class="right" width="150px">No Of Student</td>
						<td class="right" width="100px">Total Quota</td>
						<td class="right" width="100px">Status</td>
						<td class="right" width="100px">Action</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
							
							include('connection/con_db.php');

							// Create pagination to filter results 
							$display_page = 10;
							// Create page count
							$pages_query = mysql_query("SELECT COUNT('staffId') FROM maklumatpenyelia");
							$pages = ceil(mysql_result($pages_query, 0) / $display_page);
							
							
							// Create page link
							$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
							$start = ($page - 1) * $display_page;
							
							// Create Query 							
							$sql = "SELECT * FROM maklumatpenyelia ORDER BY id ASC LIMIT $start, $display_page";
							$query = mysql_query($sql);
							
							$records = mysql_num_rows($query);
							
							while($result = mysql_fetch_array($query)){
								$id = $result['staffId'];
								echo "<tr>";
								echo "<td class='left'>".$result['namaPenyelia']."</td>";
								echo "<td class='right' width='150px'>".$result['noOfStudent']."</td>";
								echo "<td class='right' width='100px'>".$result['kuota']."</td>";
								echo "<td class='right' width='100px'>";
									 
									if($result['noOfStudent'] == $result['kuota'])
										echo "<font color='red'>Unavailable</font>";
									else
										echo "<font color='green'>Available</font>";
									  	
								echo "</td>";
								echo "<td class='right' width='100px'>[ <a href='editPenyelia.php?action_edit=$id' id='edit'>Edit</a> ] [ <a href='#' onclick=\"window.open('view_penyelia.php?action_detail=$id','', 'width=900, height=700, location=no, menubar=no, status=no,toolbar=no, scrollbars=no, resizable=no' ); return false\">View</a> ]</td>";
								echo "<tr>";
							}

						?>
					</tr>
				</tbody>
			</table>
			<?php
				// Display Pagination
				echo "<div id='pagi-wrap'>";

				if( $pages >= 1 && $page <= $pages ){
					for ( $x = 1; $x <= $pages; $x++ ){
							
						echo ( $x == $page ) ? "<div class='pagination'><a href='?page=".$x."'><div class='visited'>".$x."</div><a/></div>" : "<div class='pagination'><a href='?page=".$x."'>".$x."<a/></div>" ;
					}
					echo "<div class='total-record'>Total Record(s):  ".$records."</div>";
					echo "</div>";	
 				} else { echo "<script>location.href='senaraiPenyelia.php'</script>"; }
	
			?>
			<div class="clear"></div>
			<br />
		</div>
	</div>


<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>