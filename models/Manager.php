<?php
namespace blog_jeanforteroche\models;
class Manager
{
    //Accé à notre base de donnée
    protected function getBdd()
    {
        $bdd = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        return $bdd;
    }
}