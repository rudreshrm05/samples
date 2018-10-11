<!DOCTYPE html>
<html>
	<head><title>Indexed array</title></head>
	<body>
		<?php
			$names=array("D"=>"Ashwin", "C"=>"Dravid", "B"=>"Sachin", "A"=>"Zaheer");			
			print("original array:");
			foreach($names as $key=>$value)
			{
			print("[$key]=>$value");
			print("<br/>");
			}
			ksort($names);
			print("sorted array by asort:");
			foreach($names as $key=>$value)
			{
			print("[$key]=>$value");
			print("<br/>");
			}
		?>
	</body>
</html>