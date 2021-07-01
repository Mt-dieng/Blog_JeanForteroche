<?php ob_start(); ?>

    <!-- News -->
    <article id="view-article">
        <div class="container-fluid bg-white">
            <div class="row">
            <div class="card-header"><?= $newChapter['created_at_fr']; ?></div>
            <?php 
	            if ($newChapter['created_at_fr'] < $newChapter['updated_at_fr']) {
                echo '<p id="updated_at_fr">modifié le ' . $newChapter['updated_at_fr'] . '</p>';
	            }
            ?>
            <div class="card-body">
            <!-- titre de la new -->
            <h5 class="card-title"><?= $newChapter['title']; ?></h5>
            <!-- contenu de la new -->
            <div class="card-text">
           <?= $newChapter['content']; ?>
            </div>
           
            </div>
        </div>
    </article>
    <section id="comment-form">
        <div class="container bg-dark">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mb-5 mt-5">
                    <h5 class="text-center mt-4 mb-5 text-white">Laisser un commentaire</h5>
                    <form id="form-comment" action="index.php?action=view&id=19" method="post">
                        <div class="form-group">
                            <label for="form-pseudo" class="text-white">Votre pseudo <span>(en moins de 255 caractères)</span></label>
                            <input type="text" class="form-control" name="form-pseudo" id="form-pseudo" placeholder="Pseudo" required>
                        </div>
                        <div class="form-group">
                            <label for="form-comment" class="text-white mt-2">Votre commentaire</label>
                            <textarea class="form-control" name="form-comment" id="form-comment" rows="3" placeholder="Commentaire" required></textarea>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary mt-4 px-4">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>
</body>
</html>
