<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "calendar";
	$conn = mysqli_connect($servername, $username, $password, $db);

	if (!$conn ) {
		die("connection_failed".mysqli_connect_error());
	}
	echo "connection succesful!";
	$result = $conn->query('SELECT * FROM birthdays');
	var_dump($result)
?>