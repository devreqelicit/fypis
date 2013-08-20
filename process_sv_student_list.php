<style type="text/css">

.progress-img{
	border: 1px solid #DDDDDD;
	margin-top: 50px;
}
</style>

<?php

	include('connection/con_db.php');

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
										addproject.progress_id,
										addproject.tahun,
										addproject.semester
								FROM maklumatpelajar
								LEFT JOIN addproject ON addproject.matrik = maklumatpelajar.matrik		
								WHERE maklumatpelajar.matrik = '".$std_id."'")or die(mysql_error());
		$result = mysql_fetch_assoc($query);
	
		?>
		
		<div class="vtabs">
			<a href="#tab-student">Student Information</a>
			<a href="#tab-project">Project Information</a>
			<a href="#tab-progress">Progress Overview</a>
		</div>
		<div id="tab-student" class="vtabs-content">
			<table class="form">
				<tr>
					<td style="width: 100px;">Name:</td>
					<td><?php echo $result['nama']; ?></td>
				</tr>
				<tr>
					<td style="width: 100px;">Matric No:</td>
					<td><?php echo $result['matrik']; ?></td>
				</tr>
				<tr>
					<td style="width: 100px;">Email:</td>
					<td><?php echo $result['emel']; ?></td>
				</tr>
				<tr>
					<td style="width: 100px;">Phone No:</td>
					<td><?php echo $result['notelefon']; ?></td>
				</tr>
			</table>
		</div>
		<div id="tab-project" class="vtabs-content">
			<table class="form">
				<tr>
					<td style="width: 100px;">Title:</td>
					<td><?php echo $result['tajukProjek']; ?></td>
				</tr>
				<tr>
					<td style="width: 100px;">Description:</td>
					<td><?php echo $result['penerangan']; ?></td>
				</tr>
				<tr>
					<td style="width: 100px;">Semester:</td>
					<td><?php echo $result['year_of_semester']; ?>
					</td>
				</tr>
			</table>
		</div>
		<div id="tab-progress" class="vtabs-content">
			<table class="form">
				<?php

					if($result['progress_id'] == 0)
						echo '<img src="images/progress/10.png" class="progress-img" />';
					if($result['progress_id'] == 1)
						echo '<img src="images/progress/30.png" class="progress-img" />';
					if($result['progress_id'] == 2)
						echo '<img src="images/progress/50.png" class="progress-img" />';
					if($result['progress_id'] == 3)
						echo '<img src="images/progress/70.png" class="progress-img" />';
					if($result['progress_id'] == 4)
						echo '<img src="images/progress/90.png" class="progress-img" />';
					if($result['progress_id'] > 4 )
						echo '<img src="images/progress/100.png" class="progress-img" />';
											 
				?>
				
			</table>
		</div>
		
		
		<?php
		
		
	} else {
		$msg_error = 1;
		echo "<div class='style-error'>".$error."</div>";
		
	}

?>
<script type="text/javascript" src="tabs.js"></script>
<script type="text/javascript">
	<!--
	$('.vtabs a').tabs();
	//-->
</script>
