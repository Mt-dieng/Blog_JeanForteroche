<?php 
$title = "Accueil"; ?>

<?php ob_start(); ?>
 <!-- Message de bienvenue -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-12 col-sm-6 col-md-8 py-5">
            <div class="welcom-main">
              <div class="welcom-msg border-right-0 text-center">
                <h1>Bienvenue sur mon blog !</h1>
                  <a href="#presentation" class="btn btn-welcom btn-lg my-4 scroll-smooth">En savoir plus</a>
              </div>
            </div>
          </div>
      </div>                 
  </div>
 <!-- Présentation -->
  <section>
    
    <div class="container">
      <!-- Titre de la présentation -->
      <div class= "text-center">
        <h2 class= "text-uppercase my-4" id="presentation">Ma présentation</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <img class="card-img-top" src="/public/img/couverture.png" alt="Couverture">
        </div>
        <!-- Présentation du romain -->
        <div class="col-md-6  text-justify">
          <p>Dans son premier roman, Jean Forteroche nous plonge dans l'univers adolescent aux côtés de Miles Halter, qui rentre au Pensionnat Culver Creek comme son père avant lui. À travers sa passion des dernières phrases d'hommes célèbres, Miles se révèle déjà en quête d'une vie riche et sensée. Ce sera avec surprise qu'il trouvera des réponses aux côtés de l'énigmatique Alaska.
            Tendre, drôle et dramatique, cette histoire singulière résonne pourtant dans le coeur des lecteurs, encore adolescents ou adultes. Il n'est jamais trop tard pour se questionner sur notre vie mortelle et pourtant si belle, si on accepte de la vivre vraiment. "J'adore l'intensité que les adolescents mettent, non seulement dans leur premier amour, mais aussi dans leurs premiers chagrins, la première fois qu'ils affrontent la question de la souffrance et du sens de la vie. Les adolescents ont le sentiment que la façon dont on va répondre à ces questions va importer. Les adultes aussi,Miles Halter, 16 ans, quitte sa vie plate et morne pour intégrer l'internat de Culver Creek, loin de chez lui, en Alabama, convaincu que tout, là-bas, pourra lui arriver... Un grand roman sur l'adolescence, dans la lignée de l'inoubliable Cercle des Poètes Disparus qui nous parle d'amitié avec un grand A, du premier amour, du véritable sens de la vie, de la culpabilité. Sublime !!! mais ils ne font plus l'expérience quotidienne de cette importance." dit Jean Forteroche. 
          </p>
          <p>Découvrez <em><a href="#chap">"Billet simple pour Alaska"</a></em></p>
        </div>
      </div>
    </div>
   
  </section>
<!-- Présentation -->
<!-- Les chapitres -->
  <section class="container my-4">
    <div class="row ">
      <h1 class="text-uppercase text-center my-4" id="chap">Les chapitres</h1>
      <div class="col-lg-12">      
        <div class="card mb-3">  
          <div class="card-body">
            <h5 class="card-title"></h5>
              <?php
              
              ?>
                <h2><a href="#"></a></h2>
                <p></p>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Les chapitres -->

    <!-- Pagniantion -->
  
    <!-- Pagination -->
  </section>

  <?php $content = ob_get_clean(); ?>

  <?php require('template.php'); ?>

