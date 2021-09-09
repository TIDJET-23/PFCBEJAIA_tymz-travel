<?php
session_start();

require_once "../fenctionphp/cnxbdd.php";
$bdd=bdd();
include_once "../fenctionphp/bddomra.php";

include_once "../fenctionphp/membre.php";
include_once "../fenctionphp/bddreservation.php";


$infomra =  plussuromra();
$infoperssone = information();

if (isset($_POST["reserver"])) {
    if (!empty($_POST)) {
        
        $ajouter=ajoutreservationomra();
        header("Location: profile/profil.php");
        
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>reservation</title>
    <link rel="stylesheet" type="text/css" href="../css/connexioncss.css"><!--meme css que connexion.php-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../javaScript/script.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="../JQ/jquery.css" rel="stylesheet"></link>
    <script src="../JQ/jquery-3.6.0.js"></script>
    <script src="../JQ/jquery-ui.js"></script>

    
<script>
    $(document).ready(function(){
        $(function(){

        });
        var dat = $("#dd").val().replace(/-/g , '/');
        
        $("#floatingInput").datepicker({
            
            dayNames:["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],
            dayNamesMin:["dim","lun","mar","mer","jeu","ven","sam"],
            monthNames:["janvie","fevrie","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"],
            monthNamesShort:["janvie","fevrie","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"],

            dateFormat:"yy/mm/dd",
          changeMonth:true,
          changeYear:true,
          
          minDate:'1D',
          maxDate:dat ,

        });
     
    });

    
    </script>
</head>

<body>


    <?php include "header.php" ?>

    <div class="centre">

     

        <div class="cnx">


            <form method="POST" action="" autocomplete="off">

            

            <input type="text" value="<?= $infoperssone['id'] ?>" name="idper" hidden>
            <input type="text" value="<?= $infomra["id"] ?>" name="idomra" hidden>
            <input type="text" value="<?= $infoperssone['Nom'] ?>" name="nom" hidden>
            <input type="text" value="<?= $infoperssone['prenom'] ?>" name="prenom" hidden>
            <input type="text" value="<?= $infoperssone['email'] ?>" name="email" hidden>
            <input type="text" value="<?= $infoperssone['telephone'] ?>" name="tel" hidden>
            <input type="text" value="<?= $infomra["hotel"] ?>" name="hotel" hidden>
            <input type="date" value="<?= $infomra["datedepart"] ?>" name="dated" id="dd" hidden>


                <div class="form-floating" style="margin-bottom: 7px; margin-top: 50px;" >
                    <input type="number" class="form-control" name="pass" id="floatingInput1" placeholder="">
                    <label for="floatingInput1" id="floatingInputlabel">numero passport</label>
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control" name="place" id="floatingInput1" placeholder="">
                    <label for="floatingInput1" id="floatingInputlabel">nombre de place</label>
                </div>

                <label id="floatingInputlabel"><b>date de paiment</b></label>
                <div class="form-floating" style="margin-bottom: 23px;">
                    <input type="text" class="form-control" name="datepai" id="floatingInput" placeholder="">
                </div>
               

               
                
                <button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="reserver" onclick="msgsucc()">reserver</button>

               
            </form>
        </div>


    </div>


</body>

</html>