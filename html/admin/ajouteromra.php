<?php
session_start();

/* connexion a la base de donnees */
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();


/*si les champ sint remplie et il a apuit sur le butten ajouter*/
if (isset($_POST["ajtomra"])) {
    if (!empty($_POST)) {
        include_once "../../fenctionphp/bddomra.php";
        $ajtom = ajouteomra();
    }else{
        $ajtom="<div class='messageerreur' style='color: black; text-align: center; background-color: red; border-radius: 7px; padding: 5px;'><b>omra nest pas ajouter</b></div>
        ";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
<title>ajouter omra</title>
    <link rel="stylesheet" type="text/css" href="../../css/ajoutvoyocs.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="../../JQ/jquery.css" rel="stylesheet"></link>
    <script src="../../JQ/jquery-3.6.0.js"></script>
    <script src="../../JQ/jquery-ui.js"></script>

    
<script>
    $(document).ready(function(){
        $("#date").datepicker({
            dayNames:["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],
            dayNamesMin:["dim","lun","mar","mer","jeu","ven","sam"],
            monthNames:["janvie","fevrie","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"],
            monthNamesShort:["janvie","fevrie","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"],

            dateFormat:"yy/mm/dd",
          changeMonth:true,
          changeYear:true,
          
          minDate:'1D'


        });
   
    });

    
    </script>
</head>

<body>
    
    <!--header-->
    <?php include "header.php" ?>


    <!--formulaire d ajouter un omra-->
    <div class="centreomra">
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


            <div style="display: flex; margin-bottom: 10px;">
                <div class="form-floating">
                    <input type="text" id="floating" class="form-control form-control-line" name="prix" style=" width: 135px;" required>
                    <label for="floating" id="floatingInputlabel">prix</label>
                </div>
                <div class="form-floating" style="margin-left: 30px;">
                    <input type="text" id="floating" class="form-control form-control-line" name="hotel" style=" width: 135px" required>
                    <label for="floating" id="floatingInputlabel">hotel</label>
                </div>
            </div>

            <label>date depart</label><br>
            <input type="text" name="dated" class="form-control" required id="date" placeholder="entre la date de depart"><br>



                <label for=""><b>choisir une photo</b></label><br>
               
                <input type="file"   name="image"  required /><br>
               
            

                <textarea name="desc"  rows="10" placeholder="description" style="width: 300px; margin-top: 15px;"></textarea>
               

            
            <button class="w-100 btn btn-lg btn-primary"  type="submit" name="ajtomra"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg> ajoute omra</button>



        </form>
    </div>
    
</body>

</html>
