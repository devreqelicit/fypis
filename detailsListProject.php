<?php

####################################
#	Modified by: Hilmi Azli 	   #
#	Date: February 2013			   #	
#	Email: hilmiazli@gmail.com	   #	
####################################

session_start();
// DB Connection


// Check login
if(!$_SESSION['matrik']){header("location:SilaloginPelajar.php");}

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

<!-- content -->

	<div id="content-wrapper">
		
		<?php
			include('connection/con_db.php');
			
			$keyword = $_POST['keyword'];

			$query = mysql_query("SELECT * FROM addproject WHERE tajukProjek like '%".$keyword."%' OR keyword like '%".$keyword."%'")or die(mysql_error());

			
		?>
		<div class="section-title-left"><img src="icons/arahan_detail.png" style="margin-right: 10px;"/>Search Project</div>
		<div id="content" style="text-align:left;border:0px solid black;">
			<table class="list">
				<thead>
					<tr>
						<td class="left">Matric</td>
						<td class="left">Name</td>
						<td class="left">Project Title</td>

					</tr>
				</thead>
				<tbody>
					<?php
											
						if(mysql_fetch_row($query) == 0){
							echo "<tr>
								   <td class='center' colspan='4' style='text-align:center'>No record found</td>
								  </tr>"; 
						}else{
							
							$query2 = mysql_query("SELECT 	maklumatpelajar.matrik,
															maklumatpelajar.nama,
															maklumatpelajar.semester,
															maklumatpelajar.penyelia_id,	
															addproject.tajukProjek
												   FROM addproject				
												   LEFT JOIN maklumatpelajar ON maklumatpelajar.matrik = addproject.matrik
												   WHERE addproject.tajukProjek LIKE '%".$keyword."%'")or die(mysql_error());
						
							while($result = mysql_fetch_assoc($query2)){
								echo "<tr>";
								echo "<td class='left'>".$result['matrik']."</td>
									  <td class='left'>".$result['nama']."</td>
									  <td class='left'>".$result['tajukProjek']."</td>";
								echo "</tr>";
							}
						}
					
					?>
				</tbody>
			</table>	
		</div>
	</div>
	
	

	
	

<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>