<?php

/*fenction permet de connecter a la base de donnees*/
function bdd() {
    try {
        $bdd = new PDO("mysql:dbname=site;host=localhost", "root", "");
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
    return $bdd;
}