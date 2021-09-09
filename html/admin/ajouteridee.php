<?php
session_start();

/* connexion a la base de donnees */
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();


/*si les champ sint remplie et il a apuit sur le butten ajouter*/
if (isset($_POST["ajtidee"])) {
    if (!empty($_POST)) {
        if ($_POST['ideev'] == "choisir le type") {
            $ajtom="<div class='messageerreur' style='color: black; text-align: center; background-color: red; border-radius: 7px; padding: 5px;'><b>tu dois choisir un type</b></div>
        ";
        }else{
 
        include_once "../../fenctionphp/bddidee.php";
        $ajtom = ajouteidee();

        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
<title>ajouter idee</title>
    <link rel="stylesheet" type="text/css" href="../../css/ajoutvoyocs.css"> <!--meme css que ajoute voyage-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>
    
    <!--header-->
    <?php include "header.php" ?>


    <!--formulaire d ajouter un omra-->
    <div class="centreomra" style="height: 680px; margin-bottom: 10px; ">
        <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
        <div style="margin-top: -20px; margin-bottom: 10px;">
        <?php
                if (isset($ajtom)) :
                ?>
                   <?= $ajtom ?>
                <?php
                endif;
                ?>
       </div>




        
                
                
  <select class="form-select" name="ideev" style=" width: 100%;height: 60px;" aria-label="Default select example" id="floating">
  
  <option value="choisir le type">choisir le type</option>
  <option value="meilleures pause">meilleures pause</option>
  <option value="destination sans visa">destination sans visa</option>
  <option value="vacance en Europe">vacance en Europe</option>
  <option value="vacance en Afrique">vacance en Afrique</option>
  <option value="vacance dans monde">vacance dans monde</option>
  <option value="plus belles iles du monde">plus belles iles du monde</option>
  <option value="voyage entre amis">voyage entre amis</option>
  <option value="sejours remantiques">sejours remantiques</option>
  </select>
                <br>
                <div class="form-floating">
                    <input type="text" id="floating" class="form-control form-control-line" name="region" style=" width: 100%" required>
                    <label for="floating" id="floatingInputlabel">région</label>
                </div>
            



               <label for=""><b>choisir des photo</b></label><br>
               
               <input type="file"   name="img1"  required /><br>
               <input type="file"   name="img2"  ><br>
               <input type="file"   name="img3" ><br>
               <input type="file"   name="img4" ><br>
               
            

                <textarea name="desc"  rows="10" placeholder="description" style="width: 300px; margin-top: 15px;"></textarea>
               

               
            <button class="w-100 btn btn-lg btn-primary"  type="submit" name="ajtidee"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg> ajouter idee</button>



        </form>
    </div>
    
</body>

</html>