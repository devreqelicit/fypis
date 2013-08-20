<!DOCTYPE html>
<html>
<head>
<title>FYP Information System</title>
<link rel="stylesheet" type="text/css" href="report.css">
</head>
<body>

<?php require_once('../connection/con_db.php');

$semester = isset($_GET['semester']) ? $_GET['semester'] : "";

$query = mysql_query("SELECT * FROM year_of_project WHERE year_of_semester = '".$semester."'");
$row = mysql_fetch_assoc($query);

$day = $row['day'];

?>

<div style="page-break-after: always;">
	
	<div style="border-bottom: 1px solid #DDDDDD;width:100%;"></div>
	<br />
	<table class="store">
		<tr>
			<td>Report Title: <strong><?php echo $row['title']; ?></strong></td>
		</tr>
		<tr>
			<td>Date: <strong><?php echo date('d / m / Y',strtotime($row['date'])); ?></strong></td>
		</tr>
		<tr>
			<td>Day: <strong><?php echo  $row['day']; ?></strong></td>
		</tr>
		<tr>
			<td>Venue: <strong><?php echo $row['venue']; ?></strong></td>
		</tr>
		<tr>
			<td>Chairperson: <strong><?php echo $row['chairperson']; ?></strong></td>
		</tr>
		<tr>
			<td>Timekeeper: <strong><?php echo $row['timekeeper']; ?></strong></td>
		</tr>
	</table>
	<br />
	<br />
	<table class="content">
		<tr class="heading">
			<td width="30px">&nbsp;</td>
			<td>Time</td>
			<td>Matric</td>
			<td>Name</td>
			<td>Project</td>
			<td>Examiner</td>
			<td>Supervisor</td>
		</tr>
		<?php
		
			// Fetch student list for the selected day and semester
			$query1 = mysql_query("SELECT 	presentation_schedule.student_id,
											presentation_schedule.project_title,
											presentation_schedule.semester,
											presentation_schedule.time_from,
											presentation_schedule.time_until,
											presentation_schedule.day,
											presentation_schedule.supervisor_id,
											presentation_schedule.examiner_id,
											maklumatpelajar.nama
								   FROM presentation_schedule 
								   LEFT JOIN maklumatpelajar ON presentation_schedule.student_id = maklumatpelajar.matrik
								   WHERE presentation_schedule.semester = '".$semester."' AND presentation_schedule.day = '".$day."'")or die(mysql_error());
			$no = 1;
			while($result = mysql_fetch_assoc($query1)){
				$sv_id = $result['supervisor_id'];
				$ex_id = $result['examiner_id'];

				echo "<tr>";
				echo "<td width='30px' class='right'>".$no."</td>";
				echo "<td>".$result['time_from']." - ".$result['time_until']."</td>";
				echo "<td>".$result['student_id']."</td>";
				echo "<td>".$result['nama']."</td>";
				echo "<td>".$result['project_title']."</td>";
				// Get supervisor Id
				$query3 = mysql_query("SELECT maklumatpenyelia.namaPenyelia FROM presentation_schedule
								 LEFT JOIN maklumatpenyelia ON presentation_schedule.supervisor_id = maklumatpenyelia.staffId
								 WHERE presentation_schedule.supervisor_id = '".$sv_id."'");
				$sv = mysql_fetch_assoc($query3);
				// Get Examiner Id	
				$query4 = mysql_query("SELECT maklumatpenyelia.namaPenyelia FROM presentation_schedule
								 LEFT JOIN maklumatpenyelia ON presentation_schedule.examiner_id = maklumatpenyelia.staffId
								 WHERE presentation_schedule.examiner_id = '".$ex_id."'");
				$ex = mysql_fetch_assoc($query4);
				// Display Supervisor and Examiner
				echo "<td>".$ex['namaPenyelia']."</td>";
				echo "<td>".$sv['namaPenyelia']."</td>";
				echo "</tr>";
				$no++;
			}	
		
		?>
	</table>
</div>


</html>




