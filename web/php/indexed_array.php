<!DOCTYPE html>
<html>
	<head><title>Indexed array</title></head>
	<body>
		<?php
			$names=array("sachin", "saurav", "Dravid", "dhoni");
			$myvar=current($names);
			print("the current value of the array is <b>$myvar</b>");
			print("<br/>");
			
			$myvar=next($names);
			print("the next1 value of the array is <b>$myvar</b>");
			print("<br/>");
			
			$myvar=next($names);
			print("the next2 value of the array is <b>$myvar</b>");
			print("<br/>");
			
			$myvar=next($names);
			print("the next3 value of the array is <b>$myvar</b>");
			//print_r($names);
		?>
	</body>
</html>