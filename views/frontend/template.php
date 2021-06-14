<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Jean Forteroche
    </title>
    <meta name="description" content="Blog de Jean Forteroche - Site fictif réalisé dans le cadre de projet d'etude.">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link  href="public/css/signin.css" rel="stylesheet" type="text/css"  /> -->
    <!-- <link  href="public/styles.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="public/styles.css">


    <!-- Script - TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/pctnv1k4pq80wm1aw780q8lon4a2jbge0nvbt30hnlu51w5f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#contenuTinyMCE' 
      });
    </script>
  </head>

  <!-- ======= body ========= -->
  <body>
    <header class="wallpaper">
      <nav class="navbar navbar-expand-lg  ">
        <a class="navbar-brand  text-secondary" href="/">Jean Forteroche</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link  text-secondary" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="#presentation">Présentation</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link text-secondary" href="#">Les derniers chapitres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-top text-secondary" href="#">Administration</a>
            </li>   
            <li class="nav-item"><a class="nav-link text-secondary" href="/admin/log_out"><span><i class="fas fa-sign-out-alt"></i></span></a></li>   
          </ul>
        </div>
      </nav>
      <!-- Fin nav -->

     
      <!-- Fin message de bienvenue -->
    </header>
    <!-- Fin Header -->
      <!-- Main -->
    <div class="main">
    <?= $content ?>
    </div>
    <!-- Main -->
   
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">     
      <div id="footer" class="py-5 bg-dark border-right-0 text-white border-right-0 text-center"> 
        <div class="row justify-content-arround">
          <div class="col-md-6">
            <a class="btn btn-primary" href="/admin/">Se connecter</a>
          </div>   
          <div class="col-md-6 footer-copyright text-center py-3">
            <p>Site web fictif projet 4 openclassroom</p>Copyright © 2021 <a href="#" ><em>by Malamine Dieng</em></a> 
          </div> 
        </div>
      </div>  
    </footer>
    <!-- Footer -->
        <!-- Scripts -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
     
      




      

