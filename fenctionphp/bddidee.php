<?php

function ajouteidee(){

    $bdd=bdd();
    
    $idee = htmlspecialchars($_POST['ideev']);
    $region = htmlspecialchars($_POST['region']);
    
    

    
    $img01=$_FILES['img1']['name'];
    $img1="http://localhost/site/photoutiliser/".$img01;
 
    $img02=$_FILES['img2']['name'];
    $img2="http://localhost/site/photoutiliser/".$img02;

    $img03=$_FILES['img3']['name'];
    $img3="http://localhost/site/photoutiliser/".$img03;

    $img04=$_FILES['img4']['name'];
    $img4="http://localhost/site/photoutiliser/".$img04;

    $descri = htmlspecialchars($_POST['desc']);
    

    
    
    $ajoutv = $bdd->prepare("INSERT INTO idee( idee, region, image1, image2, image3, image4, descr) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $ajoutv->execute(array( $idee, $region, $img1, $img2, $img3, $img4,$descri));
    
    $msg = "<div class='messageerreur' style='color: black; text-align: center; background-color: green; border-radius: 7px; padding: 5px;'><b>idee ajouter avec succes</b></div>
        ";
        
        return $msg;
    
   

}

function afficheidee() {
    $bdd=bdd();

    if (isset($_POST["pays"])) {
        $paysv=$_POST['ideev'];
        $connexion= $bdd->prepare("SELECT * FROM idee WHERE idee LIKE '%$paysv%'");
        $connexion->execute();
        $affi = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $affi;
        
    }else{
    
    $connexion = $bdd->prepare("SELECT * FROM idee ORDER BY idee DESC");
    $connexion->execute();
    $affi = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $affi;
}
}

function set_ididee() {
    
    $bdd=bdd();
    
            $pid =$_POST['ididee'];
           
    
            $connexion = $bdd->prepare("SELECT * FROM idee WHERE id = ?");
            $connexion->execute([$pid]);
            $seconcte = $connexion->fetch();

               if($seconcte == true){ 
               
            /*email existe*/
        
            
            $_SESSION["ididee"]= $seconcte["id"];
            
            
           
            
        }
         

}

function plussuridee() {

    
    $bdd=bdd();
    $vo =$_SESSION["ididee"];
    $connexion = $bdd->prepare("SELECT * FROM idee WHERE id = ?");
    $connexion->execute([$vo]);
    $affiidee = $connexion->fetch();
    return $affiidee;
    
    
}



function afficheideemp(){
    $bdd=bdd();

    if (isset($_POST["srch"])) {
        $paysv=$_POST['srche'];
        $connexion= $bdd->prepare("SELECT * FROM idee WHERE region LIKE '%$paysv%'");
        $connexion->execute();
        $affi = $connexion->fetchAll(PDO::FETCH_OBJ);
        return $affi;
        
    }else{
    
    $connexion = $bdd->prepare("SELECT * FROM idee ORDER BY idee DESC");
    $connexion->execute();
    $affi = $connexion->fetchAll(PDO::FETCH_OBJ);
    return $affi;
}
}


function supprimidee(){

    $bdd=bdd();
    $ididee =$_POST["idmp"];
    

    
    
    $supprimer = $bdd->prepare("DELETE FROM idee WHERE id = ?");
    $supprimer->execute([$ididee]);

}


?>