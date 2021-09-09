<?php
session_start();
/*connexion a la base de donnees*/
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();


include_once "../../fenctionphp/membre.php";

/*pour afficher tout les voyage*/
include_once "../../fenctionphp/bddvoyage.php";
$voy =affichevoyage();
/*pour afficher tous les omra*/
include_once "../../fenctionphp/bddomra.php";
      $omra =afficheomra();


/*si click sur le button sup ila va supprimer un voyage*/
if (isset($_POST["btnsupp"])) {
    $supp=supprimervoy();
    header("Location: gerevoyage.php");

    }
/*si click sur le button sup ila va supprimer omra*/
    if (isset($_POST["btnsuppom"])) {
        $supp=supprimeromra();
        header("Location: gerevoyage.php");
    
        }

        /*modifie voyage*/
        if (isset($_POST["btnmodvoy"])) {
            $voy1 = set_idvoyage();
            header("Location: modifievoyage.php");
        
            }
          /*modifie omra*/ 
            if (isset($_POST["btnmodomra"])) {
                $omra = set_idomra();

                header("Location: modifieomra.php");
            
                }
    
?>

<!DOCTYPE html>

<html>

<head>
    <title>gere les voyage</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/gvoycss.css">
</head>




<body class="fix-header card-no-border logo-center">



    <?php include "header.php" ?>


  <ul class="nav nav-tabs profile-tab" role="tablist" style="margin-bottom: 15px; margin-left: 100px; margin-top: 100px; margin-left: 100px">
      <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#voyage" role="tab" style="background-color: white;">voyage organise</a> </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#omra" id="profileLink" role="tab" style="background-color: white;">omra</a> </li>
      <li class="nav-item">
      
      
     
      <form class="d-flex" action="" method="POST" style="margin-left: 700px;">
<!-- moteur de roucherche des voyage -->
<input class="form-control me-2" type="search" placeholder="pays" name="paysvoy" aria-label="Search" autocomplete="non">
<button class="btn btn-outline-success" name="pays" id="btnxherche1" type="submit" style="background-color: green; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
</form>
      </li>
  </ul>

    <div class="page-wrapper" >
                

<!--liste des voyage-->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <h4 style=" color:black; margin-left: 40%;" id="voyage">list des voyages</h4>

                    
                    <?php foreach($voy as $voyage): ?>
                    <div class="row" id="voypro">
                        <div class="card" id="voyprof">
                            <div class="card-body" >
                          
                           <?= $voyage->pays?><br>
                           <h6><?= $voyage->datedpr?></h6>
                            
                            <div>
                           <form action="" method="POST">
                           <?php $idvoy= $voyage->id ;?>
                           <input type="text" value="<?= $idvoy ?>" name="idvoyage" hidden>
              
                           <input type="text" name="idv" value="<?= $voyage->id?>" hidden>
                           <button type="submit" name="btnsupp" style="float: right; margin-left: 10px;" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
                           <button type="submit" name="btnmodvoy" class="btn btn-primary" style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></button>
                           

                           </form>
                           </div>

                           </div>

                            
                        </div>
                    </div>

                    <?php 
        endforeach;
        ?>
                   
                    
                    


                </div>
  
                <br><br><br><br><hr>
<!--liste des omra-->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <h4 style=" color:black; margin-left: 40%;" id="omra">omra</h4>

                    
                    <?php foreach($omra as $omr): ?>
                    <div class="row" id="voypro">
                        <div class="card" id="voyprof">
                            <div class="card-body" >
                          
                           omra<br>
                           <h6><?= $omr->datedepart?></h6>
                            
                            <div>
                           <form action="" method="POST">

                           <?php $idom= $omr->id ;?>
                           <input type="text" value="<?= $idom ?>" name="idomra" hidden>

                           <input type="text" name="idom" value="<?= $omr->id?>" hidden>
                           <button type="submit" name="btnsuppom" style="float: right; margin-left: 10px;" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
                           <button type="submit" name="btnmodomra" class="btn btn-primary" style="float: right; "><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></button>
                           

                           </form>
                           </div>

                           </div>

                            
                        </div>
                    </div>

                    <?php 
        endforeach;
        ?>
                   
                    
                    


                </div>

            </div>
        </div>
    </div>




</body>

</html>