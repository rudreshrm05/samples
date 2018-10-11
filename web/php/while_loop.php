<!DOCTYPE html>
<html>
	<head><title>Indexed array</title></head>
	<body>
		<?php
			$names=array("sachin", "saurav", "Dravid", "dhoni");
		    while($myvar=each($names))
			{
			$var=$myvar["value"];
			print("the current of array is <b>$var</b>");
			print("<br/>");
			}
		?>
	</body>
</html>