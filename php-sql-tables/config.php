<?php
	$server = "localhost";
	$login = "test-prosv";
	$pass = "05030211";
	$db = "lesson-php";

	$connect = mysqli_connect($server, $login, $pass, $db);

	if (mysqli_connect_errno()) {
		die("Connect faild: ". mysqli_connect_errno());
	}
?>