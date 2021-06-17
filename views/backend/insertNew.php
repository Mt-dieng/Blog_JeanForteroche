<?php 

$title = "Ajouter une news"; ?>

<?php ob_start(); ?>

<section id="#" class="mx-auto align-middle">
	<h1 class="text-center">Panel d'administration</h1>
	<div id="formInsert" class="mx-auto">
		<div>
			<form action="#" method="post">
				<label for="title">Titre : </label>
				<input type="text" name="title" id="title" placeholder="Votre titre" size="30" /><br />
				<textarea name="content" class="form-control" id="exampleTextarea" rows="20" cols="40"></textarea>
				<input class="mb-5" type="submit" value="Ajouter" />
			</form>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>