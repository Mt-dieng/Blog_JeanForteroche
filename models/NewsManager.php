<?php
namespace blog_jeanforteroche\models;


class NewsManager extends Manager{
    
    //fonction pour récupérer tous les news
    public function getAllNews(){
        $bdd = $this->getBdd();
        $req = $bdd->query("SELECT id, author, title, content, DATE_FORMAT(created_at, '%d/%m/%Y %H:%i:%s') AS created_at_fr, DATE_FORMAT(updated_at, '%d/%m/%Y %H:%i:%s') AS updated_at_fr  FROM news ORDER BY created_at ");
        
        // var_dump($req);
        // die();
        return $req;
        
    }
    
    //fontcion pour récupérer un new 
    public function getNew($id){
        $bdd = $this->getBdd();
        $req = $bdd->query("SELECT id, author, title, content, DATE_FORMAT(created_at, '%d/%m/%Y %H:%i:%s') AS created_at_fr, DATE_FORMAT(updated_at, '%d/%m/%Y %H:%i:%s') AS updated_at_fr FROM news ORDER BY created_at ");
        $req->execute(array($id));
        $new = $req->fetch();

        return $new;
    }

        //Fonction pour mettre à jour un new
    public function updateNew($title, $content, $id){
        $bdd = $this->getBdd();
        $new = $bdd->prepare('UPDATE news SET title = ?, content = ?, updated_at = NOW() WHERE id = ?');
        $new->execute(array($title, $content, $id));
        $updated = $new->fetch();
    
        return $updated;
    }
    
    //Fonction pour créer un new
    public function createNew($title, $content){
        $bdd = $this->getBdd();
        $new = $bdd->prepare('INSERT INTO news(title, content,created_at, updated_at) VALUES (?, ?, NOW(), NOW())');
        $new->execute(array($title, $content));
        $newChapitre = $new->fetch();

        return $newChapitre;
    }
    
    //Fonction pour sup un new
    public function deleteNew($id){
        $bdd = $this->getBdd();
        $new = $bdd->prepare('DELETE FROM news WHERE id = ?');
        $new->execute(array($id));
        $deletedChapitre = $new->fetch();
    
        return $deletedChapitre;
    }
}