<?php
include_once('../database/connection.php');

$id = $_GET['id'];
$codigo = $_GET['codigo'];
$fullname = $_GET['fullname'];
$birthdate = $_GET['birthdate'];

$sql = "UPDATE student SET  fullname = '$fullname', birthdate = '$birthdate' WHERE id = '$id'";

$db_con -> exec($sql);
header('Location: ../../student/list.php');
?>