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
          <td height="17" bgcolor="#FFFFFF"><div align="right">
            <div align="right"><a href="logoutPenyelaras.php"><img src="icons/logout.png" width="30" height="30" /></a></div>
          </div></td>
        </tr>
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
      <?php include("footer/menupenyelia2.php"); ?>
    </div></td>
  </tr>
</table>

<!-- content -->

	<div id="content-wrapper">
		<div class="section-title-left"><img src="icons/pengguna.png" style="margin-right: 10px;"/>Senarai Pelajar</div>
		<div id="content">
			<table class="list">
				<thead>
					<tr>
						<td class="left">Nama</td>
						<td class="left" width="100px">No. Matrik</td>
						<td class="left" width="200px">Penyelia</td>
						<td class="right" width="100px">Action</td>
					</tr>
				</thead>
				<tbody>
					<?php
						include('connection/con_db.php');
						global $paginate, $total_pages;
						
						$targetpage = "senaraiPelajar.php";
						$limit = 5;
						
						$query = "SELECT COUNT(*) as num FROM maklumatpelajar";
						$total_pages = mysql_fetch_array(mysql_query($query));
						$total_pages = $total_pages['num'];
						
						$stages = 3;
						$page = (isset($_GET['page'])) ? $_GET['page'] : "";
						
						//$page = mysql_escape_string($_GET['page']);
						
						if($page){
							$start = ($page - 1) * $limit;
						} else {
							$start = 0;
						}
						
						// Get Data Page
						$result = mysql_query("	SELECT 	maklumatpelajar.matrik,
														maklumatpelajar.nama,
														maklumatpelajar.penyelia_id,
														maklumatpenyelia.namaPenyelia
												FROM maklumatpelajar
												LEFT JOIN maklumatpenyelia ON maklumatpelajar.penyelia_id = maklumatpenyelia.staffId
												ORDER BY nama ASC LIMIT $start, $limit ");
													

						// Initial page num setup
						if ($page == 0){
							$page = 1;
						}
					
						$prev = $page - 1;	
						$next = $page + 1;							
						$lastpage = ceil($total_pages/$limit);		
						$LastPagem1 = $lastpage - 1;
						
						//  Create default variable
						$paginate = '';
						
						if($lastpage > 1){
							$paginate .= "<div class='paginate'>";
							if ($page > 1){
								$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
							}else{
								$paginate.= "<span class='disabled'>previous</span>";	
							}
							
							// Pages	
							if ($lastpage < 7 + ($stages * 2)){	
								for ($counter = 1; $counter <= $lastpage; $counter++)
								{
									if ($counter == $page){
										$paginate.= "<span class='current'>$counter</span>";
									}else{
										$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";
									}					
								}
							}
							elseif($lastpage > 5 + ($stages * 2)){
								// Beginning only hide later pages
								if($page < 1 + ($stages * 2))		
								{
									for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
									{
										if ($counter == $page){
											$paginate.= "<span class='current'>$counter</span>";
										}else{
											$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";
										}					
									}
									$paginate.= "...";
									$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
									$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
								}
								// Middle hide some front and some back
								elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
								{
									$paginate.= "<a href='$targetpage?page=1'>1</a>";
									$paginate.= "<a href='$targetpage?page=2'>2</a>";
									$paginate.= "...";
									for ($counter = $page - $stages; $counter <= $page + $stages; $counter++){
										if ($counter == $page){
											$paginate.= "<span class='current'>$counter</span>";
										}else{
											$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
									}
									$paginate.= "...";
									$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
									$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
								}
								// End only hide early pages
								else{
									$paginate.= "<a href='$targetpage?page=1'>1</a>";
									$paginate.= "<a href='$targetpage?page=2'>2</a>";
									$paginate.= "...";
									for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++){
										if ($counter == $page){
											$paginate.= "<span class='current'>$counter</span>";
										}else{
											$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
									}
								}
							}
							// Next
							if ($page < $counter - 1){ 
								$paginate.= "<a href='$targetpage?page=$next'>next</a>";
							}else{
								$paginate.= "<span class='disabled'>next</span>";
							}
							// End style
							$paginate.= "</div>";	
						}
						
						// Display Result
						while($row = mysql_fetch_array($result)){
							$id = $row['matrik'];
							echo "<tr>";
							echo "<td class='left'>".$row['nama']."</td>";
							echo "<td class='left'>".$row['matrik']."</td>";
							echo "<td class='left'>";
									if($row['penyelia_id'] == 0)
										echo "<font color='red'><b>TIADA PENYELIA</b></font>";
									else
										echo $row['namaPenyelia'];
							echo "</td>";
							echo "<td class='right'>[ <a href='senaraiPelajarDetail.php?id=$id'>View</a> ]</td>";
							echo "<tr>";
						}
					?>
				</tbody>
			</table>
			<!-- display pagination -->
			<div class="pagi-wrap">
				<?php echo $paginate; ?>
			</div>
		</div>
		<br/><br/>
		<div id="pelajar" style="display:none;">
			<div class="section-title-left"> Maklumat Pelajar</div>
			<div class="box" style="width: 90%;">
				<div class="heading"><h1></h1></div>
			</div>
		</div>
	</div>


<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>