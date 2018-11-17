<!DOCTYPE html>
<html>
	<head>
		<title>selection demo</title>
	</head>
	<body>
		<?php
			$a=10;
			$b=20;
			$c=30;
			
			if($a>$b){
				if($a>$c){
					print("a is the largest num");
				}
				else{
				print("c is the largest number");
				}
			}
			else{
				if($b>$c){
				print("b is largest num");
				}
				else{
				print("c is largest");
				}
			}
		?>
	</body>
</html>