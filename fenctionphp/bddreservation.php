<?php

/*voyage*/
/*affiche les reservation sur le profile client*/
function affichereservation_cl() {
    $bdd=bdd();

    $per =$_SESSION["membre"];
    

    $connexion = $bdd->prepare("SELECT * FROM voyageresrver WHERE idper = ? ");
    $connexion->execute([$per]);

    
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
}


/*affiche les reservation des client pour un administreateur*/
function affichereservation() {
    $bdd=bdd();

    if (isset($_POST["numpassp"])) {
        $numpass=$_POST['numpas'];
        $connexion = $bdd->prepare("SELECT * FROM voyageresrver WHERE numpass LIKE '%$numpass%'");
        $connexion->execute();
    
        
        $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $afficheper;
        
    }else{
    

    $connexion = $bdd->prepare("SELECT * FROM voyageresrver ORDER BY datep DESC ");
    $connexion->execute();

    
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
    }
}

/*anuller une reservation par un client*/
function anullerreservation(){

    $bdd=bdd();
    $idvoyage =$_POST["val"];
    $idpersonne =$_SESSION["membre"];

    
    
    $anullerreservation = $bdd->prepare("DELETE FROM voyageresrver WHERE idper = ? AND idvoy = ?");
    $anullerreservation->execute([$idpersonne,$idvoyage]);
}

/*suppremer une reservation d un client par admin */
function supprimerreser(){

    $bdd=bdd();
    $idvoyage =$_POST["idvoy"];
    $idpersonne =$_POST["idper"];

    
    
    $supprimer = $bdd->prepare("DELETE FROM voyageresrver WHERE idper = ? AND idvoy = ?");
    $supprimer->execute([$idpersonne,$idvoyage]);
}

/*fenction permet au client de reserver un voyage*/
function ajoutreservation(){

    $bdd=bdd();

    $idper = htmlspecialchars($_POST['idper']);
    $idvoy = htmlspecialchars($_POST['idvoy']);
    $numpass = htmlspecialchars($_POST['pass']);
    $nom = htmlspecialchars($_POST['nom']);
    $pernom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $pays = htmlspecialchars($_POST['pays']);
    $dated = htmlspecialchars($_POST['dated']);
    $datep = htmlspecialchars($_POST['datep']);
    $nbrplace = htmlspecialchars($_POST['place']);

    $ajoutv = $bdd->prepare("INSERT INTO voyageresrver(idper, idvoy, numpass, nom, prenom, email, tel, pays, dated, datep, nbrplace) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajoutv->execute(array($idper, $idvoy, $numpass, $nom, $pernom, $email, $tel, $pays,$dated,$datep,$nbrplace));
    
    
    
}


function valider(){

    $bdd=bdd();
    $idper = htmlspecialchars($_POST['idper']);
    $idvoy = htmlspecialchars($_POST['idvoy']);
    $numpass = htmlspecialchars($_POST['pass']);
    $nom = htmlspecialchars($_POST['nom']);
    $pernom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $pays = htmlspecialchars($_POST['pays']);
    $dated = htmlspecialchars($_POST['dated']);
    $nbrplace = htmlspecialchars($_POST['nbrplace']);

    $ajoutv = $bdd->prepare("INSERT INTO validatio(idper, idvoy, numpass, nom, prenom, email, tel, pays, dated, nbrplace) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajoutv->execute(array($idper, $idvoy, $numpass, $nom, $pernom, $email, $tel, $pays,$dated,$nbrplace));

    
}



/*omra*/



/*fenction permet au client de reserver un voyage*/
function ajoutreservationomra(){

    $bdd=bdd();

    $idper = htmlspecialchars($_POST['idper']);//
    $idomra = htmlspecialchars($_POST['idomra']);//
    $numpass = htmlspecialchars($_POST['pass']);//
    $nom = htmlspecialchars($_POST['nom']);//
    $pernom = htmlspecialchars($_POST['prenom']);//
    $email = htmlspecialchars($_POST['email']);//
    $tel = htmlspecialchars($_POST['tel']);//
    $hotel = htmlspecialchars($_POST['hotel']);//
    $dated = htmlspecialchars($_POST['dated']);//
    $datep = htmlspecialchars($_POST['datepai']);//
    $nbrplace = htmlspecialchars($_POST['place']);//

    $ajoutv = $bdd->prepare("INSERT INTO omrareserver(idper, idomra, numpass, nom, prenom, email, tel, datep, dated, hotel, nbrplace) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajoutv->execute(array($idper, $idomra, $numpass, $nom, $pernom, $email, $tel,$datep,$dated,$hotel,$nbrplace));
    
    
    
}
/*afficher les reservation omra de client sur son profile */
function affichereservationom_cl() {
    $bdd=bdd();

    $per =$_SESSION["membre"];
    

    $connexion = $bdd->prepare("SELECT * FROM omrareserver WHERE idper = ? ");
    $connexion->execute([$per]);

    
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
}

/*affiche les reservation omra des client pour un administreateur*/
function affichereservationomra() {
    $bdd=bdd();

    if (isset($_POST["numpassp"])) {
        $numpass=$_POST['numpas'];
        $connexion = $bdd->prepare("SELECT * FROM omrareserver WHERE numpass LIKE '%$numpass%'");
        $connexion->execute();
    
        
        $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $afficheper;
        
    }else{
    

    $connexion = $bdd->prepare("SELECT * FROM omrareserver ORDER BY datep DESC ");
    $connexion->execute();

    
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
    }
}

/*anuler par client*/
function anullerreservationom(){

    $bdd=bdd();
    $idomra =$_POST["valom"];
    $idpersonne =$_SESSION["membre"];

    
    
    $anullerreservation = $bdd->prepare("DELETE FROM omrareserver WHERE idper = ? AND idomra = ?");
    $anullerreservation->execute([$idpersonne,$idomra]);
}
/*supp par admin*/
function supprimerreserom(){

    $bdd=bdd();
    $idomra =$_POST["idomra"];
    $idpersonne =$_POST["idper"];

    
    
    $supprimer = $bdd->prepare("DELETE FROM omrareserver WHERE idper = ? AND idomra = ?");
    $supprimer->execute([$idpersonne,$idomra]);
}


function valideromra(){

    $bdd=bdd();

    $idper = htmlspecialchars($_POST['idper']);
    $idomra = htmlspecialchars($_POST['idomra']);
    $numpass = htmlspecialchars($_POST['passom']);
    $nom = htmlspecialchars($_POST['nomom']);
    $pernom = htmlspecialchars($_POST['prenomom']);
    $email = htmlspecialchars($_POST['emailom']);
    $tel = htmlspecialchars($_POST['telom']);
    $hotel = htmlspecialchars($_POST['hotelom']);
    $dated = htmlspecialchars($_POST['datedom']);
    $nbrplace = htmlspecialchars($_POST['nbrplaceom']);

    $ajoutv = $bdd->prepare("INSERT INTO validationomra(idper, idomra, numpass, nom, prenom, email, tel, hotel, dated, nbrplace) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajoutv->execute(array($idper, $idomra, $numpass, $nom, $pernom, $email, $tel, $hotel,$dated,$nbrplace));
    
    
    
}

?>