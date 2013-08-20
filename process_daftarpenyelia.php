<?php

session_start();

// Check login
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}

include('connection/con_db.php');

	$error = "";
	$err_msg = "";
	
	$staffid = $_POST['staffid'];
	$katalaluan = $_POST['katalaluan'];
	$namapenyelia = $_POST['namapenyelia'];
	$jawatan = $_POST['jawatan'];
	$jantina = $_POST['jantina'];
	$notelefon = $_POST['notelefon'];
	$email = $_POST['email'];
	$nobilik = $_POST['nobilik'];
	$kepakaran = $_POST['kepakaran']; 
	$kuota = $_POST['kuota']; 
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid email address.";
	}
	
	if(empty($kuota) || empty($kepakaran) || empty($katalaluan) || empty($nobilik) || empty($email) || empty($notelefon) || empty($jantina) || empty($jawatan) || empty($namapenyelia) || empty($staffid))
		$error = "Please complete this form!";
		
	$query = mysql_query("SELECT * FROM loginpenyelia WHERE staffid = '".$staffid."'");
	
	if(mysql_num_rows($query) > 0)
		$error = "Staff ID already exists. Please try again.";
	
		
	if(!empty($error)){
		echo "<div class='warning'>" . $error . "</div>";
	} else {
		// Insert login details
		mysql_query("INSERT INTO loginpenyelia SET staffid = '".$staffid."', katalaluan = '".$katalaluan."'") or die(mysql_error());
		// Insert Profile information
		mysql_query("INSERT INTO maklumatpenyelia SET	staffid = '".$staffid."',
													  	namaPenyelia = '".$namapenyelia."',
														jawatan = '".$jawatan."',
														jantina = '".$jantina."',
														notelefon = '".$notelefon."',
														emel = '".$email."',
														noBilik = '".$nobilik."',
														kepakaran = '".$kepakaran."',
														noOfStudent = '0',
														kuota = '".$kuota."'")or die(mysql_error());
														
		echo "<script>alert('Successfully registered!');</script>";
		echo "<script>location.href='senaraiPenyelia.php';</script>";
	}
	
?>