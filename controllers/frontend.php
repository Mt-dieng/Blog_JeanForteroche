<?php
use \blog_jeanforteroche\models\UsersManager;
require_once('./models/Manager.php');

// création des users
// function addUser($u_pseudo, $u_password, $u_mail){
//     $usersManager = new UsersManager();
//     $userPseudoExist=$usersManager->pseudosExist($u_pseudo);
//     $userMailsExist=$usersManager->mailExist($u_mail);

//     // 1. pseudo Exist ds bdd
//     if ($userPseudoExist) {
//         header('Location: index.php?action=subscribe&error=pseudoExist');
//     }
//     // 2. mail Existe ds bdd OK
//     if ($userMailsExist) {
//         header('Location: index.php?action=subscribe&error=mailExist');
//     }

//     // 2. protéger le mdp
//     if (!$userPseudoExist && !$userMailsExist) {
//         // $userPass=password_hash($_POST['mdp']);
//         $newUser= $usersManager->creat_user($u_pseudo, $u_password, $u_mail);
//         header('Location: index.php?action=newaccount');
//     } else {
//         header('Location: index.php?action=404');
//     }  

function getHome(){
    require 'views/frontend/home.php' ;
}

function getError(){
    require 'views/frontend/404.php';
}
