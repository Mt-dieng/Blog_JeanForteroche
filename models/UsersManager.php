<?php
namespace blog_jeanforteroche\models;

use \blog_jeanforteroche\models\Manager;

class UsersManager extends Manager{

    public function loginUsers($u_pseudo)
    {
        $bdd = $this->getBdd();
        $req = $bdd->prepare('SELECT u_id, u_pass, u_admin FROM users WHERE u_pseudo = ?');
        $req->execute(array($u_pseudo));
        $user = $req->fetch();

        return $user;
    }

    public function getUsers(){
        $bdd= $this->getBdd();
        $user= $bdd->query('SELECT u_id, u_pseudo, u_admin FROM users ORDER BY id');
        return $user;
    }

    // Création d'utilisateur à la bd
    public function creat_user($u_pseudo, $u_password, $u_mail){
        $bdd= $this->getBdd();
        $newUser=$bdd->prepare('INSERT INTO users(u_id, u_password, u_mail, u_admin) VALUES (?,?,?,0)');
        $newUser->execute(array($u_pseudo, $u_password, $u_mail));
        return $newUser;
    }

    //suppression de membre
    public function delete_user($u_pseudo){
        $bdd = $this->getBdd();
        $req = $bdd->prepare('DELETE FROM users WHERE id = ?');
        $deletedUser = $req->execute(array($u_pseudo));

        return $deletedUser;
    }

    // Vérification mail 
    public function mailExist($u_mail){
        $bdd= $this->getBdd();
        $req=$bdd->prepare('SELECT u_mail FROM users WHERE u_mail=?');
        $req->execute(array($u_mail));
        //on recupére tout nos mails
        $userMailsExist= $req->fetch();

        return $userMailsExist;
        
    }

    // Vérification pseudo dans bd
    public function pseudosExist($u_pseudo){
        $bdd= $this->getBdd();
        $req=$bdd->prepare('SELECT u_pseudo FROM users WHERE u_pseudo=?');
        $req->execute(array($u_pseudo));
        // on recupére tout nos pseudos
        $userPseudoExist= $req->fetch();

        return $userPseudoExist;
    }

}