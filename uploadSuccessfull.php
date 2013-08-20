<?php
// Define file size limit
$limit_size=100000;
//GLOBAL $HTTP_POST_FILES ;
//set where you want to store files
//in this example we keep file in folder upload
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif
$uploaddir = 'C:\\xampp\\htdocs\\SMPPTA\\upload\\';
$path= $uploaddir.$_FILES['uploadfail']['name'];
//echo $_FILES['uploadfail']['name'];
if (is_uploaded_file($_FILES['uploadfail']['tmp_name']))
{
    // Store upload file size in $file_size
		$file_size=$_FILES['uploadfail']['size'];

	if($file_size >= $limit_size)
	{
		
		echo "Fail yang anda muat naik melebihi had !!<BR>";
		echo "Saiz fail anda ialah = ".$file_size;
		echo " K";
		echo "<BR>Had saiz fail = 100000 k";
		
		
	}
	else
	{
	//copy file to where you want to store file
		if(copy($_FILES['uploadfail']['tmp_name'], $path))
		{
		header("location:viewuploadsuccessfull.php");
		
		}
		else
		{
			echo "Copy Error";
		}
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::SISTEM MAKLUMAT PROJEK PELAJAR TAHUN AKHIR::.</title>


<body><br />
<a href="uploadfail.php">Kembali</a>
</body>
</html>
