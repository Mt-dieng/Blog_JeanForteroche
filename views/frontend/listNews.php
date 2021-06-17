


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>

    <p class="text-center">
        <a href="index.php">Retour à la liste des billets</a>
    </p>
    <h2 class="text-center">Commentaires</h2>

    <div class="modal-dialog mb-2" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <!-- Date et auteur -->
                </h5>

            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
    </div>

    <p></p>
    <div id="commentForm" class="pb-5 pt-5 mx-auto">
        <p class="text-center">Vous voulez réagir ?</p>
        <form class="mx-auto" action="" method="post">
            <label for="comment">Commentaire :</label></br>
            <textarea id="comment" name="comment"></textarea>
            </br>
            <input type="submit" value="Envoyer" />
        </form>
    </div>
    </section>
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
</body>

</html>