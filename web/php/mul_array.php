<!DOCTYPE html>
<html>
	<head><title>Indexed array</title></head>
	<body>
		<?php
			$student=array(
							array(10, "sachin"),
							array(20, "saurav"),
							array(30, "Dravid"),
							);
			echo "The elements in two dimensional array<br/>";
			
			for($row=0; $row<3; $row++)
			{
				for($cl=0; $cl<2;$cl++)
				{
				echo " ".$student[$row][$cl];
				}
				echo"<br/>";
			}
		?>
	</body>
</html>