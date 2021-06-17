


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
</head>

<body>

    <p class="text-center">
        <a href="index.php">Retour à la liste des billets</a>
    </p>
    <h2 class="text-center">Les derniers chapitres</h2>

    <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                    <div class="card-body">
                                    <div class="small text-muted">January 1, 2021</div>
                                    <h2 class="card-title h4 text-primary">Post Title</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                    <a class="btn btn-info" href="#!">Read more →</a>
                                </div>
                    </div>
                </div>
            </div>

    <div id="commentForm" class="pb-5 pt-5  text-center">
        <form class="mx-auto" action="" method="post">
            <div class="form-group">
                <label for="exampleTextarea" class="form-label mt-4">Commentaires</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            </br>
            <button type="submit" value="Envoyer" class="btn btn-success">Envoyer</button>    
        </form>
    </div>
    <div>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
    </section>
    <?php $content = ob_get_clean(); ?>

    <?php require('template.php'); ?>
</body>

</html>