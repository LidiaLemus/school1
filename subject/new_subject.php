<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="columns">
	 <div class="column is-flex is-vcentered">
            <div class="section">
                <?php include_once('../templates/menu.php') ?>
            </div>
        </div>
	<div class="column"></div>
	<div class="column is-three-quarters">
		<form method="post" action="../src/subject_controller/create_subject.php">

			<div class="field">
  <label class="label">Nuevo Curso</label>
  <div class="control">
    <input class="input" type="text" placeholder="name" name="name">
  </div>
</div>

<div class="field is-grouped is-pulled-right">
	<div class="control">
		<button class="button is-success">Guardar</button>
	</div>
<p class="control">
	<a class="button is-danger">Cancelar</a>
</p>
</div>
		</form>
	</div>
	<div class="column"></div>
	
</div>

<?php require_once('../templates/footer.php'); ?>
