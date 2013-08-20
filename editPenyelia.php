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
<!-- submit form -->
<script type="text/javascript">  
  $(document).ready(function(){  
		$("#kemaskini").submit(function(event) {  
			
			/* stop form from submitting normally */  
			event.preventDefault();   

			$.ajax({
				type:'POST',
				url:'process_editPenyelia.php',
				data:$("#kemaskini").serialize(),
				success:function(data) {
					$("#result").html(data);
					
					
				}  
			});  
		}); 
		
	});  
</script>		  
		  
<table width="988" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978"><div align="center">
      <?php include("footer/menuPenyelaras.php"); ?>
    </div></td>
  </tr>
</table>

<!-- content -->
	<?php
	
		include('connection/con_db.php');
	
		$nostaf = isset($_GET['action_edit']) ? $_GET['action_edit'] : "";
		
		$query = mysql_query("SELECT * FROM maklumatpenyelia WHERE staffId = '".$nostaf."'");
		$result = mysql_fetch_array($query);
		
		$jantina = $result['jantina'];
		
	?>
	<div id="content-wrapper">
		<div class="section-title-left">Kemaskini Penyelia - staff ID: <?php echo $nostaf; ?></div>
		<div id="content">
			<!-- display output -->
			<div id="result"></div>
			<!-- registration form -->
			<form action="#" method="post" id="kemaskini">
				<table class="form">
					<tr>
						<td>Staff ID<font color="red"> *</font></td>
						<td><?php echo $nostaf; ?><input type="hidden" name="staffid" size="30" value="<?php echo $result['staffId']; ?>"/></td>
					</tr>
					<tr>
						<td>Name<font color="red"> *</font></td>
						<td><input type="text" name="namapenyelia" size="30"  value="<?php echo $result['namaPenyelia']; ?>"/></td>
					</tr>
					<tr>
						<td>Position<font color="red"> *</font></td>
						<td><input type="text" name="jawatan" size="30" value="<?php echo $result['jawatan']; ?>"/></td>
					</tr>
					<tr>
						<td>Gender<font color="red"> *</font></td>
						<td>
							<select name="jantina">
								<option <?php if($jantina == "Lelaki") echo "selected"; ?> >Lelaki</option>
								<option <?php if($jantina == "Perempuan") echo "selected"; ?> >Perempuan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Phone No<font color="red"> *</font></td>
						<td><input type="text" name="notelefon" size="30"  value="<?php echo $result['notelefon']; ?>"/> <font color="red"><i> Eg: 0121234567</i></font></td>
					</tr>
					<tr>
						<td>Email<font color="red"> *</font></td>
						<td><input type="text" name="email" size="30" value="<?php echo $result['emel']; ?>"/><font color="red"><i> Eg: email@fsktm.upm.edu.my</i></font></td>
					</tr>
					<tr>
						<td>Room No<font color="red"> *</font></td>
						<td><input type="text" name="nobilik" size="30" value="<?php echo $result['noBilik']; ?>"/></td>
					</tr>
					<tr>
						<td>Expertise<font color="red"> *</font></td>
						<td><input type="text" name="kepakaran" size="30" value="<?php echo $result['kepakaran']; ?>"/></td>
					</tr>
					<tr>
						<td>Quota<font color="red"> *</font></td>
						<td><input type="text" name="kuota" size="1" value="<?php echo $result['kuota']; ?>"/> Student(s)</td>
					</tr>
					<tr>
						<td>Student</td>
						<td>
							<?php
								$staffId = $result['staffId'];

								include('connection/con_db.php');
							
								
								$query_sv = mysql_query("SELECT noOfStudent FROM maklumatpenyelia WHERE staffId = '".$nostaf."'")or die(mysql_error());
								// check first
								$check = mysql_fetch_array($query_sv);
								$no = 1;
								if( $check['noOfStudent'] > 0 ){
									// Display student
									$query_student = mysql_query("SELECT * FROM maklumatpelajar WHERE penyelia_id = '".$nostaf."'")or die(mysql_error());
									while($result1 = mysql_fetch_assoc($query_student)){
										echo $no . ") " . $result1['nama'] . " - " . $result1['matrik'];
									}	
								}else{
									echo "-";
								}
								
							?>
						</td>
					</tr>
				</table>
				<div style="margin-right:10px;margin-top:5px;margin-bottom:20px;float:right;"><a href="senaraiPenyelia.php" class="button">Cancel</a></div>
				<div style="margin-right:10px;margin-top:5px;margin-bottom:20px;float:right;"><input type="submit" name="kemaskini" value="Update" class="button"/></div>
				<div class="mandatory">*Mandatory Fields</div>
			</form>
		</div>
	</div>


<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>