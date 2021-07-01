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
            
            case 'single_new' :
                showNewChapter($_GET['id']);
                break;
            
            case 'presentation' :
                showPresentation();
                break;
                
            case 'allChapters' :
                showChapters();
                break;

            case 'showSubscribe' :
                showSubscribe();
                break;

            case 'subscribe' :
                subscribe();
                break;

            case 'showLogin' :
                showLogin();
                break;

            case 'login' :
                login();
                break;
            
            
            case 'showAdmin':
                showAdmin();
                break;

            case 'logout' :
                disconnect();
                break;
            
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



