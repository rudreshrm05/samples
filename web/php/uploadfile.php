<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_FILES["file1"]))
		{
			$file_name=$_FILES["file1"]["name"];
			$file_type=$_FILES["file1"]["type"];
			$file_size=$_FILES["file1"]["size"];
			$file_tmp_name=$_FILES["file1"]["tmp_name"];
			$file_error=$_FILES["file1"]["error"];
			echo "<div>filename: ".$file_name."</div>";
			echo "<div>filename: ".$file_type."</div>";
			echo "<div>filename: ".$file_size."</div>";
			echo "<div>filename: ".$file_tmp_name."</div>";
			echo "<div>error: ".$file_error."</div>";
		}
	}
?>
		
			