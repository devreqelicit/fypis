<?php

####################################
#	Modified by: Hilmi Azli 	   #
#	Date: Febuary 2013			   #	
#	Email: hilmiazli@gmail.com	   #	
####################################

session_start();
// DB Connection


// Check login for student and co-ordinator
if(!$_SESSION['matrik']){
header("location:SilaloginPelajar.php");
}

?>
<html>
<head>
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>
<style type="text/css">
<!--
body {
	background-color: #2b2928;
	background-image: url(images/templatemo_main_bg.jpg);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
.style26 {
	color: #000000
}
.style24 {color: #FFFFFF}
.style31 {color: #990000}
.style34 {color: #666666}
.style35 {font-size: 14px;
	font-weight: bold;
}
.style48 {
	color: #000000;
	font-weight: bold;
	font-size: small;
}
.style50 {
	font-size: small;
	color: #0000FF;
	font-weight: bold;
	
}

.style_warning{
	font-family: Arial;
	color: #b4b4b4;
	font-size: 16px;
	margin-left: 20px;
	display: inline;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- jquery -->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple",
		
	});
</script>
<!-- /TinyMCE -->

<script>
	//check PADAM button Yes,No
    function confirmDelete(link) {
        if (confirm("Adakah anda pasti untuk padam rekod ini dari pangkalan data?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>

</head>
<body>

<div align="center"><br>
  <table width="1004" height="498" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
    <tr>
      <td width="998" height="494" bgcolor="#FFFFFF"><table width="998" height="492" border="0" cellpadding="0" cellspacing="0">
			<!-- banner -->
            <td width="1000" height="151" bgcolor="#FFFFFF">
				<div id="banner"></div>
			</td>
        <tr>
        <tr>
          <td height="17" bgcolor="#990000" class="style26"><div align="center">
            <table width="981" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="114"><span class="style31">
                  <?php include("footer/matrik.php"); ?>
                </span></td>
                <td width="867"><div align="center"></div></td>
              </tr>
            </table>
          </div></td>
        </tr>
        <tr>
          <td width="1282" height="169" bgcolor="#FFFFFF"><div align="center">
<table width="988" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="978"><div align="center">
      <?php include("footer/menu2.php"); ?>
    </div></td>
  </tr>
</table>

	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/pelajar_detail.png" style="margin-right: 10px;"/>Presentation Schedule</div>
		<div class="separator"></div>
		<br />
		<div id="content">
			<?php 
				include('connection/con_db.php');
				
				$matrik = isset($_SESSION['matrik']) ? $_SESSION['matrik'] : "";
				
				$query = mysql_query("	SELECT 	presentation_schedule.student_id,
												presentation_schedule.project_title,
												presentation_schedule.time_from,
												presentation_schedule.time_until,
												presentation_schedule.semester,
												presentation_schedule.supervisor_id,
												presentation_schedule.examiner_id,
												year_of_project.year_of_semester,
												year_of_project.day,
												year_of_project.date,
												year_of_project.venue,
												year_of_project.title,
												year_of_project.chairperson,
												year_of_project.timekeeper
										FROM presentation_schedule
										LEFT JOIN year_of_project ON presentation_schedule.semester = year_of_project.year_of_semester
										WHERE presentation_schedule.student_id = '".$matrik."'")or die(mysql_error());	
				
				$result = mysql_fetch_assoc($query);

				$supervisor_id = $result['supervisor_id'];
				$examiner_id = $result['examiner_id'];
				// Supervisor
				
				//$query2 = mysql_query("SELECT * FROM maklumatpenyelia WHERE staffId = '".$supervisor_id."'")or die(mysql_error());
				$query2 = mysql_query("	SELECT 	maklumatpenyelia.namaPenyelia,
												maklumatpelajar.matrik
										FROM maklumatpelajar
										LEFT JOIN maklumatpenyelia ON maklumatpelajar.penyelia_id = maklumatpenyelia.staffId
										WHERE maklumatpelajar.matrik = '".$matrik."'");
				$result_supervisor = mysql_fetch_assoc($query2);
				// Examiner
				$query3 = mysql_query("SELECT * FROM maklumatpenyelia WHERE staffId = '".$examiner_id."'");
				$result_examiner = mysql_fetch_assoc($query3);
				// check data
				$check = mysql_query("SELECT * FROM presentation_schedule WHERE student_id = '".$matrik."'");
			?>
			<?php if(mysql_fetch_row($check) > 0){ ?>
			<div style="float:right;width:100%;text-align:right;clear:right;padding-bottom:5px;">
			<a href="report/usr_present_rpt.php?semester=<?php echo $result['semester']; ?>" target="_blank" class="button">Print Full Report</a>
			</div>
			<div style="clear:both"></div>
			<div class="overview" style="width:100%">
				<div class="dashboard-heading">Student Information</div>
				<div class="dashboard-content">
					<table class="form">
						<tr>
							<td>Matric No:</td>
							<td style="text-align:left;"><?php echo $result['student_id']; ?></td>
						</tr>
						<tr>
							<td>Project Title:</td>
							<td style="text-align:left;"><?php echo $result['project_title']; ?></td>
						</tr>
						<tr>
							<td>Semester:</td>
							<td style="text-align:left;"><?php echo $result['semester']; ?></td>
						</tr>
						<tr>
							<td>Supervisor:</td>
							<td style="text-align:left;"><?php echo $result_supervisor['namaPenyelia']; ?></td>
						</tr>
					</table>
				</div>
			</div>	

			<div class="overview" style="width:100%">
				<div class="dashboard-heading">Presention Date, Venue & Time</div>
				<div class="dashboard-content">
					<table class="form">
						<tr>
							<td>Date:</td>
							<td style="text-align:left;"><?php echo date('d M Y', strtotime($result['date'])); ?></td>
						</tr>
						<tr>
							<td>Day:</td>
							<td style="text-align:left;">Day - <?php echo $result['day']; ?></td>
						</tr>
						<tr>
							<td>Time:</td>
							<td style="text-align:left;"><?php echo $result['time_from']; ?> - <?php echo $result['time_until']; ?></td>
						</tr>
						<tr>
							<td>Venue:</td>
							<td style="text-align:left;"><?php echo $result['venue']; ?></td>
						</tr>
						<tr>
							<td>Chairperson:</td>
							<td style="text-align:left;"><?php echo $result['chairperson']; ?></td>
						</tr>
						<tr>
							<td>Timekeeper:</td>
							<td style="text-align:left;"><?php echo $result['timekeeper']; ?></td>
						</tr>
						<tr>
							<td>Examiner:</td>
							<td style="text-align:left;"><strong><?php echo $result_examiner['namaPenyelia']; ?></strong></td>
						</tr>
					</table>
				</div>
			</div>
			<?php }else{ ?>
			<div style="display:inline-block;width:100%;border:0px solid black;"><img src="icons/peringatan.png" class="warning_two"/><span class="style_warning">Sorry, your presentation schedule is not available yet. Please check again later.</span></div>
			<?php } ?>	
		</div>	
	</div>



<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>
