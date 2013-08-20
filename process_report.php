<?php

// DB connection
include('connection/con_db.php');

$type_id = isset($_POST['type_id']) ? $_POST['type_id'] : ""; 


// Check option type
if($type_id == 1){
	
	global  $paginate, $total_pages;
	$target_page = "report.php";
	$limit = 3;
	
	$query = "SELECT COUNT(*) AS num FROM maklumatpelajar";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages['num'];
	
	$stages = 3;
	$page = isset($_GET['page']) ? $_GET['page'] : "";
	
	if($page){
		$start = ($page - 1) * $limit;
	} else {
		$start = 0;
	}
	
	$result = mysql_query("SELECT * FROM maklumatpelajar ORDER BY matrik ASC LIMIT $start, $limit");
	
	// Execute result
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
	
	// Prepare count
	$count = 1;
	
	// Display Result
	echo 	"<table class='list'>
				<thead>
					<tr>
						<td class='right' width='30px'>&nbsp;</td>
						<td class='left'>Matic No.</td>
						<td class='left'>Name</td>
					</tr>
				</thead>
			";
	
	while($row = mysql_fetch_array($result)){
		$id = $row['matrik'];
		echo "<tr>";
		echo "<td class='right' width='30px'>".$count."</td>";
		echo "<td class='left'>".$row['matrik']."</td>";
		echo "<td class='left'>".$row['nama']."</td>";
			echo "<tr>";
		$count++;
	}
	
} else if($type_id == 2){
	echo "this is type 2";
}

?>