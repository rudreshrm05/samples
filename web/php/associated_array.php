<!DOCTYPE html>
<html>
	<head><title>Indexed array</title></head>
	<body>
		<?php
			$names=array("A"=>"Sachin", "B"=>"Ashwin", "C"=>"Dravid", "D"=>"Zaheer");			
			print("original array:");
			foreach($names as $key=>$value)
			{
			print("[$key]=>$value");
			print("<br/>");
			}
			sort($names);
			print("sorted array:");
			foreach($names as $key=>$value)
			{
			print("[$key]=>$value");
			print("<br/>");
			}
			asort($names);
			print("sorted array by asort:");
			foreach($names as $key=>$value)
			{
			print("[$key]=>$value");
			print("<br/>");
			}
		?>
	</body>
</html>