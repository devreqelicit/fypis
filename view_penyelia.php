

<?php

include('connection/con_db.php');

global $id;

 if(isset($_GET['action_detail'])){
	
	$id = isset($_GET['action_detail']) ? $_GET['action_detail'] : "";
	
	$query = mysql_query("SELECT * FROM maklumatpenyelia WHERE staffId = '".$id."'");
	$result = mysql_fetch_array($query);

?>


<link rel="stylesheet" type="text/css" href="styles.css">

<div id="content-wrapper">
	<div class="section-title">Supervisor Details:  Staff ID <?php echo $id; ?></div>
	<br /><br />
	<table class="form">
		<tr>
			<td class="style1">Name :</td>
			<td class="style1"><?php echo $result['namaPenyelia']; ?></td>
		</tr>
		<tr>
			<td class="style1">Role :</td>
			<td class="style1"><?php echo $result['jawatan']; ?></td>
		</tr>
		<tr>
			<td class="style1">Gender :</td>
			<td class="style1"><?php echo $result['jantina']; ?></td>
		</tr>
		<tr>
			<td class="style1">Phone No :</td>
			<td class="style1"><?php echo $result['notelefon']; ?></td>
		</tr>
		<tr>
			<td class="style1">Expertise :</td>
			<td class="style1"><?php echo $result['kepakaran']; ?></td>
		</tr>
		<tr>
			<td class="style1">No of Student :</td>
			<td class="style1"><?php echo $result['noOfStudent']; ?></td>
		</tr>
		<tr>
			<td class="style1">Kuota :</td>
			<td class="style1"><?php echo $result['kuota']; ?></td>
		</tr>
		<tr>
			<td class="style1">Email :</td>
			<td class="style1"><?php echo $result['emel']; ?></td>
		</tr>
	</table>
	
</div>



<?php } ?>