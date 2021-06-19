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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
    <!-- <link  href="./public/css/styleError.css" rel="stylesheet" /> -->
    <link  href="public/css/styles.css" rel="stylesheet" />


    <!-- Script - TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/pctnv1k4pq80wm1aw780q8lon4a2jbge0nvbt30hnlu51w5f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#contenuTinyMCE',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
      });
    </script>
  </head>

  <!-- ======= body ========= -->
  <body>
    <!-- Header -->
    <header class="wallpaper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Jean Forteroche</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link" href="#">Les derniers chapitres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Connexion</a>
            </li>   
            <li class="nav-item"><a class="nav-link" href=""><span><i class="fas fa-sign-out-alt"></i></span></a></li>   
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
    <footer class="page-footer font-small darken-3 footer1">     
      <div id="footer" class="py-5 border-right-0 text-white border-right-0 text-center"> 
        <div class="row justify-content-arround">
          <div class="col-md-6">
            <a class="btn btn-outline-light" href="#">Se connecter</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
     
      




      

