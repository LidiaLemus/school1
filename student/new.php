<?php require_once('../templates/header.php'); ?>
<?php require_once('../templates/navbar.php'); ?>

<div class="columns">
	<div class="column"></div>
	<div class="column is-three-quarters">
		<form method="post" action="../src/student_controller/create.php">

			<div class="field">
  <label class="label">New Student</label>
  <div class="control">
    <input class="input" type="text" placeholder="Full name" name="fullname">
  </div>
</div>
<div class="field">
  <div class="control">
    <input class="input" type="date" placeholder="Birthdate" name="birthdate">
  </div>
</div>
<div class="field is-grouped is-pulled-right">
	<div class="control">
		<button class="button is-success">save changes</button>
	</div>
<p class="control">
	<a class="button is-danger">Cancel</a>
</p>
</div>
		</form>
	</div>
	<div class="column"></div>
	
</div>

<?php require_once('../templates/footer.php'); ?>
