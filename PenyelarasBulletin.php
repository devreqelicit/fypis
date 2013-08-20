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
        if (confirm("This operation cannot be undone. Are you sure?")) {
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

	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/arahan_detail.png" style="margin-right: 10px;"/>Bulletin Board</div>
		<div id="content">
			<table class="list">
				<thead>
					<tr>
						<td class="left">Title</td>
						<td class="left" width="100px">Date</td>
						<td class="right" width="100px">Action</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
							
							include('connection/con_db.php');
							
							$sql = "SELECT * FROM buletin ORDER BY tarikh DESC";
							$query = mysql_query($sql);
							
							$student_list = "<div style='text-align: left'>This is Hilmi</div>";
							
							while($result = mysql_fetch_array($query)){
								$id = $result['id'];
								echo "<tr>";
								echo "<td class='left'>".$result['tajuk']."</td>";
								echo "<td class='left' width='100px'>".date('d/m/Y',strtotime($result['tarikh']))."</td>";
								echo "<td class='right' width='100px'>[ <a href='#' onclick=\"window.open('view_bulletin.php?action_detail=$id','', 'width=900, height=700, location=no, menubar=no, status=no,toolbar=no, scrollbars=no, resizable=no' ); return false\">View</a> ][ <a href='PenyelarasBulletin.php?action_delete=$id' onclick='return confirmDelete(this);'>Delete</a> ]</td>";
								echo "<tr>";
							}
							
						?>
					</tr>
				</tbody>
			</table>
			<div class="sub-menu-title">Add News</div>
			<div id="add-announcement">
			
				<?php
				
					include('connection/con_db.php');
					/** Add Data **/
					if(isset($_POST['submit'])){
						$error = "";
						
						$tajuk = $_POST['title'];
						$announcement = $_POST['announcement'];
						
						if(empty($announcement))
							$error = "News must be filled out";
						if(empty($tajuk))
							$error = "Title must be filled out";
						
						if($error != ""){
							echo "<div class='error'>Error: ". $error ."!</div>";
						} else {
							// Insert in db
							$sql = "INSERT INTO buletin SET tarikh = '".date('Y-m-d')."', hari = '".date('l')."',tajuk = '".$tajuk."', buletin = '".$announcement."'";
							$result = mysql_query($sql) or die(mysql_error());
							
							echo "<meta http-equiv='Refresh' content='1;url=PenyelarasBulletin.php'/>";
						}						
					}
					
					/** Delete Data **/
					if(isset($_GET['action_delete'])){
					
						$getData_id = $_GET['action_delete'];
						
						mysql_query("DELETE FROM buletin WHERE id = '".$getData_id."'");
						
						echo "<meta http-equiv='Refresh' content='1;url=PenyelarasBulletin.php'/>";
					
					}
				
				?>
			
				<form action="PenyelarasBulletin.php" method="post">
					<table class="form">
						<tbody>
							<tr>
								<td>Title :<font color="red"> *</font></td>
								<td><input type="text" name="title" size="60" /></td>
							</tr>
							<tr>
								<td valign="top">News :<font color="red"> *</font></td>
								<td><textarea id="elm1" name="announcement" rows="15" cols="80" style="width: 100%"></textarea></td>
							</tr>
						</tbody>
					</table>
					<div style="margin-right:10px;margin-top:5px;margin-bottom:20px;clear:right;"><input type="submit" name="submit" class="button" value="Submit"/></div>
				</form>

			</div>
		</div>
	</div>


<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>