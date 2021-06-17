<?php 

$title = "Modifier une news"; ?>

<?php ob_start(); ?>

<section id="adminPanel">
	<h1>Panel d'administration</h1>
	<div>
		<div id="formUpdate">
			<form action="" method="post">
				<label for="title">Titre : </label>
				<input type="text" name="title" id="title" value="" /><br />
				<textarea name="content" class="form-control" id="exampleTextarea" rows="20" cols="40"></textarea>
				<input class="mb-5" type="submit" value="Modifier" />
			</form>
		</div>
	</div>

</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>