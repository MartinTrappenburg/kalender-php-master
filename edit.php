<?php
    require_once('connection.php');
    $id = $_GET['id'];
    $sql_edit_id = "SELECT person, day, month, year FROM birthdays WHERE id=". $id;
    $result = mysqli_query($conn, $sql_edit_id);
    $edit = mysqli_fetch_array($result);
  
    $person = $edit['person'];
    $day = $edit['day'];
    $month = $edit['month'];
    $year = $edit['year'];
?>

<html>
<head>
    <title>edit bday</title>
</head>
<body>
    <form action="editpost.php" method="post">
        <input type="text" value="<?php echo $person; ?>" name="person" required="" placeholder="name">
        <input type="number" min="1" max="32" value="<?php echo $day; ?>" name="day" required="" placeholder="day">
        <input type="number" min="1" max="12" value="<?php echo $month; ?>" name="month" required="" placeholder="month">
        <input type="number" min="1900" max="<?php echo date('Y'); ?>" value="<?php echo $year; ?>" name="year" required="" placeholder="year">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Edit birthday">
    </form>
</body>
</html>