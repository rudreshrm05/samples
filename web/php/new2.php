<!DOCTYPE html>
<html>
	<head><title>Indexed array</title></head>
	<body>
		<?php
			$names=array("sachin", "saurav", "Dravid", "dhoni", "zaheer");
		    $names[8]="kohli";
			print_r($names);
			unset($names[1]);
			print_r($names);
			$names=array_values($names);
			print_r($names);
		?>
	</body>
</html>