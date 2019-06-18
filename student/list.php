<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<?php require_once('../src/database/connection.php');
$sql = "select * from student";
if($db_con){
$result = $db_con->query($sql);
}

?>
<div class="columns">
	<div class="column"></div>
	<div class="column is-three-quarters">
		<?php 
		echo "<table border=2px>";

            echo"<tr>";
            echo"<td>";
                echo"codigo";
            echo"</td>";
            echo"<td>";
                echo"Name";
            echo"</td>";
            echo"<td>";
                echo"Birthdate";
            echo"</td>";
            echo"</tr>";
		    foreach ($result as  $value) {


            echo"<tr>";
               echo"<td>";
                    echo "<br>" . $value["codigo"];
               echo"</td>";
            echo"<td>";
            echo "<br>"  . $value["fullname"];

            echo"</td>";

            echo"<td>";
            echo  "<br>" . $value["birthdate"];

            echo"</td>";
                echo"<td>";

            echo"</tr>";
            echo "<br>";
			
		}
		 echo "</table>";
			?>
	</div>
	<div class="column"></div>
</div>

<?php require_once('../templates/footer.php'); ?>