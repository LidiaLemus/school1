<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div>
    <div class="columns">
        <div class="column is-flex is-vcentered">
            <div class="section">
                <?php include_once('../templates/menu.php') ?>
            </div>
        </div>
        <div class="column is-trhee-quarters is-vcentered"><br><br><br>
            <div class="box">
                <form method="get" action="../src/subject_controller/update_subject.php?">
                    <h1 class="title is-4">Actualizar Datos</h1>

                    <input type="hidden" name="id" value="<?php echo($_GET['id'])?>">

                    <div class="field">
                        <label class="label">Curso</label>
                        <div class="control">
                            <input name="name" class="input" type="text" value="<?php echo($_GET['name'])?>" placeholder="Nombre del curso">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary">
                                <span class="icon is-small">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span>
                                    actualizar
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column"></div>
    </div>
</div>
<?php require_once('../templates/footer.php'); ?>