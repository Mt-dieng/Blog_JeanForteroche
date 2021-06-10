<?php
namespace blog_jeanforteroche\models;


class NewsManager extends Manager{
    
    //fonction pour récupérer tous les chapitres
    public function getAllNews(){
        $bdd = $this->getBdd();
        $chapitres = $bdd->query("SELECT id, author, title, content, created_at, DATE_FORMAT(created_at, '%d/%m/%Y %H:%i:%s') AS date_fr  FROM news ORDER BY created_at ");
        
        return $chapitres;
    }
    
    //fontcion pour récupérer un chapitre 
    public function getNew($id){
        $bdd = $this->getBdd();
        $chapitres = $bdd->query("SELECT id, author, title, content, created_at, DATE_FORMAT(created_at, '%d/%m/%Y %H:%i:%s') AS date_fr  FROM news ORDER BY created_at ");
        $chapitres->execute(array($id));
        $chapitre = $chapitres->fetch();

        return $chapitre;
    }

        //Fonction pour mettre à jour un chapitre
    public function updateNew($title, $content, $id){
        $bdd = $this->getBdd();
        $chapitres = $bdd->prepare('UPDATE news SET title = ?, content = ?, update_date = NOW() WHERE id = ?');
        $chapitres->execute(array($title, $content, $id));
        $updated = $chapitres->fetch();
    
        return $updated;
    }
    
    //Fonction pour créer un chapitre
    public function createNew($title, $content){
        $bdd = $this->getBdd();
        $chapitres = $bdd->prepare('INSERT INTO news(title, content,creation_at, update_date) VALUES (?, ?, NOW(), NOW())');
        $chapitres->execute(array($title, $content));
        $newChapitre = $chapitres->fetch();

        return $newChapitre;
    }
    
    //Fonction pour sup un chapitre
    public function deleteNew($id){
        $bdd = $this->getBdd();
        $chapitres = $bdd->prepare('DELETE FROM news WHERE id = ?');
        $chapitres->execute(array($id));
        $deletedChapitre = $chapitres->fetch();
    
        return $deletedChapitre;
    }
}