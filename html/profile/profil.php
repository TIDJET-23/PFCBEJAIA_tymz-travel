<?php
session_start();
if (!isset($_SESSION["membre"]))
    header("Location: ../connexion.php");

include_once "../../fenctionphp/membre.php";
include_once "../../fenctionphp/bddreservation.php";
require_once "../../fenctionphp/cnxbdd.php";
include_once "../../fenctionphp/bddvalidation.php";
$bdd = bdd();
//pour afficher les information de la persson
$info = information();
//pour afficher les reservation
$listreservation =affichereservation_cl();
/*afficher les validation voyage*/
$listval =affichevalidation();
/*afficher les reservation omra*/
$listreservationomra = affichereservationom_cl();
/*afficher les validation omra*/
$validationomra=affichevalidationom();

/*pour annuler les reservation*/
if (isset($_POST["btnanuuler"])) {
    $supp=anullerreservation();
    header("Location: profil.php");

    }
/*pour afficher les reservation valider*/
if (isset($_POST["btnanuulerom"])) {
    $supp=anullerreservationom();
    header("Location: profil.php");

    }

?>

<!DOCTYPE html>

<html>

<head>
    <title>profil</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/profilestycss.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../javaScript/script.js"></script>
</head>




<body class="fix-header card-no-border logo-center">


   <!--header-->
    <?php include "header.php" ?>

    <!--information de la perssone-->
    <div class="page-wrapper" style="margin-top: 100px;">
        <div class="profil">
            <div class="col-md-5 align-self-center">
                <h3 style="margin-left: 3%;margin-top: -50px; color:white;">Mon profile</h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5" >
                    <div class="card" id="pro">
                        <div class="card-body">
                            <center class="m-t-30">
                                <h6 class="card-subtitle" style="color: black; font-weight: 700; margin-bottom: 32px; font-size: 1.2rem;"><?= $info["Nom"] . "  " ?><?= $info["prenom"] ?></h6>
                                <div class="circle">
                                    <!-- Profile Image -->
                                    <img class="user-pic" src="<?= $info["photop"] ?>" class="img-circle" width="70%" style="margin-bottom: 20px; height: 250px;" />
                                </div>
                            </center>
                        </div>

                        <div class="card-body">
                            <small >email</small>
                            <h6><?= $info["email"] ?></h6>
                            <small >Numéro de téléphone</small>
                            <h6><?= $info["telephone"] ?></h6>
                            <small >date naissance</small>
                            <h6><?= $info["date_naissance"] ?></h6>
                            <!--pour modifie les information-->
                            <div class="like-comm"><a href="modifieprofil.php" id="btnmdf1" class="btn btn-info m-r-10">modifie votre profil</a></div>
                        </div>
                    </div>
                </div>

                <!---->

                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>



                <!--afficher lrs reservation-->
                
  
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <h4 style=" color:black;">reservation</h4>
                    <h5 style=" color:black;">voyage organiser :</h5>
                    <?php foreach($listreservation as $li): ?>

                    <div class="row" id="voypro" >
                        <div class="card alert alert-primary" id="voyprof" role="alert">
                            <div class="card-body">
                            <form action="" method="POST">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                            reservation
                            <?php $idvoy= $li->idvoy ;
                            $connexion = $bdd->prepare("SELECT * FROM listevoyage WHERE id = ? ");
                            $connexion->execute([$idvoy]);
                            $affichevoy = $connexion->fetch();
                            ?>
                            
                            
                            
                            <button style="margin-left: 80%;" class="btn btn-sm btn-outline-secondary"   type="submit" name="btnanuuler"  onclick="msgconfirme()"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: red;" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                            </svg></button>
                                        
                                               <div>Pays : <?= $affichevoy["pays"] ?><br>
                                                duree : <?= $affichevoy["nbrjoursetnuit"] ?>
                                                <h6>date depart <?= $affichevoy["datedpr"] ?></h6>
                                                <h5 style="color: red;">date de paiment <?= $li->datep?> nombre de place : (<?= $li->nbrplace?>)</h5>
                                                
                                                <input type="text" value="<?= $li->idvoy ?>" name="val" hidden>


                                                </form>
                                            
                                            </div>
                                        
                                    
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    
<!--omra reserver-->

<h5 style=" color:black;">omra :</h5>
<?php foreach($listreservationomra as $om): ?>
<div class="row" id="voypro">
<div class="card alert alert-primary" id="voyprof" role="alert">
                            <div class="card-body">
                            <form action="" method="POST">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                            reservation

        <?php $idvoy= $om->idomra ;
        $connexion = $bdd->prepare("SELECT * FROM omra WHERE id = ? ");
        $connexion->execute([$idvoy]);
        $afficheomra = $connexion->fetch();
        ?>
        
        <button style="margin-left: 80%;" class="btn btn-sm btn-outline-secondary"   type="submit" name="btnanuulerom"  onclick="msgconfirme()"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" style="color: red;" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg></button>
                
                    
                           <div><?= $afficheomra["omra"] ?><br>
                          hotel :  <?= $afficheomra["hotel"] ?>
                            <h6>date depart <?= $afficheomra["datedepart"] ?></h6>
                            <h5 style="color: red;">date de paiment <?= $om->datep?> nombre de place : (<?= $om->nbrplace?>)</h5>
                            
                            <input type="text" value="<?= $om->idomra ?>" name="valom" hidden>
                           </form>
                        
                        </div>
                    
                
            
        </div>
    </div>
</div>
<?php endforeach; ?>
                    
                    <!--afficher lrs validation-->
                 
                    <h4 style=" color:black;">reservation valider</h4>

                    <?php foreach($listval as $val): ?>
                        <div class="row" id="voypro">
                        <div class="card alert alert-success" id="voyprof" role="alert">
                            <div class="card-body">

                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                             reservation valider

                            <?php $idvoy= $val->idvoy ;
                            $connexion = $bdd->prepare("SELECT * FROM listevoyage WHERE id = ? ");
                            $connexion->execute([$idvoy]);
                            $affichereser = $connexion->fetch();
                            ?>
                            
                            
                                    
                                        
                                               <div>Pays : <?= $affichereser["pays"] ?><br>
                                               Duree : <?= $affichereser["nbrjoursetnuit"] ?><br>
                                                date de depart <?= $val->dated ?> <br>
                                                le nombre de place : <?= $val->nbrplace ?>
 
                                            </div>
                                        
                                    
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
<!--afficher tout les validation omra-->

                    <?php foreach($validationomra as $valom): ?>
                        <div class="row" id="voypro">
                        <div class="card alert alert-success" id="voyprof" role="alert">
                            <div class="card-body">

                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                             omra valider


                            <?php $idvoy= $valom->idomra ;
        $connexion = $bdd->prepare("SELECT * FROM omra WHERE id = ? ");
        $connexion->execute([$idvoy]);
        $afficheomrav = $connexion->fetch();
        ?>
                            
                                    
                                        
                                               <div><?= $afficheomrav["omra"] ?><br>
                                               hotel : <?= $valom->hotel ?><br>
                                               date de depart : <?= $valom->dated ?><br>
                                               nombre de place : <?= $valom->nbrplace ?><br>
                                                
                                                
                                            
                                            </div>
                                        
                                    
                                
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
  

                </div>
  

                </div>

                 


            </div>
        </div>
    </div>




</body>

</html>