<?php 
require_once('connection.php');
	$FirstName = $_REQUEST['name'];
	$Day = $_REQUEST['dag'];
	$Month = $_REQUEST['maand'];
	$Year = $_REQUEST['jaar'];

		$sql = "INSERT INTO birthdays (person, day, month, year) VALUES ('$FirstName','$Day', '$Month', '$Year')";
		if ($conn->query($sql) === TRUE) {
	    	echo "New record created successfully";
		} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
		header("Location: index.php");
?>
