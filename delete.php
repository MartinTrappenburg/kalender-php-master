<?php 
/*GEEF EEN DELETEKNOP MEE*/
	$IDdeletion = $_REQUEST['name'];
	public function RemoveUser($DeleteID)
	{
		$sql = "DELETE FROM birthdays WHERE $DeleteID";
	}
?><?php
$sql = "SELECT id, naam FROM birthdays;";
if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
}

while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $name = $row['naam'];
  // use id, name to generate one row of HTML table
  
}	