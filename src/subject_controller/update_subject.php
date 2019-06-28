<?php
include_once('../database/connection.php');

$id = $_GET['id'];
$name = $_GET['name'];


$sql = "UPDATE subject SET  name = '$name' WHERE id = '$id'";

$db_con -> exec($sql);
header('Location: ../../subject/listaCurso.php');
?>