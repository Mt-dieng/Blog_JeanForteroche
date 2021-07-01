<?php
use \blog_jeanforteroche\models\UsersManager;
use \blog_jeanforteroche\models\NewsManager;
require_once('./models/Manager.php');


// création des users
function addUser($u_pseudo, $u_password, $u_mail){
    $usersManager = new UsersManager();
    $userPseudoExist=$usersManager->pseudosExist($u_pseudo);
    $userMailsExist=$usersManager->mailExist($u_mail);

    // 1. pseudo Exist ds bdd
    if ($userPseudoExist) {
        header('Location: index.php?action=subscribe&error=pseudoExist');
    }
    // 2. mail Existe ds bdd OK
    if ($userMailsExist) {
        header('Location: index.php?action=subscribe&error=mailExist');
    }

    // 2. protéger le mdp
    if (!$userPseudoExist && !$userMailsExist) {
        // $userPass=password_hash($_POST['mdp']);
        $newUser= $usersManager->creat_user($u_pseudo, $u_password, $u_mail);
        header('Location: index.php?action=newaccount');
    } else {
        header('Location: index.php?action=404');
    }  
}


// Accueil
function showHome(){
    $listNews = new NewsManager();
    $news = $listNews->getAllNews();

    // die(var_dump($news));

    require 'views/frontend/home.php';
}

//afficher un chapitre
function showNewChapter($id){
    $chapter = new NewsManager();
    $newChapter = $chapter->getNew($id);

    require 'views/frontend/singleNew.php';
}



// Page 404
function getError(){
    require 'views/frontend/404.php';
}

// Page connexion users
function logUsers() {
	require('view/frontend/signin.php');
}

// Connexion users
function loginUsers($u_pseudo, $u_password) {
	$usersManager = new UsersManager();

	$user = $usersManager->loginUsers($u_pseudo);

	$truePassword= password_verify($_POST['password'], $user['password']);

	if (!$user) {
        header('Location: index.php?action=login&account-status=unsuccess-login');
    }
    else {
    	if ($truePassword) {
    		$_SESSION['u_id'] = $user['u_id'];
			$_SESSION['u_pseudo'] = ucfirst(strtolower($u_pseudo));
			$_SESSION['u_admin'] = $user['u_admin'];
    		header('Location: index.php');
    	}
        else {
        	header('Location: index.php?action=login&account-status=unsuccess-login');
        }
    }
}

// Deconnexion users
function logoutUsers() {
	$_SESSION = array();
	session_destroy();

	header('Location: index.php?logout=success');
}



