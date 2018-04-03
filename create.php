<html>
<head>
	<title>Create bday</title>
	<?php require_once('connection.php'); ?>
</head>
<body>

	<form action="createpost.php" method="post">
		<input type="text" name="name" required="" placeholder="name">
		<input type="number" min="1" max="31" required="" name="dag">
		<input type="number" min="1" max="12" required="" name="maand">
		<input type="number" min="1900" max="<?php echo date('Y'); ?>" required="" name="jaar">
		<input type="submit" name="submit" value="Register Birthday">
	</form>
</body>
</html>