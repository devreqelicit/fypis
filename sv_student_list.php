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

require_once('header_penyelia.php');


global $staff_id;

$staff_id = isset($_SESSION['staffId']) ? $_SESSION['staffId'] : ""; 


?>

<!-- header -->
<?php echo heading(); ?>
<script type="text/javascript" src="tabs.js"></script>
<table width="988" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978"><div align="center">
      <?php include("footer/menupenyelia.php"); ?>
    </div></td>
  </tr>
</table>

	<!-- content -->
	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/pengguna.png" style="margin-right: 10px;"/>Student List</div>
		<div id="content">
			<div id="search-student">
					<!-- interactive search function -->
					<form action="/" method="post" id="search_std">
					<div class="title">
						Select your student:
						<div style="margin-left: 10px;display: inline;"></div>
						<select name="select-student">
							<option value="">-- select --</option>
								<?php
									include('connection/con_db.php');
									
								
									
									$query = mysql_query("SELECT * FROM maklumatpelajar WHERE penyelia_id = '".$staff_id."'");
									
									while($result = mysql_fetch_assoc($query)){
										$std_id = $result['matrik'];
										echo "<option value='".$std_id."'>".$result['nama']."</option>";
									}
								?>
						</select>
						<div style="margin-left: 10px;display: inline;"></div>
						<input type="submit" class="button" value="Go"  id="getStd_info"/>	
					</div>
				</form>
			</div>
			<div class="clear"></div>	
			<!-- student result -->
			<div id="result-student" class="result" style="display: none;">
					
			</div>
		</div>
	</div>
	<script type="text/javascript">
	<!--
	$('.vtabs a').tabs();
	//-->
	</script>
	<script type="text/javascript">
		// --> AJAX - fade in result
		$(function(){
			$('#getStd_info').click(function(e){
				$('#result-student').slideUp(0).delay(100).show(900);
			});
			return false;
		});		
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#search_std").submit(function(event) {
				event.preventDefault();

				$.ajax({
						type:'POST',
						url:'process_sv_student_list.php',
						data:$("#search_std").serialize(),
						success:function(data) {
							$(".result").html(data);
						}  
				});	
			});
		});	
	</script>
<?php require_once('footer/footer.php'); ?>
<div align="left"></div>
</body>
</html>