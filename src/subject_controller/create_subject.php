<?php 

require_once('../database/connection.php');

$save = $_POST['save'];
$name = $_POST['name'];



$sql = "insert into subject values(null,null,'$name',1)";
if(isset($db_con)== false) {

} else{
	$db_con->exec($sql);
	header('Location: ../../subject/listaCurso.php');
}

 ?>