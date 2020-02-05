<?php
		// $path = "./files/test.txt";
		$path = $_SERVER["DOCUMENT_ROOT"] . "/demo/files/test.txt";
		$file = fopen($path, "r");
	while(!feof($file)) {
		echo fgets($file);
	}
?>
