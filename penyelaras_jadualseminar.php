<?php

####################################
#	Modified by: Hilmi Azli 	   #
#	Date: February 2013			   #	
#	Email: hilmiazli@gmail.com	   #	
####################################

session_start();
// DB Connection


// Check login
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}

global $output, $chosen_day;


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
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<!-- css -->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- jquery -->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<link rel="stylesheet" href="include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
<link rel="stylesheet" href="jquery.ui.timepicker.css?v=0.3.2" type="text/css" />

<script type="text/javascript" src="include/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="include/ui-1.10.0/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="include/ui-1.10.0/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="include/ui-1.10.0/jquery.ui.tabs.min.js"></script>
<script type="text/javascript" src="include/ui-1.10.0/jquery.ui.position.min.js"></script>

<script type="text/javascript" src="jquery.ui.timepicker.js?v=0.3.2"></script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		
	});
</script>
<!-- /TinyMCE -->

<script>
	//check PADAM button Yes,No
    function confirmDelete(link) {
        if (confirm("Are you sure?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }
</script>
<script type="text/javascript">
function validate_student(){

	if (validate_form.add_student.value == ""){
  		// If null display and alert box
   		alert("Please select student.");
  		// Place the cursor on the field for revision
  		 validate_form.add_student.focus();
  		// return false to stop further processing
  		 return (false);
	}
	// If text_name is not null continue processing
	return (true);
}
</script>
<script type="text/javascript">
		
	$(document).ready(function() {
		//grab the value from select option and send it to get_data.php to process data
		$('#sendCheckbox').change(function() {   
			var qString = 'type_id=' +$(this).val();
			$.post('process_jadualseminar.php', qString, processResponse);
		});
		//process and display it in div checkbox section
		function processResponse(data) {
			$('#result').html(data);
		}

	});
</script>
<script type="text/javascript">  
	$(document).ready(function(){  
		$("#daftar").submit(function(event) {  
			
			/* stop form from submitting normally */  
			event.preventDefault();   

			$.ajax({
				type:'POST',
				url:'add_jadualseminar.php',
				data:$("#daftar").serialize(),
				success:function(data) {
					$("#result_add").html(data);
					
					
				}  
			});  
		}); 
		// for update
		$("#update").submit(function(event) {  
			
			/* stop form from submitting normally */  
			event.preventDefault();   

			$.ajax({
				type:'POST',
				url:'update_jadualseminar.php',
				data:$("#update").serialize(),
				success:function(data) {
					$("#result_update").html(data);
					
					
				}  
			});  
		});
		$("#update_student").submit(function(event) {  
			
			/* stop form from submitting normally */  
			event.preventDefault();   

			$.ajax({
				type:'POST',
				url:'update_student_jadualseminar.php',
				data:$("#update_student").serialize(),
				success:function(data) {
					$("#result_update_student").html(data);
					
					
				}  
			});  
		});
		
	});  
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
          <td height="17" bgcolor="#990000" class="style26"><div align="center">
            <table width="981" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="114"><span class="style31">
                  <?php include("footer/staffIdPenyelaras.php"); ?>
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
      <?php include("footer/menuPenyelaras.php"); ?>
    </div></td>
  </tr>
</table>

<!-- content -->
	<?php global $type; ?>
	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/arahan_detail.png" style="margin-right: 10px;"/>Presentation Schedule</div>
		<div id="content">
			<?php if(isset($_GET['type']) == "add"){ ?>
			<form action="#" method="post" id="daftar">
				<div class="box" style="width: 100%;text-align:left;overflow:hidden;">
					<div class="heading"><h1>Add New Schedule</h1></div>
					<div class="content">
						<div id="result_add"></div>
						<table class="form" border="0">
							<tr>
								<td style="width:130px;">Title: </td>
								<td>Presentation Scheduled For Final Year (SIM 4999)</td>
							</tr>
							<tr>
								<td style="width:100px;">Semester: <font color="red">*</font></td>
								<td>
									<select name="semester_y">
										<option value="">-- select --</option>
										<option>2012/2013</option>
										<option>2013/2014</option>
										<option>2014/2015</option>
										<option>2015/2016</option>
										<option>2016/2017</option>
									</select>
									-
									<select name="semester">
										<option value="">-- select --</option>
										<option>1</option>
										<option>2</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td style="width:130px;">Day: <font color="red">*</font></td>
								<td>
									<select name="day_of_present">
										<option value="">&nbsp;</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									&nbsp; <i><font style="color:red;font-size:10px;">** Day of presentation</font></i>
								</td>						
							</tr>
							<tr>
								<td style="width:130px;">Date: <font color="red">*</font></td>
								<td>
									<select name="day">
										<option value="">-- Day --</option>
										<?php 
											for($i = 1 ; $i <= 31; $i++){
												  echo "<option>$i</option>";
											}
										?>
									</select>
									<select name="month">
										<option value="">-- Month --</option>
										<option value="1">January</option>
										<option value="2">Febuary</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
									<select name="year">
										<option value="">-- Year --</option>
										<?php 
											for($i = 2008 ; $i <= date('Y'); $i++){
												  echo "<option>$i</option>";
											}
										?>
									</select>
								</td>						
							</tr>	
							<tr>
								<td style="width:130px;">Venue: <font color="red">*</font></td>
								<td><input type="text" name="venue" size="50"/></td>
							</tr>
							<tr>
								<td style="width:130px;">Chairperson: <font color="red">*</font></td>
								<td><input type="text" name="chairperson" size="50"/></td>
							</tr>
							<tr>
								<td style="width:130px;">Timekeeper: <font color="red">*</font></td>
								<td><input type="text" name="timekeeper" size="50"/></td>
							</tr>
						</table>
						<div style="float:right;">
							<input type="submit" name="submit" class="button" value="Submit" />
							<a href="penyelaras_jadualseminar.php?type=add" class="button">Reset</a>
							<a href="penyelaras_jadualseminar.php" class="button">Cancel</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</form>
			<?php } else if(isset($_GET['action']) == "update"){ ?>
			<form action="#" method="post" id="update">
				<?php
				
					include('connection/con_db.php');
					
					$type_id = isset($_GET['action']) ? $_GET['action'] : "";
					
					$query = mysql_query("SELECT * FROM year_of_project WHERE id = '".$type_id."'")or die(mysql_error());
					
					$result = mysql_fetch_assoc($query);
				
				?>
				<div class="box" style="width: 100%;text-align:left;overflow:hidden;">
					<div class="heading"><h1>Edit Schedule</h1></div>
					<div class="content">
						<div id="result_update"></div>
						<table class="form">
							<tr>
								<td style="width:100px;">Title: </td>
								<td>Presentation Scheduled For Final Year (SIM 4999)</td>
							</tr>
							<tr>
								<td style="width:100px;">Semester:</td>
								<td><input type="text" value="<?php echo $result['year_of_semester']; ?>" readonly="yes" class="readonly"></td>
							</tr>
							<tr>
							<tr>
								<td style="width:100px;">Day:</td>
								<td><input type="text" value="<?php echo $result['day']; ?>" readonly="yes" class="readonly"></td>						
							</tr>
							<tr>
								<td style="width:100px;">Date:</td>
								
								<td><input type="text" value="<?php echo date('d / m / Y', strtotime($result['date'])); ?>" readonly="yes" class="readonly"></td>						
							</tr>	
							<tr>
								<td style="width:100px;">Venue:</td>
								<td><input type="text" value="<?php echo $result['venue']; ?>" readonly="yes" class="readonly" style="min-width:50px;padding-right:10px;" ></td>
							</tr>
							<tr>
								<td style="width:100px;">Chairperson: <font color="red">*</font></td>
								<td><input type="text" name="chairperson" size="50" value="<?php echo $result['chairperson']; ?>"/></td>
							</tr>
							<tr>
								<td style="width:100px;">Timekeeper: <font color="red">*</font></td>
								<td><input type="text" name="timekeeper" size="50" value="<?php echo $result['timekeeper']; ?>"/></td>
							</tr>
						</table>
						<div style="float:right;">	
							<input type="hidden" name="presentation_id" value="<?php echo $result['id']; ?>"/>
							<input type="submit" name="update" class="button" value="Update" />
							<a href="penyelaras_jadualseminar.php" class="button">Cancel</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</form>
			<?php } else if(isset($_GET['id'])){ ?>
			<div id="result_update_student"></div>
			<form action="#" method="post" id="update_student">
			<table class="form">
				<?php
					include('connection/con_db.php');
					
					$matric_no = isset($_GET['id']) ? $_GET['id'] : "";
					$curr_day = isset($_GET['day']) ? $_GET['day'] : "";
					$curr_venue = isset($_GET['venue']) ? $_GET['venue'] : "";

					
					$query = mysql_query("SELECT 	maklumatpelajar.matrik,
													maklumatpelajar.nama,
													addproject.tajukProjek,
													presentation_schedule.day,
													presentation_schedule.venue,
													presentation_schedule.time_from,
													presentation_schedule.time_until,
													presentation_schedule.semester,
													presentation_schedule.examiner_id,
													presentation_schedule.supervisor_id
										  FROM maklumatpelajar				
										  LEFT JOIN addproject ON maklumatpelajar.matrik = addproject.matrik
										  LEFT JOIN presentation_schedule ON maklumatpelajar.matrik = presentation_schedule.student_id
										  WHERE maklumatpelajar.matrik = '".$matric_no."'");
					
					
					$query1 = mysql_query("SELECT * FROM maklumatpenyelia ORDER BY id ASC");
					
					// Retrieve student info
					$result = mysql_fetch_assoc($query);
				
				?>
				<tr>
					<td>Time:</td>
					<td>From <input type="text" name="time" size="5" id="timepicker.[1]" value="<?php echo $result['time_from']; ?>"/> until <input type="text" name="time2" size="5" id="timepicker2.[1]" value="<?php echo $result['time_until']; ?>"/><font style="color:red;font-size:10px;margin-left:10px;">24Hrs - Eg: 11:00 or 15:20</font>
					<script type="text/javascript">
				            $(document).ready(function() {
				                $('#timepicker\\.\\[1\\]').timepicker( {
				                    showAnim: 'blind'
				                } );
								$('#timepicker2\\.\\[1\\]').timepicker( {
				                    showAnim: 'blind'
				                } );
				            });
				     </script></td>
				</tr>
				<tr>
					<td>Day:</td>
					<td>
						<select name="day">
							<option <?php if($result['day'] == 1) echo 'selected'; ?>>1</option>
							<option <?php if($result['day'] == 2) echo 'selected'; ?>>2</option>
							<option <?php if($result['day'] == 3) echo 'selected'; ?>>3</option>
							<option <?php if($result['day'] == 4) echo 'selected'; ?>>4</option>
							<option <?php if($result['day'] == 5) echo 'selected'; ?>>5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Venue:</td>
					<td>
						<select name="venue">
								<?php
									$vQuery = mysql_query("SELECT DISTINCT venue FROM year_of_project WHERE day = '".$curr_day."' ORDER BY venue ASC");
									while($row = mysql_fetch_assoc($vQuery)){
										echo "<option ".($curr_venue == $row['venue'] ? 'selected' : "").">".$row['venue']."</option>";
									}
								?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Matric:</td>
					<td><?php echo $result['matrik']; ?></td>
				</tr>
				<tr>
					<td>Name:</td>
					<td><?php echo $result['nama']; ?></td>
				</tr>
				<tr>
					<td>Project:</td>
					<td><?php echo $result['tajukProjek']; ?></td>
				</tr>
				<tr>
					<td>Examiner:</td>
					<td>
						<select name="examiner">
								<option value="">-- select --</option>
								<?php
								
									while($row = mysql_fetch_assoc($query1)){
										$staff_id = $row['staffId'];
										$examiner = $result['examiner_id'];
										echo "<option value='".$staff_id."' ".($examiner == $staff_id ? 'selected' : "").">".$row['namaPenyelia']."</option>";
									}
								?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Supervisor:</td>
					<td>
						<?php
							$supervisor = $result['supervisor_id'];
							$query_staff = 	mysql_query("SELECT * FROM maklumatpenyelia WHERE staffId = '".$supervisor."'");
							$row = mysql_fetch_assoc($query_staff);
							
							echo $row['namaPenyelia'];
						?>
					</td>
				</tr>
			</table>
				<div style="float:right;">	
								<input type="hidden" name="matrik_no" value="<?php echo $result['matrik']; ?>"/>
								<input type="hidden" name="semester" value="<?php echo $result['semester']; ?>"/>
								<input type="hidden" name="current_day" value="<?php echo $curr_day; ?>"/>
								<input type="submit" name="update_student" class="button" value="Update" />
								<a href="penyelaras_jadualseminar.php?search=true&semester=<?php echo $result['semester']; ?>&chosen_day=<?php echo $curr_day; ?>&venue=<?php echo $curr_venue; ?>" class="button">Cancel</a>
				</div>	
			</form>
			<?php } else { ?>
			<div class="box" style="width: 100%;text-align:left;overflow:hidden;">
				<div class="heading">
					<a href="penyelaras_jadualseminar.php?type=add" class="button" style="margin-top:7px;float:right;">Create</a>  
				</div>
				<div class="content">
					<br />
					<?php
						include('connection/con_db.php');
						
						if (isset($_POST['search_schedule'])){
							global $day, $chosen_day, $venue;
							$error = "";
							$semester = $_POST['semester'];
							$day = $_POST['day'];
							$chosen_day = $_POST['day'];
							$venue = $_POST['venue'];
							
							if(empty($semester) || empty($day) || empty($venue))
								$error = "Invalid search. Please try again!";
							
							
							$check_query = mysql_query("SELECT * FROM year_of_project WHERE year_of_semester = '".$semester."' AND day = '".$day."' AND venue = '".$venue."'");

							if(mysql_fetch_array($check_query) == 0)
							   $error = "Warning: No data found in database. Please try again."; 
							
								
							if($error != ""){
								echo "<center><div class='warning'>".$error."</div></center>";
							}else{

								global $search_result, $output, $semester, $day, $venue;
								
								$output = 1;	
							}
							
						}
						
						if(isset($_POST['submit_student_A'])){
						
								$semester = $_POST['check_semester'];
								$day = $_POST['check_day'];
								$venue = $_POST['check_venue'];
								$student_id = $_POST['add_student'];	
	

								
								$query = mysql_query("SELECT 	maklumatpelajar.matrik,
																maklumatpelajar.semester,
																maklumatpelajar.penyelia_id,	
																addproject.tajukProjek
										  FROM maklumatpelajar				
										  LEFT JOIN addproject ON maklumatpelajar.matrik = addproject.matrik
										  WHERE maklumatpelajar.matrik = '".$student_id."'")or die(mysql_error());
											
								//$query = mysql_query("SELECT * FROM maklumatpelajar WHERE matrik = '".$student_id."'");
								$sResult = mysql_fetch_assoc($query);
								$student_id = $sResult['matrik'];
								$project_title = $sResult['tajukProjek'];
								$semester = $sResult['semester'];
								$supervisorId = $sResult['penyelia_id'];
								
								// Check existing value
								$cQuery = mysql_query("SELECT * FROM presentation_schedule WHERE student_id = '".$student_id."'");
								if(mysql_fetch_row($cQuery) > 0){
									echo "<script>alert('Student already exists! Please try again');</script>";
									echo	"<script>setTimeout(\"location.href = 'penyelaras_jadualseminar.php?search=true&semester=$semester&chosen_day=$day&venue=$venue';\",1500);</script>";
								}else{
									// Store in presentation schedule DB
									mysql_query("INSERT INTO presentation_schedule SET 	student_id = '".$student_id."',
																					project_title = '".$project_title."',
																					semester = '".$semester."',
																					day = '".$day."',
																					venue = '".$venue."',
																					supervisor_id = '".$supervisorId."'");
								}
								echo	"<script>setTimeout(\"location.href = 'penyelaras_jadualseminar.php?search=true&semester=$semester&chosen_day=$day&venue=$venue';\",30);</script>";
						}
						
					
					?>
					<br />
					<form action="penyelaras_jadualseminar.php?search=true" method="post">
						<br />
						Select semester: &nbsp; 
						<select name="semester">
							<option value="">-- select --</option>
							<?php
								include('connection/con_db.php');
								
								//$semester = isset($_GET['semester']) ? $_GET['semester'] : "";
								
								$query = mysql_query("SELECT DISTINCT year_of_semester FROM year_of_project ORDER BY id DESC")or die(mysql_error());
								
								while($row = mysql_fetch_assoc($query)){
									echo "<option ".($semester == $row['year_of_semester'] ? 'selected' : "").">".$row['year_of_semester']."</option>";
								}
							?>
						</select>
						&nbsp; &nbsp;
						Day: &nbsp;
						<select name="day">
							<option value="">-- select --</option>
							<?php
								include('connection/con_db.php');
								
								//$day = isset($_GET['chosen_day']) ? $_GET['chosen_day'] : "";
								
								$query = mysql_query("SELECT DISTINCT day FROM year_of_project ORDER BY id DESC")or die(mysql_error());
								
								while($row = mysql_fetch_assoc($query)){
									echo "<option ".($day== $row['day'] ? 'selected' : "").">".$row['day']."</option>";
								}
							?>
						</select>
						&nbsp; &nbsp;
						Venue: &nbsp;
						<select name="venue">
							<option value="">-- select --</option>
							<?php
								include('connection/con_db.php');
								
								//$venue = isset($_GET['venue']) ? $_GET['venue'] : "";
								
								$query = mysql_query("SELECT DISTINCT venue FROM year_of_project ORDER BY id DESC")or die(mysql_error());
								
								while($row = mysql_fetch_assoc($query)){
									echo "<option ".($venue== $row['venue'] ? 'selected' : "").">".$row['venue']."</option>";
								}
							?>
						</select>
	
					
						<input type="submit" name="search_schedule" value="Search" />
					</form>
					<div class="separator"></div><br /><br />
					<?php } ?>
					<?php if($output == 1 || isset($_GET['search']) == 'true') { ?>
						<?php
							include('connection/con_db.php');
							global $results, $day, $semester, $venue;
							
							if(isset($_GET['semester'])){
								// update and retrieve these values 
								$semester2 = isset($_GET['semester']) ? $_GET['semester'] : "";
								$day2 = isset($_GET['chosen_day']) ? $_GET['chosen_day'] : "";
								$venue2= isset($_GET['venue']) ? $_GET['venue'] : "";

								$query1 = mysql_query("SELECT * FROM year_of_project WHERE year_of_semester = '".$semester2."' AND day ='".$day2."' AND venue='".$venue2."'")or die(mysql_error());
								$results = mysql_fetch_array($query1);
							
							}else{
								$query5 = mysql_query("SELECT * FROM year_of_project WHERE year_of_semester = '".$semester."' AND day ='".$day."' AND venue='".$venue."'")or die(mysql_error());
								$results = mysql_fetch_array($query5);
								
							}

						
						?>

						<table class="form">
							<tr>
								<td style="width:150px">Title:</td>
								<td><?php echo $results['title']; ?></td>
							</tr>
							<tr>
								<td style="width:150px">Day:</td>
								<td>
									 <?php 
											if($result > 0)
												echo "Day - " . " " . $results['day'];
											else
												echo "";	
									 ?>
								</td>
							</tr>
							<tr>
								<td style="width:150px">Date:</td>
								<td>
									<?php 
											$date = date('d M Y', strtotime($results['date']));
											
										    if($date != "01 Jan 1970")
												echo date('d M Y', strtotime($results['date'])); 
											else
												echo "";
											
									?>
								</td>
							</tr>
							<tr>
								<td style="width:150px">Venue:</td>
								<td><?php echo $results['venue']; ?></td>
							</tr>
							<tr>
								<td style="width:150px">Chairperson:</td>
								<td><?php echo $results['chairperson']; ?></td>
							</tr>
							<tr>
								<td style="width:150px">Timekeeper:</td>
								<td><?php echo $results['timekeeper']; ?></td>
							</tr>
						</table>
						<div style="float:right;"><a href="penyelaras_jadualseminar.php?action=<?php echo $results['id']; ?>" class="button">Update</a></div>
						<br /><br />
						<br /><br />
						<strong>Choose student for this selected date/day:</strong> 
						<br /><br />
						<form action="penyelaras_jadualseminar.php?search=true&semester=<?php echo $results['year_of_semester']; ?>&chosen_day=<?php echo $chosen_day; ?>&venue=<?php echo $venue; ?>" method="post"  name="validate_form" onsubmit="return validate_student()">
							<select name="add_student">
								<option value=""></option>
								<?php 
									include('connection/con_db.php');
									
									$sql_query = mysql_query("SELECT * FROM maklumatpelajar order by matrik ASC");
									
									while($row = mysql_fetch_assoc($sql_query)){
										$matric = $row['matrik'];
										$name = $row['nama'];
										
										echo "<option value='".$matric."'>".$matric." - ".$name."</option>";
										
									}
								?>
							</select>
							<input type="hidden" name="check_semester" value="<?php echo $results['year_of_semester']; ?>"/>
							<input type="hidden" name="check_day" value="<?php echo $results['day']; ?>"/>
							<input type="hidden" name="check_venue" value="<?php echo $results['venue']; ?>"/>
							<input type="submit" name="submit_student_A" value="Add"/>
						</form>
						
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
									
									$year_of_semester = $results['year_of_semester'];
									// Join and check by semester
									/*$query = mysql_query("SELECT 	maklumatpelajar.matrik,
																	addproject.tajukProjek
														  FROM maklumatpelajar				
														  LEFT JOIN addproject ON maklumatpelajar.matrik = addproject.matrik
														  LEFT JOIN presentation_schedule ON maklumatpelajar.matrik = presentation_schedule.student_id
														  WHERE maklumatpelajar.semester = '".$year_of_semester."' ORDER BY maklumatpelajar.matrik ASC");*/
									
									$query = mysql_query("SELECT 	maklumatpelajar.matrik,
																	addproject.tajukProjek
														  FROM maklumatpelajar				
														  LEFT JOIN addproject ON maklumatpelajar.matrik = addproject.matrik
														  LEFT JOIN presentation_schedule ON maklumatpelajar.matrik = presentation_schedule.student_id
														  WHERE maklumatpelajar.semester = '".$year_of_semester."' ORDER BY maklumatpelajar.matrik ASC");	
														  
									$query3 = mysql_query("SELECT * FROM year_of_project WHERE year_of_semester = '".$semester."' AND day = '".$day."' AND venue= '".$venue."'");
									
									if(isset($_GET['chosen_day']))
										$chosen_day = isset($_GET['chosen_day']) ? $_GET['chosen_day'] : $chosen_day;
										$venue = isset($_GET['venue']) ? $_GET['venue'] : $venue;
					
									// Check table row first
									
									$check_query = mysql_query("SELECT 	presentation_schedule.student_id,
																		presentation_schedule.examiner_id,
																		presentation_schedule.venue,
																		presentation_schedule.day,
																		presentation_schedule.project_title,
																		presentation_schedule.time_from,
																		presentation_schedule.time_until,
																		maklumatpenyelia.namaPenyelia,
																		maklumatpelajar.nama
															FROM presentation_schedule 
															LEFT JOIN maklumatpelajar ON presentation_schedule.student_id = maklumatpelajar.matrik	
															LEFT JOIN maklumatpenyelia ON presentation_schedule.examiner_id = maklumatpenyelia.staffId		
															WHERE presentation_schedule.day = '".$chosen_day."' AND presentation_schedule.venue = '".$venue."' ORDER BY presentation_schedule.student_id ASC")or die(mysql_error());
									if(mysql_num_rows($check_query) == 0){
										echo '<tr><td class="center" colspan="5">No Record</td></tr>';
									}else{
										
										$no = 1;
										while($result = mysql_fetch_assoc($check_query)){
											echo "<tr>";
											echo "<td class='right'>".$no."</td>";
											echo "<td class='left' style='width:60px;'>
													<div class='p_schedule'>
														<strong><u>".$result['student_id']."</u></strong>
														<div class='student_details'>
															<table>
																<tr>
																	<td>Name</td><td>:</td><td>".$result['nama']."</td>
																</tr>
																<tr>
																	<td>Time(24HRS)</td><td>:</td><td>".$result['time_from']." until ".$result['time_until']."</td>
																</tr>";
																if($result['examiner_id'] == NULL){
																	echo 	"<tr>
																				<td>Examiner</td><td>:</td><td><i><font color='red'>not specified yet</font></i></td>
																			</tr>";
																}else{
																	echo 	"<tr>
																				<td>Examiner</td><td>:</td><td>".$result['namaPenyelia']."</td>
																			</tr>";
																}

												echo		"</table>
														</div>
													</div>	
												  </td>";
											echo "<td class='left'>".$result['project_title']."</td>";
											echo "<td class='right' style='width:40px;'>";
													$query1 = mysql_query("SELECT * FROM presentation_schedule WHERE student_id = '".$result['student_id']."'");
													$result_1 = mysql_fetch_assoc($query1);
													$std_day = $result['day'];
													$std_id = $result['student_id'];
													$std_venue = $result['venue'];
													//$supervisor_id = $result_1['supervisor_id'];
													$examiner_id = $result_1['examiner_id'];
													
													if(($examiner_id == NULL) || ($examiner_id == 0)){
														echo "<img src='images/not_done.png' width='20px'>";
													}else{
														echo "<img src='images/done.png' width='20px'>";
													}
														
											echo "</td>";
											echo "<td class='right'>
													[ <a href='penyelaras_jadualseminar.php?id=$std_id&day=$std_day&venue=$std_venue' >Edit</a> ]
												  </td>";
											echo "</tr>";
											$no++;
											
										}
									}					
								?>
							</tbody>
						</table>
					<?php } ?>
					</div>		
				</div>
		
			</div>

		</div>

	</div>
	
	

	
	

<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>