<?php
/*affiche les depliant*/
function afficherdepliant() {
    $bdd=bdd();

    
    
  //crois acs ou asc
    $connexion = $bdd->prepare("SELECT * FROM depliant ORDER BY iddep DESC ");
    $connexion->execute();

    
    $afficheper = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $afficheper;
}

//supp depliant
function supprimerdep(){

    $bdd=bdd();
    $iddep =$_POST["iddep"];
    

    
    
    $supprimer = $bdd->prepare("DELETE FROM depliant WHERE iddep = ?");
    $supprimer->execute([$iddep]);

}

/*pour ajouter depliant*/
function ajoutedepliant(){

    $bdd=bdd();
    
    $img01=$_FILES['photo']['name'];
    $img1="http://localhost/site/photoutiliser/".$img01;
 
    

    
    
    $ajouto = $bdd->prepare("INSERT INTO depliant(image1) VALUES(?)");
    $ajouto->execute(array( $img1));
    
   

}

?>