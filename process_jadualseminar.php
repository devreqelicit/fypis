<?php

	$typeId = $_POST['type_id'];
	
	
	if($typeId != NULL){
	
		include('connection/con_db.php');
		
		$query = mysql_query("SELECT * FROM year_of_project WHERE id = '".$typeId."'");
		$result = mysql_fetch_assoc($query);
		?>
		
		<table class="form">
			<tr>
				<td style="width:150px">Title:</td>
				<td><?php echo $result['title']; ?></td>
			</tr>
			<tr>
				<td style="width:150px">Day:</td>
				<td>Day - <?php echo $result['day']; ?></td>
			</tr>
			<tr>
				<td style="width:150px">Date:</td>
				<td><?php echo date('d M Y', strtotime($result['date'])); ?></td>
			</tr>
			<tr>
				<td style="width:150px">Venue:</td>
				<td><?php echo $result['venue']; ?></td>
			</tr>
			<tr>
				<td style="width:150px">Chairperson:</td>
				<td><?php echo $result['chairperson']; ?></td>
			</tr>
			<tr>
				<td style="width:150px">Timekeeper:</td>
				<td><?php echo $result['timekeeper']; ?></td>
			</tr>
		</table>
		<div style="float:right;"><a href="penyelaras_jadualseminar.php?action=<?php echo $result['id']; ?>" class="button">Update</a></div>
		<br /><br />
		<br /><br />
		
		<table class="list">
			<thead>
				<tr>
					<td class="right" style="width:50px;">No</td>
					<td class="left"  style="width:60px;">Matric</td>
					<td class="left">Project</td>
					<td class="right">Status</td>
					<td class="right" style="width:100px;">Action</td>
				</tr>
			</thead>
			<tbody>
				<?php 
					include('connection/con_db.php');
					
					$year_of_semester = $result['year_of_semester'];
					// Join and check by semester
					$query = mysql_query("SELECT 	maklumatpelajar.matrik,
													addproject.tajukProjek
										  FROM maklumatpelajar				
										  LEFT JOIN addproject ON maklumatpelajar.matrik = addproject.matrik
										  WHERE maklumatpelajar.semester = '".$year_of_semester."' ORDER BY maklumatpelajar.matrik ASC");
					
					$query3 = mysql_query("SELECT * FROM year_of_project WHERE id = '".$typeId."'");
					$result_day = mysql_fetch_assoc($query3);
					
					$day = $result_day['day'];	
					
					// Check table row first
					if(mysql_num_rows($query) == 0){
						echo '<tr><td class="center" colspan="4">No Record</td></tr>';
					}else{
						$no = 1;
						while($result = mysql_fetch_assoc($query)){
							$matric_no = $result['matrik'];
							echo "<tr>";
							echo "<td class='right'>".$no."</td>";
							echo "<td class='left' style='width:60px;'>".$result['matrik']."</td>";
							echo "<td class='left'>".$result['tajukProjek']."</td>";
							echo "<td class='right' style='width:40px;'>";
									$query1 = mysql_query("SELECT * FROM presentation_schedule WHERE student_id = '".$matric_no."'");

									if(mysql_fetch_row($query1) == 0){
										echo "<img src='images/not_done.png' width='20px'>";
									}else{
										echo "<img src='images/done.png' width='20px'>";
									}
										
							echo "</td>";
							echo "<td class='right'>
									[ <a href='penyelaras_jadualseminar.php?id=$matric_no&day=$day' >Edit</a> ]
							      </td>";
							echo "</tr>";
							$no++;
						}
					}					
				?>
			</tbody>
		</table>
		<?php
	}

?>