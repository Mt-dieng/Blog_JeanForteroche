<?php $title = "Connexion"; ?>

<?php ob_start(); ?>


<section id="signupForm" class="bg-info" >
    
    <legend class="text-center p-5">Connexion</legend>
    <form class="text-center p-2 mb-3">
        <fieldset>
            <div class="form-group">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">S'identifier</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
        <fieldset>
    </form>   
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>