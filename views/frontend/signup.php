<?php $title = "Inscription"; ?>

<?php ob_start(); ?>

<section id="signupForm" class="mx-auto">

    <legend class="text-center p-5">S'inscrire</legend>
	<form action="index.php?action=loginSubmit" method="post">
        <fieldset>
            <div class="form-group">
                <label for="pseudo">Pseudo</label><br />
                <input class="mb-4" type="text" name="pseudo" required /></br>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label><br />
                <input class="mb-4" type="password" name="pass" required /></br>
                <label for="confirm">Mot de passe</label><br />
                <input class="mb-4" type="password" name="pass" required /></br>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
        </fieldset>
	</form>
		<a href="index.php?action=subscribe">Pas encore inscrit? C'est ici</a>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
