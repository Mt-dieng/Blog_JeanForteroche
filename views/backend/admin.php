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
                <p><a href="#" class="btn btn-info"><span><i class="fas fa-plus"> Ajouter une nouvelle news</i></span></a></p>
            </div>
        </div>
        <p style="text-align: center">Il y a actuellement .... news. En voici la liste :</p>
    <!-- Listes des news -->
        <table class="table text-center table-hover">
            <thead>
            <tr  class="table-success">
                <th>Auteur</th>
                <th>Titre</th>
                <th>Date d'ajout</th>
                <th>Dernière modification</th>
                <th colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>a</td>
                <td>a</td>
            </tr>
            </tbody>
        
        </table>
    <!-- Liste de news -->
    </div>
</section>
        
 <!-- Panel Administration -->

<?php $content= ob_get_clean(); ?>
<?php require('template.php'); ?>
