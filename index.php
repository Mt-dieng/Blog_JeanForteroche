<?php
session_start();

try {
    if ($_GET['action']) {
        switch ($_GET['action']) {
            case 'admin':
                // show admin
                showAdmin();
                break;
            
            default:
                require('views/frontend/error404.php');
                break;
        }
    } else {
        // show home
        getHome();
    
    }
} catch (Exception $e){
    $error_message = $e->getMessage();
    require('views/frontend/error404.php');

}