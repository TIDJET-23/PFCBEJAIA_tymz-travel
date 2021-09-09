<?php

/*les validation sur le profile d un client*/
function affichevalidation(){
        $bdd=bdd();
    
        $per =$_SESSION["membre"];
        
    
        $connexion = $bdd->prepare("SELECT * FROM validatio WHERE idper = ? ");
        $connexion->execute([$per]);
    
        
        $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $afficheper;
}

/*afficher tout les reservation pour admine*/
function affichetousvalidation(){
    $bdd=bdd();
    if (isset($_POST["numpassp"])) {
        $numpass=$_POST['numpas'];
        $connexion = $bdd->prepare("SELECT * FROM validatio WHERE numpass LIKE '%$numpass%'");
        $connexion->execute();
    
        
        $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $afficheper;
        
    }else{
    
    $connexion = $bdd->prepare("SELECT * FROM validatio ORDER BY dated DESC ");
    $connexion->execute();
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
    }
}
//supp validation par un admin
function supprimervalidation(){

    $bdd=bdd();
    $idvoyage =$_POST["idvoy"];
    $idpersonne =$_POST["idper"];

    
    
    $supprimer = $bdd->prepare("DELETE FROM validatio WHERE idper = ? AND idvoy = ?");
 
    $supprimer->execute([$idpersonne,$idvoyage]);

    
}


/*les validation sur le profile d un client*/
function affichevalidationom(){
    $bdd=bdd();

    $per =$_SESSION["membre"];
    

    $connexion = $bdd->prepare("SELECT * FROM validationomra WHERE idper = ? ");
    $connexion->execute([$per]);

    
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
}

//les validation omra pour admin
function affichetousvalidationom(){
    $bdd=bdd();
    if (isset($_POST["numpassp"])) {
        $numpass=$_POST['numpas'];
        $connexion = $bdd->prepare("SELECT * FROM validationomra WHERE numpass LIKE '%$numpass%'");
        $connexion->execute();
    
        
        $affichepers = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $affichepers;
        
    }else{
    
    $connexion = $bdd->prepare("SELECT * FROM validationomra ORDER BY dated DESC ");
    $connexion->execute();
    $affichepers = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $affichepers;
    }
}
//sup validation omra
function supprimervalidationom(){
    $bdd=bdd();
    $idomra =$_POST["idom"];
    $idpersonne =$_POST["idper"];
    $supprimer = $bdd->prepare("DELETE FROM validationomra WHERE idper = ? AND idomra = ?");
    $supprimer->execute([$idpersonne,$idomra]);

 

}
?>