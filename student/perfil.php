<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="hero is-light is-fullheight">
    <div class="columns">
        <div class="column is-flex is-vcentered">
            <div class="section">
                <?php include_once('../templates/menu.php') ?>
            </div>
        </div>
        <div class="column is-trhee-quarters is-vcentered"><br><br><br>
            <div class="box">
                <form method="get" action="../src/student_controller/myperfil.php?">
                    <h1 class="title is-4">Detalle del Estudiante</h1>

                    <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">

                     <div class="field">
                        <div class="control">
                            <label class="label">Codigo</label>
                            <label><?php echo($_GET['codigo'])?></label>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Nombre Completo</label>
                        <div class="control">
                            <label><?php echo($_GET['fullname'])?></label> 
                        </div>
                    </div>
                    
                    <a class="button is-small is-fullwidth is-primary" >Imprimir Constancia</a>
                    <a class="button is-small is-fullwidth is-warning">Asignar</a>
                </form>
            </div>
        </div>
        <div class="column"></div>
    </div>
</div>
<?php require_once('../templates/footer.php'); ?>