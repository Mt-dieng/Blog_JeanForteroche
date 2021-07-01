<?php $title = "Connexion"; ?>

<?php ob_start(); ?>


<section id="signupForm" class="" >
    <legend class="text-center p-5">Connexion</legend>
    <form class=" p-2 mb-3" action="" method="POST">
        <fieldset>
            <div class="form-group">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="exampleInputEmail1" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="exampleInputPassword1" class="form-control" placeholder="Password" required>
            </div>
            <button class="btn btn-outline-secondary p-2" type="submit">S'identifier</button><br />
            <button type="button" href="" class="btn btn-outline-secondary">S'inscrire ?</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
        <fieldset>
    </form>   
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>