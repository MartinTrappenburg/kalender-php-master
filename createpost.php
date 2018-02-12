<?php 
require_once('Header.php');
var_dump($_REQUEST['geboorte']);
	$FirstName = $_REQUEST['name'];
	$Birthday = $_REQUEST['geboorte'];

		$sql = "INSERT INTO birthdays (naam, datum) VALUES ('$FirstName','$Birthday')";
		if ($conn->query($sql) === TRUE) {
	    	echo "New record created successfully";
		} else {
	    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
		header("Location: index.php");
?>
