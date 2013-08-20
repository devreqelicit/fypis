<!DOCTYPE HTML>
<title>Report : FYP Information System</title>
<head>
<style type="text/css">
	<!--
		body, html {padding: 0;margin: 0;}
		
		#loading{margin: 0 auto;width: 100px;border: 0px solid black;}
		
		.small{width: 100px;height: 100px;}
		
		.generate{text-align: center;margin: auto;width: 20%;font-family: Verdana;font-size: 14px;font-weight: bold;color: #bbbbbb;border: 0px solid black;}
	-->
</style>
</head>
<body>
	<div id="loading">
	<img src="../images/LoadingBar.gif" class="small"/>
	</div>
	<div class="generate">Generating Report . . .</div>	
	
	<?php
	
		$semester = isset($_GET['semester']) ? $_GET['semester'] : "";
		$day = isset($_GET['day']) ? $_GET['day'] : "";
		$report = isset($_GET['report']) ? $_GET['report'] : "";
		
		if($report == 1){
			echo '<meta http-equiv="Refresh" content="3;url=list_of_student.php?semester='.$semester.'"/>';
		}
		
		if($report == 2){
			echo '<meta http-equiv="Refresh" content="3;url=rpt_presentation.php?day='.$day.'&semester='.$semester.'"/>';
		}
	
	
	?>
</body>
</html>