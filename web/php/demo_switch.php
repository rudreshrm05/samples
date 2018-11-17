<!DOCTYPE html>
<html>
	<head>
		<title>selection demo - switch</title>
	</head>
	<body>
		<?php
			$today=getdate();
			switch($today['weekday']){
			case "Monday":print("today is monday");break;
			case "Tuesday":print("today is tue");break;
			case "Wednesday":print("today is wed");break;
			case "Thursday":print("today is thur");break;
			case "Friday":print("today is Fri");break;
			case "Saturday":print("today is sat");break;
			case "Sunday":print("today is sun");break;
			default: print("invalid");
			}
		?>
	</body>
</html>