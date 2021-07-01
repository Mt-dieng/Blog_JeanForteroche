<?php 

$title = "Modifier une news"; ?>

<?php ob_start(); ?>

<section class=" text-center p-5" id="#">
	<div class="frame">
		<h1 class="text-center" id="adminPanel">Panel d'administration</h1>
		<div id="formUpdate" class=" m-4 p-5">
			<form action="" method="post">
				<label for="title">Titre : </label>
				<input type="text" name="title" placeholder="Votre titre" id="title" value="" /><br />
				<textarea name="content" class="form-control" id="contenuTinyMCE" rows="10" cols="20"></textarea><br />
				<input class="btn btn-outline-info" type="submit" value="Modifier" />
			</form>
		</div>
	</div>

</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>