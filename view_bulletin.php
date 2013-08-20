

<?php

include('connection/con_db.php');

global $id;

 if(isset($_GET['action_detail'])){
	
	$id = isset($_GET['action_detail']) ? $_GET['action_detail'] : "";
	
	$query = mysql_query("SELECT * FROM buletin WHERE id = '".$id."'");
	$result = mysql_fetch_array($query);

?>


<link rel="stylesheet" type="text/css" href="styles.css">

<div id="content-wrapper">
	<div class="section-title">News Detail:  #<?php echo $id; ?></div>
	<br /><br />
	<table class="form">
		<tr>
			<td class="style1">Title :</td>
			<td class="style1"><?php echo $result['tajuk']; ?></td>
		</tr>
		<tr>
			<td class="style1">Date :</td>
			<td class="style1"><?php echo date('d / m / Y', strtotime($result['tarikh'])); ?></td>
		</tr>
		<tr>
			<td class="style1">News :</td>
			<td class="style1"><?php echo $result['buletin']; ?></td>
		</tr>
	</table>
	
</div>



<?php } ?>