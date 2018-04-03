<?php
    require_once('connection.php');
    $id = $_POST['id'];
    $person = $_POST['person'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $sql_edit_post = "UPDATE birthdays SET person = '$person', day = '$day', month = '$month', year = '$year' WHERE id = $id";
    mysqli_query($conn, $sql_edit_post);
    header("Location: index.php");
?>