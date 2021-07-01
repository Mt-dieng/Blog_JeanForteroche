<?php $title = "Inscription"; ?>

<?php ob_start(); ?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<section id="signupForm" class="">

    <legend class="text-center p-5">S'inscrire</legend>
	<form class="p-2 mb-4" action="index.php?action=addUser" method="POST">
    <?php 
        if (isset($_GET['error']) && $_GET['error'] == 'invalidUsername') {
            echo '<p id="error" class="alert alert-dismissible alert-danger text-center mx-auto">Pseudo déjà utilisé</p>';
        }

        if (isset($_GET['error']) && $_GET['error'] == 'invalidMail') {
            echo '<p id="error" class="alert alert-dismissible alert-danger text-center mx-auto">Adresse email déjà utilisée</p>';
        }

      

    ?>
        <fieldset>
            <div class="form-group">
                <label for="pseudo">Pseudo</label><br />
                <input class="form-control" type="text" name="pseudo" required />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label><br />
                <input class="form-control" type="password" name="pass" required />
                <label for="confirm">Confirmer le mot de passe</label><br />
                <input class="form-control" type="password" name="pass" required />
            </div>
            <button class="g-recaptcha btn btn-lg btn-info  btn-block" data-sitekey="6LcGdGcbAAAAABnrWUEn8TGsZQ7gGb2_6OwjQGDz" 
            data-callback='onSubmit' data-action='submit'>S'incrire</button>

        </fieldset>
	</form>
		<a href="index.php?action=subscribe">Pas encore inscrit? C'est ici</a>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
<script>
// recaptcha
function onSubmit(token) {
  document.getElementById("form").submit();
}

</script>