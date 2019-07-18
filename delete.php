<?php
include "db.php";
$id = $_GET['id'];

$mysqli_query=" DELETE FROM login WHERE Id = '$id' ";

mysqli_query($con, $mysqli_query);

header('location:display.php');

?>
