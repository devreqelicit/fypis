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
<script type="text/javascript">
	//prompt confirmation
    function confirmApprove(link) {
        if (confirm("Are you sure?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>
<table width="988" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978"><div align="center">
      <?php include("footer/menupenyelia.php"); ?>
    </div></td>
  </tr>
</table>

	<!-- content -->
	<?php 
	
		if(isset($_POST['submit-progress'])){
			
			include('connection/con_db.php');
			
			$progress_id = $_POST['progress_id'];
			$student_id = $_POST['student_id'];
			$comment = $_POST['comment'];
			$current_progress = $_POST['std_prog_id'];
			// Send to another phase if success
			$new_progress = $current_progress + 1;
			//echo $comment;
			// Add 'Approve' progress history
			mysql_query("INSERT INTO progress_approve SET progress_id = '".$progress_id."', student_id = '".$student_id."', comment = '".$comment."'");
			// Update student project record
			mysql_query("UPDATE addproject SET 	progress_id = '".$new_progress."',
												progress_status = '',
												progress_date = '0000-00-00',
												progress_time = '00:00:00'
						 WHERE matrik = '".$student_id."'")or die(mysql_error());						
			
			echo "<script>alert('test!');</script>";
			echo "<script>location.href='progress_report.php'</script>";
		}
	?>
	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/pengguna.png" style="margin-right: 10px;"/>Progress Report</div>
		<div id="search-student" style="margin: auto;border: 0px solid black;width:100%;text-align:center;">
			<!-- interactive search function -->
			<form action="/" method="post" id="search_std">
				<div class="title">
					Student:
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
		<br /><br />
		<div id="result-progress" class="result" >
			
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#search_std").submit(function(event) {
				event.preventDefault();

				$.ajax({
						type:'POST',
						url:'process_student_progress.php',
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