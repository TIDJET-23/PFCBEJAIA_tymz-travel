<?php
session_start();


include_once "../../fenctionphp/membre.php";
include_once "../../fenctionphp/bddvalidation.php";
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();
/*afficher les reservation*/
$validation =affichetousvalidation();
$validationom =affichetousvalidationom();




if (isset($_POST["supp"])) {
    $supp= supprimervalidation();
    header("Location: listevalidation.php");

    }

    
    if (isset($_POST["suppom"])) {
        $suppom= supprimervalidationom();
        header("Location: listevalidation.php");
    
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



<ul class="nav nav-tabs profile-tab" role="tablist" style="margin-bottom: 15px; margin-top: 100px;">
      <li class="nav-item" > <a class="nav-link active" data-toggle="tab" href="#voyage" role="tab" style="background-color: white;">voyage valider</a> </li>
      <li class="nav-item" > <a class="nav-link" data-toggle="tab" href="#omra" id="profileLink" role="tab" style="background-color: white;">omra valider</a> </li>
      <li class="nav-item">
      
     
<form class="d-flex" action="" method="POST" style="margin-left: 700px;">
<!-- moteur de roucherche des reservation -->
<form class="d-flex" method="POST" style=" width: 300px;">

            <input class="form-control me-2" type="search" placeholder="numero passport" name="numpas" aria-label="Search">
            <button class="btn btn-outline-success" name="numpassp" id="btnxherche1" type="submit" style="background-color: green; color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
</form>
</form>
     </li>
</ul>
<div style="margin-top: 100px;"> 
<!--table reservation voyage-->


<b style="margin-bottom: 30px;" id="voyage">liste des voyage valider</b><br>



<table class="table table-hover" style="margin-top: 15px;">

<tr style="width:100% ;" >
       <td class="table-dark">num passport</td> 
       <td class="table-dark">nom</td>
       <td class="table-dark">prenom</td>
       <td class="table-dark">email</td>
       <td class="table-dark">tel</td>
       <td class="table-dark">pays</td>
       <td class="table-dark">date de depart</td>
       <td class="table-dark">nombre de place</td>
       <td class="table-dark">supprimer</td>
 </tr>
 <?php foreach($validation as $rese): ?>
    <form method="POST">
<tr>



<td class="table-light"><?= $rese->numpass ;?></td>


<td class="table-light"><?= $rese->nom ;?></td>


<td class="table-light"><?= $rese->prenom ;?></td>


<td class="table-light"><?= $rese->email ;?></td>


<td class="table-light"><?= $rese->tel ;?></td>


<td class="table-light"><?= $rese->pays ;?></td>

<td class="table-light"><?= $rese->dated ;?></td>


<td class="table-light"><?= $rese->nbrplace ;?></td>

</td>




<input type="text" value="<?= $rese->idper ;?>" name="idper" hidden>
<input type="text" value="<?= $rese->idvoy ;?>" name="idvoy" hidden>
<td class="table-light"><button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="supp" style="background-color: red;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
<form>
</td>

</tr>
<?php endforeach; ?>

<!--table reservation omra-->
</table>
</div>
<div style="margin-top: 100px;"> 
<!--table reservation voyage-->


<b style="margin-bottom: 30px;" id="omra">liste omra valider</b><br>



<table class="table table-hover" style="margin-top: 15px;">

<tr style="width:100% ;" >
       <td class="table-dark">num passport</td> 
       <td class="table-dark">nom</td>
       <td class="table-dark">prenom</td>
       <td class="table-dark">email</td>
       <td class="table-dark">tel</td>
       <td class="table-dark">hotel</td>
       <td class="table-dark">date de depart</td>
       <td class="table-dark">nombre de place</td>
       <td class="table-dark">supprimer</td>
 </tr>
 <?php foreach($validationom as $reseom): ?>
    <form method="POST">
<tr>



<td class="table-light"><?= $reseom->numpass ;?></td>


<td class="table-light"><?= $reseom->nom ;?></td>


<td class="table-light"><?= $reseom->prenom ;?></td>


<td class="table-light"><?= $reseom->email ;?></td>


<td class="table-light"><?= $reseom->tel ;?></td>


<td class="table-light"><?= $reseom->hotel ;?></td>

<td class="table-light"><?= $reseom->dated ;?></td>


<td class="table-light"><?= $reseom->nbrplace ;?></td>

</td>




<input type="text" value="<?= $reseom->idper ;?>" name="idper" hidden>
<input type="text" value="<?= $reseom->idomra ;?>" name="idom" hidden>
<td class="table-light"><button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="suppom" style="background-color: red;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></button>
<form>
</td>

</tr>
<?php endforeach; ?>

<!--table reservation omra-->
</table>
</div>
  
   
</body>

</html>