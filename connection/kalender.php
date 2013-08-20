<?php

$date=time();
$day=date('d', $date);
$month=date('m' $date);
$year=date('Y', $date);
$first_day=mktime(0,0,0, $month,1, $year);
$title=date('F', $first_day);
$day_of_week=date('D', $first_day);

	switch ($day_of_week)
	{
		case "Ahad" : $blank = 0; 
		break;
		case "Isnin" : $blank = 1; 
		break;
		case "Selasa" : $blank = 2; 
		break;
		case "Rabu" : $blank = 3; 
		break;
		case "Khamis" : $blank = 4; 
		break;
		case "Jumaat" : $blank = 5; 
		break;
		case "Sabtu" : $blank = 6; 
		break;
	}

$days_in_month=cal_days_in_month(0, $month, $year);

	echo "<table border=6 width=394>";
	echo "<tr> <th colspan=60> $title $year </th></tr>";
	echo "<tr><td width=62>S</td><td witdh=62>M</td><td width=62>T</td>";
	
	
	$day_count=1;
	echo "<tr>";
			
	while
		($blank > 0)
		{
			echo "<td></td>";
			$blank = $blank-1;
			$day_count ++;
		}
		
		$day_num=1
		
		while
		($day_num <= $days_in_month)
		{
			echo "<td> $day_num</td>";
			$day_num ++;
			$day_count ++;
			
			if($day_count >7)
			{
				echo "</tr><tr>";
				$day_count=1;
			}
			
		}
		while
		($day_count > 1 && $day_count <=7)
		{
			echo "<td></td>";
			$day_count ++;
		}
		echo "</tr></table>";
		
		?>
		