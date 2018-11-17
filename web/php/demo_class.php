<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			class student{
				var $usn;
				var $name;
				
				function set_rollnum($r){
					$this->usn=$r;
				}
				function get_rollnum(){
					echo $this->usn;
				}
				function set_name($n){
					$this->name=$n;
				}
				function get_name(){
					echo $this->name;
				}
			}
			$student1=new student();
			$student2=new student();
			
			$student1->set_rollnum(100);
			$student1->set_name("sachin");
			$student2->set_rollnum(99);
			$student2->set_name("saurav");
			
			$student1->get_rollnum();
			$student1->get_name();
			$student2->get_rollnum();
			$student2->get_name();
		?>
	</body>
</html>