<!DOCTYPE html>
<html>
	<head>
		<title>constructors</title>
	</head>
	<body>
		<?php
			class student{
				public static $count=0;
				public $usn;
				public $name;
				
				function _construct($usn, $name){
					$this->usn=$usn;
					$this->name=$name;
					self::$count++;
				}
				function display_count(){
					echo "count=".self::$count;
				}
				function display(){
					echo "<br/>".$this->usn."<br/>".$this->name;
				}
			}
			$student1=new student(100, "sachin");
			$student1->display_count();
			
			$student2=new student(99, "saurav");
			$student2->display_count();
			
			$student1->display();
			$student2->display();
		?>
	</body>
</html>