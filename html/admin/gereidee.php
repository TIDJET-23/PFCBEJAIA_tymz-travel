<?php
session_start();
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();
/*afficher les meilleurs pauses*/
require_once "../../fenctionphp/bddidee.php";
$ideemp=afficheideemp();


    if (isset($_POST["suppidmp"])) {

    
        }

                                    if (isset($_POST["suppidmp"])) {
        
                                        $supp=supprimidee();
                                        header("Location: gereidee.php");
                                    
                                        }


?>

<!DOCTYPE html>
<html>

<head>
    <title>modifie profile</title>
    <link rel="stylesheet" type="text/css" href="../../css/modifiescss.css"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../../javaScript/script.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>

<?php include "header.php" ?>

<li class="nav-item">
      
     
      <form class="d-flex" action="" method="POST" style="margin-left: 700px;margin-top:50px;">
      <!-- moteur de roucherche -->
      <form class="d-flex" method="POST" style=" width: 200px;">
                  <input class="form-control me-2" type="search" placeholder="region" name="srche" aria-label="Search">
                  <button class="btn btn-outline-success" name="srch" id="btnxherche1" type="submit" style="background-color: green; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
      </form>
      </form>
      </li>
      
<div style="margin-top:50px;">
 


<b style="margin-bottom: 30px;" id="meilleurespause">Tout les idee</b><br>

<table class="table table-hover" style="margin-top: 15px;">

        <tr style="width:100% ;" >
        <td class="table-dark">type idee</td>
            <td class="table-dark">region</td> 
            <td class="table-dark">supprimer</td>
        </tr>
        <?php foreach($ideemp as $idmp): ?>
            <form method="POST">
        <tr>
        <td class="table-light"><?= $idmp->idee ;?></td>
        <td class="table-light"><?= $idmp->region ;?></td>


        <form action="" method="POST">
        <input type="text" value="<?= $idmp->id ;?>" name="idmp" hidden>
        <td class="table-light"><button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="suppidmp" style="background-color: red;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
        <form>
        </td>

        </tr>
        <?php endforeach; ?>

        
</table>
</div>




























</body>

</html>