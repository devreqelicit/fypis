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
.style43 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 16px;
}
.style44 {font-size: 13px}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- jquery -->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
<script>
	//check PADAM button Yes,No
    function confirmDelete(link) {
        if (confirm("Are you sure?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>
</head>
<body>
<div align="center"><br>
  <table width="1004" height="565" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="561" bgcolor="#FFFFFF"><table width="998" height="559" border="0" cellpadding="0" cellspacing="0">
          <tr>
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
          </tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><?php include("footer/matrik.php"); ?></td>
        </tr>
        <tr>
          <td width="998" height="251" bgcolor="#FFFFFF">
			<div align="center">
				<?php include("footer/menu2.php"); ?><br />
			
				<!-- content -->
				<div id="content-wrapper">
					<?php 
					
						include('connection/con_db.php');
						
						$student_id = isset($_SESSION['matrik']) ? $_SESSION['matrik'] : "";
						
						$query = mysql_query("SELECT * FROM maklumatpelajar WHERE matrik ='".$student_id."'"); 
						$row = mysql_fetch_assoc($query);
						
						
						// get student list
						function get_student($supervisor){
							$output = "";
							$query = mysql_query("	SELECT 	maklumatpelajar.nama,
															maklumatpelajar.matrik
													FROM maklumatpenyelia
													LEFT JOIN maklumatpelajar ON maklumatpenyelia.staffId = maklumatpelajar.penyelia_id
													WHERE maklumatpenyelia.staffId = '".$supervisor."'");
							
							$no = 1;
							
								while($result = mysql_fetch_assoc($query)){
									$output .= $no . ") " .$result['matrik'] . " - " . $result['nama'] . "<br />";
									$no++;
								}

								return $output;
							
						}
						
						if(isset($_GET['add'])){	
							
							$svId = isset($_GET['add']) ? $_GET['add']  : "";
							
							mysql_query("UPDATE maklumatpelajar SET penyelia_id = '".$svId."' WHERE matrik = '".$student_id."'")or die(mysql_error());
							// update quota
							$query = mysql_query("SELECT * FROM maklumatpenyelia WHERE staffId = '".$svId."'");
							$row1 = mysql_fetch_assoc($query);
							$curr_quota = $row1['noOfStudent'];
							// Add 
							$curr_quota = $curr_quota + 1;
							mysql_query("UPDATE maklumatpenyelia SET noOfStudent = '".$curr_quota."' WHERE staffId = '".$svId."'");
							
							
							
							echo "<script>alert('You have been successfully added your supervisor!');</script>";
							echo "<meta http-equiv='Refresh' content='1;url=std_supervisor.php'/>";
						}
					
					?>
					<div class="section-title" style="text-align:left;margin-left: 20px;">Supervisor Information</div>
					<br />
					<?php if($row['penyelia_id'] == 0){ ?>
					<div class="warning-supervisor">You don't have any supervisor. Please choose your supervisor.</div>
					 
					<div id="add_supervisor">
						<div class="box" style="width: 90%;margin-top: 30px;">
						<div class="heading"><h1></h1></div>
						<div class="content">
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
												echo "<td class='right' width='150px'>";
												if($result['noOfStudent'] > 0){
													echo "<div class='tooltip_wrap'><strong>".$result['noOfStudent']."</strong>";
													echo "<div class='tooltip_content'>".get_student($id)."</div></div>"; 
												} else {
													echo "<font color='#9a9a9b'>".$result['noOfStudent']."</font>";
												}
												echo "</td>";
												echo "<td class='right' width='100px'>".$result['kuota']."</td>";
												echo "<td class='right' width='100px'>";
													 
													if($result['noOfStudent'] == $result['kuota'])
														echo "<font color='red'>Unavailable</font>";
													else
														echo "<font color='green'>Available</font>";
														
												echo "</td>";
												
												echo "<td class='right' width='100px'>";
												if($result['noOfStudent'] == $result['kuota']){
													echo "&nbsp;";
												}else{
													echo "[ <a href='std_supervisor.php?add=$id' onclick='return confirmDelete(this);'>Select</a> ]"; 
												}
												echo "</td>";
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
						</div>
					</div>	
					<?php } else{ ?>
						<?php 
						
							include('connection/con_db.php');
							
							$query = mysql_query("	SELECT 	maklumatpenyelia.namaPenyelia,
															maklumatpenyelia.notelefon,
															maklumatpenyelia.emel,
															maklumatpenyelia.nobilik,
															maklumatpenyelia.kepakaran
													FROM maklumatpelajar
													LEFT JOIN maklumatpenyelia ON maklumatpelajar.penyelia_id = maklumatpenyelia.staffId
													WHERE matrik = '".$student_id."'");
														
							$result = mysql_fetch_assoc($query);
						?>
						<br /><br />
						<div style="width: 90%;">	
							<table class="form">
								<tr>
									<td style="width: 100px;">Supervisor:</td>
									<td><?php echo $result['namaPenyelia']; ?></td>
								</tr>
								<tr>
									<td style="width: 100px;">Phone No:</td>
									<td><?php echo $result['notelefon']; ?></td>
								</tr>
								<tr>
									<td style="width: 100px;">Email:</td>
									<td><?php echo $result['emel']; ?></td>
								</tr>
								<tr>
									<td style="width: 100px;">Room No:</td>
									<td><?php echo $result['nobilik']; ?></td>
								</tr>
								<tr>
									<td style="width: 100px;">Expertise:</td>
									<td><?php echo $result['kepakaran']; ?></td>
								</tr>
							</table>
						</div>
						<br /><br />
						<div class="overview" style="width:90%;margin-left: 40px;">
							<div class="dashboard-heading">Student Progress</div>
							<div class="dashboard-content">
								<div class="student-note">Note: Please update current status/progress to your supervisor</div>
								<?php 
									include('connection/con_db.php');
									date_default_timezone_set('Asia/Kuala_Lumpur');
									// get data
									$query1 = mysql_query("SELECT * FROM progress_report ORDER BY id ASC");
									
									
									
									if(isset($_GET['submit']) ){
										
										$student_id = isset($_GET['submit']) ? $_GET['submit'] : "";
										$time = date('H:i');
										$date = date('Y-m-d');
										
										mysql_query("UPDATE  addproject SET progress_status = 'Pending',
																			progress_date = '".$date."',
																			progress_time = '".$time."'
													 WHERE  matrik = '".$student_id."'")or die(mysql_error());								
										
										echo "<script>alert('You have submitted your progress. Thank You!');</script>";
										echo "<meta http-equiv='Refresh' content='1;url=std_supervisor.php'/>";
										
									}
									
								
								?>
								<table class="progress-content">
									<thead>
										<tr>
											<td class="center"><span><strong>Progress</strong></span></td>
											<td class="center" style="width: 100px;"><span><strong>&nbsp;</strong></span></td>
										</tr>
									</thead>
									<tbody>
										<?php
										
											$student_id = isset($_SESSION['matrik']) ? $_SESSION['matrik'] : "";
											
											$query2 = mysql_query("SELECT * FROM addproject WHERE matrik = '".$student_id."'");
											$result = mysql_fetch_assoc($query2);
											$staffids = $result['staffIId'];
											$stage = 0;
											$no = 1;
											$progress_level = 0;
											while($result_progress = mysql_fetch_assoc($query1)){
												echo "<tr>";
												echo "<td class='left'><div class='desc'>".$no." - ".$result_progress['progress_name']."</div></td>";
												if(($result['progress_id'] == $progress_level) && $result['progress_status'] == NULL && $stage == 0){
													echo "<td class='center' style='width: 100px;'><span><strong><a href='std_supervisor.php?submit=$student_id&staffid=$staffids'>Submit</a></strong></span></td>";
													$stage = 1;
												}else if(($result['progress_id'] == $progress_level) && $result['progress_status'] == 'Pending' && $stage == 0){
													echo "	<td class='center' style='width: 100px;'>
															<div class='loading-content'>
																
																<div class='load-desc' style='color: red'><strong>Waiting for approval</strong></div>
															</div>
															</td>";
													$stage = 1;		
												}else{
													echo "<td class='center' style='width: 100px;'><span><strong><font color='#dedbdc'>Submit</font></stron></span></td>";
												}	
												echo "</tr>";
												$progress_level++;
												$no++;
											}
										
										?>
						
									</tbody>
								</table>
						</div>
			</div>
					<?php } ?>
				</div>
		 </td>
        </tr>
        
  <td height="18" bgcolor="#FFFFFF"><?php include("footer/footer.php"); ?></td>
  </tr>
      </table></td>
    </tr>
  </table>
</div>
<div align="left"></div></body>
</html>

