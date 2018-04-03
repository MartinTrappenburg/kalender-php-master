<?php 
/*GEEF EEN DELETEKNOP MEE
	$iddeletion = $_REQUEST['name'];
	public function RemoveUser($Deleteid)
	{
		$sql = "DELETE FROM birthdays WHERE $Deleteid";
	}
?><?php
$sql = "SELECT id FROM birthdays;";
if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
}

while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $name = $row['person,'];
  // use id, name to generate one row of HTML table

}	*/

require_once('connection.php');
$remove = $_GET['id'];
$sql_delete_id = "DELETE FROM birthdays WHERE id=" . $remove;
mysqli_query($conn, $sql_delete_id);
header("Location: index.php");