<?php

/*fenction permet d afficher tout les voyage*/
function affichevoyage() {
    $bdd=bdd();

    if (isset($_POST["pays"])) {
        $paysv=$_POST['paysvoy'];
        $connexion= $bdd->prepare("SELECT * FROM listevoyage WHERE pays LIKE '%$paysv%'");
        $connexion->execute();
        $affi = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $affi;
        
    }else{
    
    $connexion = $bdd->prepare("SELECT * FROM listevoyage ORDER BY id DESC");
    $connexion->execute();
    $affi = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $affi;
}
}



/*set id de voyage pour cree session voyage*/
function set_idvoyage() {
    
    $bdd=bdd();
    
            $pid =$_POST['idvoyage'];
           
    
            $connexion = $bdd->prepare("SELECT * FROM listevoyage WHERE id = ?");
            $connexion->execute([$pid]);
            $seconcte = $connexion->fetch();

               if($seconcte == true){ 
               
            /*email existe*/
        
            
            $_SESSION["voyagecon"] = $seconcte["id"];
            
            
           
            
        }
         

}


/*affiche les information d un voyage on donne son id*/
function plussurvoyage() {

    
    $bdd=bdd();
    $vo =$_SESSION["voyagecon"];
    $connexion = $bdd->prepare("SELECT * FROM listevoyage WHERE id = ?");
    $connexion->execute([$vo]);
    $affichevoy = $connexion->fetch();
    return $affichevoy;
    
    
}


/*fenction permet de supprimer un voyage*/
function supprimervoy(){

    $bdd=bdd();
    $idvoyage =$_POST["idv"];
    

    
    
    $supprimer = $bdd->prepare("DELETE FROM listevoyage WHERE id = ?");
    $supprimer->execute([$idvoyage]);

}


/*fenction permet d ajouter un voyage */
function ajoutervoy(){

    $bdd=bdd();
    
    $pays = htmlspecialchars($_POST['pays']);
    $prix = htmlspecialchars($_POST['prix']);
    $datedpr = htmlspecialchars($_POST['dated']);
    $nbrjn = htmlspecialchars($_POST['nbrjours']);
    $etoil = htmlspecialchars($_POST['radio']);
    
    

    
    $img01=$_FILES['photo']['name'];
    $img1="http://localhost/site/photoutiliser/".$img01;
 
    $img02=$_FILES['img2']['name'];
    $img2="http://localhost/site/photoutiliser/".$img02;

    $img03=$_FILES['img3']['name'];
    $img3="http://localhost/site/photoutiliser/".$img03;

    $img04=$_FILES['img4']['name'];
    $img4="http://localhost/site/photoutiliser/".$img04;

    $descri = htmlspecialchars($_POST['desc']);
    $progra = htmlspecialchars($_POST['prog']);
    

    
    
    $ajoutv = $bdd->prepare("INSERT INTO listevoyage(image1, image2, image3, image4, pays, etoile, nbrjoursetnuit, prix, datedpr, descriptio, programme) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $ajoutv->execute(array($img1, $img2, $img3, $img4, $pays, $etoil, $nbrjn, $prix,$datedpr,$descri,$progra));
    

    
    $msg = "<div class='messageerreur' style='color: black; text-align: center; background-color: green; border-radius: 7px; padding: 5px;'><b>voyage ajouter avec succes</b></div>
        ";
        
        return $msg;
   

}


  /*fenction permet de modifie un voyage */
    function modifievoy(){
        $bdd=bdd();
       $pays = htmlspecialchars($_POST['pays']);
       $prix = htmlspecialchars($_POST['prix']);

       $dated = htmlspecialchars($_POST['dated']);
       $nbrjn = htmlspecialchars($_POST['nbrjours']);
       
       $programme = htmlspecialchars($_POST['prog']);
       $descr = htmlspecialchars($_POST['desc']);
   
           $modifie = $bdd->prepare("UPDATE listevoyage SET pays = :pays, nbrjoursetnuit = :nbrjn, prix = :prix, datedpr = :dated, descriptio = :descr, programme = :prog WHERE id = :idi");
           $modifie->execute([
           
            "pays" => $pays,
           
           "nbrjn" => $nbrjn,

           "prix" => $prix,
           "dated" => $dated,
           
           "descr" => $descr,
           "prog" => $programme,
           "idi" => $_POST["idvoyage"]
   ]);


   
   header("Location: gerevoyage.php");
    
        

}



?>