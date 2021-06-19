<?php
session_start();

require './controllers/frontend.php';
require './models/CommentsManager.php';
require './models/NewsManager.php';
require './models/UsersManager.php';

try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'home' :
                showHome();
                break;

            // case 'admin':
            //     // show admin
            //     showAdmin();
            //     break;
            
            default:
                Header('Location : index.php?action=home');
        }
    } else {
        // show home
        showHome();
    
    }
} catch (Exception $e){
    $error_message = $e->getMessage();
    require('views/frontend/error404.php');
}