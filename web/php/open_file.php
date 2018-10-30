<?php
	$file=fopen("myfile.txt", "r");
	while(!feof($file))
	{
		echo fgets($file)."<br/>";//fgetc() - single char
	}
	fclose($file);
?>