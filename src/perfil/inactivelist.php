<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<?php endif; ?>
<?php
    require_once('../src/database/connection.php'); 
    $sql = "SELECT * FROM student WHERE is_active = 1";
    $result = $db_con->query($sql);
?>

<div class="container">
    <div class="columns">
    <div class="column">
        <h1 class="title">Students</h1>
    </div>
    <div class="column is-one-quarter">
        <a href="list.php" class="button is-warning">Inactive Students</a>
        <a href="new.php" class="button is-primary">New</a>
    </div>
    </div>
    <div class="row justify-content-center">
        <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>

        <?php 
            $i = 0;
            foreach($result as $row): 
                ?>
            <tr>
                <td>
                    <?php echo $i = $i + 1;?>
                </td>
                <td> 
                    <?php echo $row['codigo']; ?>
                </td>
                <td>
                    <?php echo $row['fullname']; ?>
                </td>
                <td>
                    <?php echo $row['birthdate']; ?>
                </td>
                <td>
                    <a href="detail.php?id=<?php echo $row['id']; ?>" class="button is-warning">Detail</a>
                </td>
                
            </tr>
            <?php endforeach; ?>
            </table>
    </div>
</div>


<?php require_once('../templates/footer.php'); ?>