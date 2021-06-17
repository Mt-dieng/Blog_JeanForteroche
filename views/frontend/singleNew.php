
<?php ob_start(); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<body >
	<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4 main-title text-center text-white d-inline-block position-relative">Billet simple pour l'Alaska</h1>
                <h2 class="text-center text-white text-break">Le choc</h2>
            </div>
        </div>
    </div>
	</header>
    	<!-- News -->
        <article id="view-article">
            <div class="container-fluid bg-white">
                <div class="row">
                    <div class="col-10 offset-1 mb-5 mt-5 article-content">
                        <div class="text-justify mb-5">
                            <!-- date de publication -->
                        </div>
                        <div class="text-justify article-text text-reader">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum necessitatibus itaque vel tempore eos voluptate illo consectetur autem eius laboriosam!</p>
                        </div>
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
