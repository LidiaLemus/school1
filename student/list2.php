<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="columns">
	 <div class="column is-flex is-vcentered">
            <div class="section">
                <?php
include_once('../src/database/connection.php');
$datos = $db_con->prepare("SELECT fullname, birthdate FROM student");
$datos->execute();

print("PDO::FECTCH_BOTH: ");
print("Datos");
$result = $datos->fetch(PDO:: FETCH_BOTH);
print_r($result[0].[1]);
echo "<p>$result[1]</p>";
print("\n");

?>
            </div>
        </div>
	
		
	<div class="column"></div>
	
</div>

<?php require_once('../templates/footer.php'); ?>
