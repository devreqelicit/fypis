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
<!-- submit form -->
<script type="text/javascript">  
  $(document).ready(function(){  
		$("#daftar").submit(function(event) {  
			
			/* stop form from submitting normally */  
			event.preventDefault();   

			$.ajax({
				type:'POST',
				url:'process_daftarpenyelia.php',
				data:$("#daftar").serialize(),
				success:function(data) {
					$("#result").html(data);
					
					
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
      <?php include("footer/menuPenyelaras.php"); ?>
    </div></td>
  </tr>
</table>

<!-- content -->

	<div id="content-wrapper">
		<div class="section-title-left">Registration</div>
		<div id="content">
			<!-- display output -->
			<div id="result"></div>
			<!-- registration form -->
			<form action="#" method="post" id="daftar">
				<table class="form">
					<tr>
						<td>Staff ID<font color="red"> *</font></td>
						<td><input type="text" name="staffid" size="30" /></td>
					</tr>
					<tr>
						<td>Password<font color="red"> *</font></td>
						<td><input type="password" name="katalaluan" size="30" /></td>
					</tr>
					<tr>
						<td>Name<font color="red"> *</font></td>
						<td><input type="text" name="namapenyelia" size="30" /></td>
					</tr>
					<tr>
						<td>Position<font color="red"> *</font></td>
						<td><input type="text" name="jawatan" size="30" /></td>
					</tr>
					<tr>
						<td>Gender<font color="red"> *</font></td>
						<td>
							<select name="jantina">
								<option value="">-- Select --</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Phone No.<font color="red"> *</font></td>
						<td><input type="text" name="notelefon" size="30" /> <font color="red"><i> Cth: 0121234567</i></font></td>
					</tr>
					<tr>
						<td>Email<font color="red"> *</font></td>
						<td><input type="text" name="email" size="30" /><font color="red"><i> Cth: email@fsktm.upm.edu.my</i></font></td>
					</tr>
					<tr>
						<td>Room No<font color="red"> *</font></td>
						<td><input type="text" name="nobilik" size="30" /></td>
					</tr>
					<tr>
						<td>Expertise<font color="red"> *</font></td>
						<td><input type="text" name="kepakaran" size="30" /></td>
					</tr>
					<tr>
						<td>Quota<font color="red"> *</font></td>
						<td><input type="text" name="kuota" size="5" /> </td>
					</tr>
				</table>
				<div style="margin-right:10px;margin-top:5px;margin-bottom:20px;float:right;"><a href="senaraiPenyelia.php" class="button">Cancel</a></div>
				<div style="margin-right:10px;margin-top:5px;margin-bottom:20px;float:right;"><input type="submit" name="daftar" value="Register" class="button"/></div>
				<div class="mandatory">*Mandatory Fields</div>
			</form>
		</div>
	</div>


<?php require_once('footer/footer.php'); ?>
<div align="left"></div>

</body>
</html>