<?php
require_once('../database/connection.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $fullname = $row['fullname'];
        $birthdate = $row['birthdate'];
    }
}
   
if (isset($_POST['update'])){

    $id = $_GET['id'];
    $fullname = $_POST['fullname'];
    $birthdate = $_POST['birthdate'];

    $query = "UPDATE student set fullname = '$fullname', birthdate = '$birthdate' WHERE id = $id";
         mysqli_query($conn, $query);
     $_SESSION['message'] = 'student update Successfully ';
     $_SESSION['message_type'] = 'info';
     header("Location: index.php");

}
?>