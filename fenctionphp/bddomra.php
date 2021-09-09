<?php
/*fenction permet d afficher tout omra*/
function afficheomra() {
    $bdd=bdd();
    
    $affichomra = $bdd->prepare("SELECT * FROM omra ORDER BY id DESC");
    $affichomra->execute();
    $affie = $affichomra->fetchAll(PDO::FETCH_OBJ);
    
    return $affie; 
}

/*set id de omra pour cree session omra*/

function set_idomra() {
    
    $bdd=bdd();
    
            $pid =$_POST['idomra'];
           
    
            $connexion = $bdd->prepare("SELECT * FROM omra WHERE id = ?");
            $connexion->execute([$pid]);
            $seconcte = $connexion->fetch();

               if($seconcte == true){ 
            $_SESSION["omra"] = $seconcte["id"];
             
        }
         

}


/*permet d afficher un voyage avec un id donnee*/
function plussuromra() {

    
    $bdd=bdd();
    $vo =$_SESSION["omra"];
    $connexion = $bdd->prepare("SELECT * FROM omra WHERE id = ?");
    $connexion->execute([$vo]);
    $affichevoy = $connexion->fetch();
    return $affichevoy;
    
}

/*fenction permet d ajouter omra */

function ajouteomra(){

    $bdd=bdd();
    
    $pays = "omra";
    $prix =htmlspecialchars($_POST['prix']);
    $hotel = htmlspecialchars($_POST['hotel']);
    $datedpr = htmlspecialchars($_POST['dated']);

    
    $img01=$_FILES['image']['name'];
    $img1="http://localhost/site/photoutiliser/".$img01;
 
    

    $descri = htmlspecialchars($_POST['desc']);
    

    
    
    $ajouto = $bdd->prepare("INSERT INTO omra(omra, image1, prix, datedepart, hotel, descriptio) VALUES(?, ?, ?, ?, ?, ?)");
    $ajouto->execute(array($pays, $img1, $prix, $datedpr, $hotel, $descri));

    
    $msg = "<div class='messageerreur' style='color: black; text-align: center; background-color: green; border-radius: 7px; padding: 5px;'><b>omra ajouter avec succes</b></div>
        ";
        
        return $msg;
    
   

}





/*fenction permet de supprimer omra*/
function supprimeromra(){

    $bdd=bdd();
    $idvomra =$_POST["idom"];
    

    
    
    $supprimer = $bdd->prepare("DELETE FROM omra WHERE id = ?");
    $supprimer->execute([$idvomra]);

}


/*fenction permet de modifie omra*/
function modifieomra(){
     $bdd=bdd();
    $prix = htmlspecialchars($_POST['prix']);
    $hotel = htmlspecialchars($_POST['hotel']);
    $dated = htmlspecialchars($_POST['dated']);
    $descr = htmlspecialchars($_POST['desc']);

        $modifie = $bdd->prepare("UPDATE omra SET prix = :prix, datedepart = :dated, hotel = :hotel, descriptio = :descr WHERE id = :idi");
        $modifie->execute([
        
        "prix" => $prix,
        "dated" => $dated,
        "hotel" => $hotel,
        "descr" => $descr,
        "idi" => $_POST["idomra"]
]);

header("Location: gerevoyage.php");

}

?>