<?php
$title= 'Panel Administration';
?>
<?php ob_start(); ?>

<!-- Panel Administration -->
 <section class="container">
        <div class="jumbotron change my-4">
            <h1 class="text-center">
            <p class="text-center"> Panel d'administration <span><i class="fas fa-users-cog"></i></span></p>
            </h1>
        </div>
        <!-- Liste de news -->
        <div class="container">
            <div class="row ">
            <div class="col-12"> 
                <p><a href="#" class="btn btn-primary"><span><i class="fas fa-plus"> Ajouter une nouvelle news</i></span></a></p>
            </div>
            </div>
            <div class="row my-2"> 

            <article>
            <h1>
                <!-- titre -->
            </h1>
            <time>
                    <!-- date decreation -->
            </time>
            <p>
                    <!-- contenu  -->
            </p>
            </article>
            <hr>
            
             
            </div>
        </div>
        </section>
        <!-- Liste de news -->
 <!-- Panel Administration -->

<?php $content= ob_get_clean(); ?>
<?php require('template.php'); ?>
