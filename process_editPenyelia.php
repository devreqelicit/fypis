<?php

session_start();

// Check login
if(!$_SESSION['staffId']){header("location:SilaloginPenyelia.php");}


include('connection/con_db.php');

	$error = "";
	$err_msg = "";
	
	$staffId = $_POST['staffid'];
	$namapenyelia = $_POST['namapenyelia'];
	$jawatan = $_POST['jawatan'];
	$jantina = $_POST['jantina'];
	$notelefon = $_POST['notelefon'];
	$email = $_POST['email'];
	$nobilik = $_POST['nobilik'];
	$kepakaran = $_POST['kepakaran']; 
	$kuota = $_POST['kuota']; 

	if(empty($kuota) || empty($kepakaran) || empty($nobilik) || empty($email) || empty($notelefon) || empty($jantina) || empty($jawatan) || empty($namapenyelia))
		$error = "Sila lengkapkan borang pendaftaran ini!";
		
	if($error != ""){
		echo "<div class='warning'>" . $error . "</div>";
	} else {

		// update Profile information
		mysql_query("UPDATE maklumatpenyelia SET	namaPenyelia = '".$namapenyelia."',
													jawatan = '".$jawatan."',
													jantina = '".$jantina."',
													notelefon = '".$notelefon."',
													emel = '".$email."',
													noBilik = '".$nobilik."',
													kepakaran = '".$kepakaran."',
													kuota = '".$kuota."' WHERE staffId = '".$staffId."'")or die(mysql_error());
														
		echo "<script>alert('Data has been successfully updated!');</script>";
		echo "<script>location.href='senaraiPenyelia.php';</script>";
	}
	

	
?>