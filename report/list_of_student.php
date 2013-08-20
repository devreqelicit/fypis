<!-- header -->
<?php include('report_header.php'); ?>


<!-- content -->

<div style="page-break-after: always;">
	
	<table class="store">
		<tr>
			<td>Coordinator: <strong>Dr. Noraini Che Pa</strong></td>
		</tr>
		<tr>
			<td>Report Title: <strong>List Of Student and Project Title</strong></td>
		</tr>
		<tr>
			<td>Date: <strong><?php echo date('d/m/Y'); ?></strong></td>
		</tr>
	</table>
	<br />
	<br />
	<table class="content">
		<tr class="heading">
			<td width="30px">&nbsp;</td>
			<td>Matric</td>
			<td>Name</td>
			<td>Project Title</td>
			<td>Supervisor</td>
		</tr>
		<?php
			include('../connection/con_db.php');
			
			// call query
			$query = mysql_query("SELECT maklumatpelajar.nama,
										 maklumatpelajar.matrik,
										 maklumatpenyelia.namaPenyelia,
										 addproject.tajukProjek
								  FROM	 maklumatpelajar
								  LEFT JOIN maklumatpenyelia ON maklumatpelajar.penyelia_id = maklumatpenyelia.staffId
								  LEFT JOIN addproject ON maklumatpelajar.matrik = addproject.matrik
								  ORDER BY maklumatpelajar.matrik ASC")or die(mysql_error());
			
			$no = 1;
			while($result = mysql_fetch_assoc($query)){	
				echo "<tr>";
				echo "<td width='30px'>".$no."</td>";
				echo "<td>".$result['matrik']."</td>";
				echo "<td>".$result['nama']."</td>";
				echo "<td>".$result['tajukProjek']."</td>";
				echo "<td>".$result['namaPenyelia']."</td>";
				echo "</tr>";
				$no++;
			}
		
		?>
		
	</table>
</div>


<!-- footer -- >
<?php include('report_footer.php'); ?>