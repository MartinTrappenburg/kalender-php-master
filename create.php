<html>
<head>
	<title>Create bday</title>
	<?php require_once('header.php'); ?>
</head>
<body>
	<form action="createpost.php" method="post">
		<input type="text" name="name" placeholder="Name">
		<input type="date" name="geboorte">
		<input type="submit" name="submit" value="Register Birthday">
	</form>
</body>
</html>