<?php
include_once('../database/connection.php');

$id = $_GET['id'];
$codigo = $_GET['codigo'];
$name = $_GET['name'];

$sql = "UPDATE subject SET  codigo = '$codigo', name = '$name' WHERE id = '$id'";

$db_con -> exec($sql);
header('Location: ../../student/list.php');
?>