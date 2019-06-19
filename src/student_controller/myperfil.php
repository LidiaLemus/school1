<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>
<br><br><br>
<div class="columns">
    <div class="column is-flex is-vcentered">
        <div class="section">
            <?php include_once('../templates/menu.php') ?>
        </div>
    </div>
    <div class="column is-three-fifths">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title title is-3">ESTUDIANTES INSCRITOS</p>
            </header>
            <div class="card-cotent is-flex is-horizontal-center">
                <table class="table is-hoverable">
                    <thead>
                        <th class="title is-5">Codigo</th>
                        <th class="title is-5">Nombre</th>
                       
                    </thead>
                    <tbody>
                        <?php
                        include('../src/database/connection.php');
                        $sql = 'select * from student';
                        $result = $db_con->query($sql);
                        foreach ($result as $values) {
                            if ($values["is_active"] == 1) {
                                echo "<tr><td>"
                                    . $values["codigo"]
                                    . "</td><td>"
                                    . $values["fullname"]
                                    . "</td><td>"
                                    . "</td><td>"
                                    . "<a href='perfil.php"
                                    . "?id=" . $values["id"]
                                    . "&codigo=" . $values["codigo"]
                                    . "&fullname=" . $values["fullname"]
                                    . "' class = 'button is-small is-success is-outlined'><span class='icon is-small'><i class='fas fa-edit'></i></span><span>perfil</span></a></td>"
                                    . "</td><td>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>
<?php require_once('../templates/footer.php'); ?>
