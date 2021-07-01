


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>

    <p class="text-center">
        <a href="index.php">Retour à la liste des billets</a>
    </p>
    

    <div id="commentForm" class="pb-5 pt-5  text-center">
        <form class="mx-auto" action="" method="post">
            <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Commentaires</label>
                <textarea class="form-control"  placeholder="Votre commentaire ..." id="exampleTextarea" rows="3"></textarea>
            </div>
            </br>
            <input type="submit" class="btn btn-success" value="Commenter" />
        </form>
    </div>
    
    </section>
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
</body>

</html>