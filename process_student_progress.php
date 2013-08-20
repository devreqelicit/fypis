<?php

	include('connection/con_db.php');
	global $std_id;
	// Get student id
	$std_id = $_POST['select-student'];
	$error = "";


	if(empty($std_id))
		$error = "Error: Please select your student";
		
	if($error == ""){
	
		$query = mysql_query("	SELECT	maklumatpelajar.nama,
										maklumatpelajar.matrik,
										maklumatpelajar.emel,
										maklumatpelajar.notelefon,
										maklumatpelajar.semester AS 'year_of_semester',
										addproject.tajukProjek,
										addproject.penerangan,
										addproject.tahun,
										addproject.progress_id,
										addproject.progress_status,
										addproject.progress_date,
										addproject.progress_time,
										addproject.semester
								FROM maklumatpelajar
								LEFT JOIN addproject ON addproject.matrik = maklumatpelajar.matrik	
								WHERE maklumatpelajar.matrik = '".$std_id."'")or die(mysql_error());
		$result = mysql_fetch_assoc($query);

	
		?>
			<script type="text/javascript"><!--//  
				  $(document).ready(function(){  
						$("#sub_approve").submit(function(event) {  
						
							/* stop form from submitting normally */  
							event.preventDefault();   

							$.ajax({
								type:'POST',
								url:'process_approve.php',
								data:$("#sub_approve").serialize(),
								success:function(data) {
									$("#result_approve").html(data);
								}  
							});
						});
					});  
			//--></script>
			<div id="content">
				<div style="text-align:left;width:100%;"><strong>Student Details</strong></div>
				<br />
				<table class="form">
					<tr>
						<td>Name:</td>
						<td><?php echo $result['nama']; ?></td>
					</tr>
					<tr>
						<td>Matric No:</td>
						<td><?php echo $result['matrik']; ?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?php echo $result['emel']; ?></td>
					</tr>
					<tr>
						<td>Project Title:</td>
						<td><?php echo $result['tajukProjek']; ?></td>
					</tr>
					<tr>
						<td>Current Progress/Status:</td>
						<td>
							<?php 
								if($result['progress_id'] == 0){
									echo "Proposal";
								}else if($result['progress_id'] > 4){
									echo "Complete";
								}else{
									// Display current progress
									$new_prog = $result['progress_id'] + 1;
									$query3 = mysql_query("	SELECT * FROM progress_report WHERE  id = '".$new_prog."'");
																
									$curr_prog = mysql_fetch_array($query3);
									
									echo $curr_prog['progress_name'];
								}		
							?>
						</td>
					</tr>
				</table>
				<form action="" id="sub_approve" method="post">
					<div class="clear"></div>
					<br />
					<div style="text-align:left;width:100%;"><strong>Progress Request</strong></div>
					<br />
					<div id="result_approve"></div>
					<table class="list">
						<thead>
							<tr>
								<td>Completed By Student</td>
								<td style="width: 50px;">Status</td>
								<td style="width: 250px;">Comment</td>
								<td style="width: 30px;"></td>
							</tr>
						</thead>
						<tbody>

								<?php
									
									function get_date_time($id){
										$output = "";
										
										$query = mysql_query("SELECT * FROM addproject WHERE matrik = '".$id."'");
										$row = mysql_fetch_assoc($query);
										
										$date = date('d M Y',strtotime($row['progress_date']));
										$time = date('h:i a',strtotime($row['progress_time']));
										
										$output .= "Submitted at <strong>" . $date . ", " . $time . "</strong>";
										
										return $output;
									}
									
									
									
									$query2 = mysql_query("SELECT 	progress_report.progress_name,
																	progress_report.id
														   FROM addproject
														   LEFT JOIN progress_report ON progress_report.id = addproject.progress_id
														   WHERE addproject.matrik = '".$std_id."'");
									
									$row = mysql_fetch_array($query2);
										echo "<tr>";
										if($result['progress_id'] == 0 && $result['progress_status'] == 'Pending'){
											echo	"<td class='left'>
													 <div class='progress_wrap'><strong><u>".$row['progress_name']."</u></strong>
													 <div class='progress_content'>".get_date_time($result['matrik'])."</div></div>
													 </td>
													 <td class='left' style='width: 150px;'>
													 <font color='red'>Waiting for approval</font>		
													 </td>
													 <td class='left' style='width: 250px;'>
													 <textarea rows='2' cols='30' name='comment'></textarea>
													 </td>
													 <td class='center' style='width: 30px;'>
													 <input type='hidden' name='student_id' value='".$result['matrik']."'/>
													 <input type='hidden' name='progress_id' value='".$row['id']."'/>
													 <input type='hidden' name='std_prog_id' value='".$result['progress_id']."'/>
													 <input type='submit' name='submit_progress' class='button' value='Approve' onclick='return confirmApprove(this);'/>
													 </td>
													 </tr>";
										} 
										if($result['progress_id'] == 1 && $result['progress_status'] == 'Pending'){
											echo	"<td class='left'>
													 <div class='progress_wrap'><strong><u>".$row['progress_name']."</u></strong>
													 <div class='progress_content'>".get_date_time($result['matrik'])."</div></div>
													 </td>
													 <td class='left' style='width: 150px;'>
													 <font color='red'>Waiting for approval</font>		
													 </td>
													 <td class='left' style='width: 250px;'>
													 <textarea rows='2' cols='30' name='comment'></textarea>
													 </td>
													 <td class='center' style='width: 30px;'>
													 <input type='hidden' name='student_id' value='".$result['matrik']."'/>
													 <input type='hidden' name='progress_id' value='".$row['id']."'/>
													 <input type='hidden' name='std_prog_id' value='".$result['progress_id']."'/>
													 <input type='submit' class='button' name='submit_progress' value='Approve' onclick='return confirmApprove(this);'>
													 </td>
													 </tr>";
										}
										if($result['progress_id'] == 2 && $result['progress_status'] == 'Pending'){
											echo	"<td class='left'>
													 <div class='progress_wrap'><strong><u>".$row['progress_name']."</u></strong>
													 <div class='progress_content'>".get_date_time($result['matrik'])."</div></div>
													 </td>
													 <td class='left' style='width: 150px;'>
													 <font color='red'>Waiting for approval</font>		
													 </td>
													 <td class='left' style='width: 250px;'>
													 <textarea rows='2' cols='30' name='comment'></textarea>
													 </td>
													 <td class='center' style='width: 30px;'>
													 <input type='hidden' name='student_id' value='".$result['matrik']."'/>
													 <input type='hidden' name='progress_id' value='".$row['id']."'/>
													 <input type='hidden' name='std_prog_id' value='".$result['progress_id']."'/>
													 <input type='submit' class='button'  name='submit_progress' value='Approve' onclick='return confirmApprove(this);'>
													 </td>
													 </tr>";
										}
										if($result['progress_id'] == 3 && $result['progress_status'] == 'Pending'){
											echo	"<td class='left'>
													 <div class='progress_wrap'><strong><u>".$row['progress_name']."</u></strong>
													 <div class='progress_content'>".get_date_time($result['matrik'])."</div></div>
													 </td>
													 <td class='left' style='width: 150px;'>
													 <font color='red'>Waiting for approval</font>		
													 </td>
													 <td class='left' style='width: 250px;'>
													 <textarea rows='2' cols='30' name='comment'></textarea>
													 </td>
													 <td class='center' style='width: 30px;'>
													 <input type='hidden' name='student_id' value='".$result['matrik']."'/>
													 <input type='hidden' name='progress_id' value='".$row['id']."'/>
													 <input type='hidden' name='std_prog_id' value='".$result['progress_id']."'/>
													 <input type='submit' class='button' name='submit_progress' value='Approve' onclick='return confirmApprove(this);'>
													 </td>
													 </tr>";
										}
										if($result['progress_id'] == 4 && $result['progress_status'] == 'Pending'){
											echo	"<td class='left'>
													 <div class='progress_wrap'><strong><u>".$row['progress_name']."</u></strong>
													 <div class='progress_content'>".get_date_time($result['matrik'])."</div></div>
													 </td>
													 <td class='left' style='width: 150px;'>
													 <font color='red'>Waiting for approval</font>		
													 </td>
													 <td class='left' style='width: 250px;'>
													 <textarea rows='2' cols='30' name='comment'></textarea>
													 </td>
													 <td class='center' style='width: 30px;'>
													 <input type='hidden' name='student_id' value='".$result['matrik']."'/>
													 <input type='hidden' name='progress_id' value='".$row['id']."'/>
													 <input type='hidden' name='std_prog_id' value='".$result['progress_id']."'/>
													 <input type='submit' class='button' name='submit_progress' value='Approve' onclick='return confirmApprove(this);'>
													 </td>
													 </tr>";
										}
										if($result['progress_id'] == 5 && $result['progress_status'] == 'Pending'){
											echo	"<td class='left'>
													 <div class='progress_wrap'><strong><u>".$row['progress_name']."</u></strong>
													 <div class='progress_content'>".get_date_time($result['matrik'])."</div></div>
													 </td>
													 <td class='left' style='width: 150px;'>
													 <font color='red'>Waiting for approval</font>		
													 </td>
													 <td class='left' style='width: 250px;'>
													 <textarea rows='2' cols='30' name='comment'></textarea>
													 </td>
													 <td class='center' style='width: 30px;'>
													 <input type='hidden' name='student_id' value='".$result['matrik']."'/>
													 <input type='hidden' name='progress_id' value='".$row['id']."'/>
													 <input type='hidden' name='std_prog_id' value='".$result['progress_id']."'/>
													 <input type='submit' class='button' name='submit_progress' value='Approve' onclick='return confirmApprove(this);'>
													 </td>
													 </tr>";
										}
										if($result['progress_id'] == 0 && $result['progress_status'] == NULL ||
										   $result['progress_id'] == 1 && $result['progress_status'] == NULL ||
										   $result['progress_id'] == 2 && $result['progress_status'] == NULL ||
										   $result['progress_id'] == 3 && $result['progress_status'] == NULL ||
										   $result['progress_id'] == 4 && $result['progress_status'] == NULL ||
										   $result['progress_id'] == 5 && $result['progress_status'] == NULL ){
											echo "<td colspan='4' class='center'>No Data</td>";
										}
										echo "</tr>";
									
									
								?>

							</form>
						</tbody>
					</table>
				</form>
			</div>
		
		<?php
		

	
	} else {
		$msg_error = 1;
		echo "<div class='style-error'>".$error."</div>";
		
	}

?>		
		