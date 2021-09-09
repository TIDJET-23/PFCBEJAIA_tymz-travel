<?php
session_start();
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();
include_once "../../fenctionphp/bddomra.php";

/*pour remplire les champe automatiquement*/
$om = plussuromra();

/*modifie omra*/
if (isset($_POST["modifieomra"])) {
    if (!empty($_POST)) {
        

        include_once "../../fenctionphp/omra.php";
        
        $modifie=modifieomra();
        
    }
}

?>

<!DOCTYPE html>
<html>

<head>
<title>modifie omra</title>
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
        <!--header-->
        <?php include "header.php" ?>
    



    <div class="centreomra">
        <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">




            <div style="display: flex; margin-bottom: 10px;">
                <div class="form-floating">
                    <input type="text" id="floating" value="<?= $om['prix'] ?> " class="form-control form-control-line" name="prix" style=" width: 135px;" required>
                    <label for="floating" id="floatingInputlabel">prix</label>
                </div>
                <div class="form-floating" style="margin-left: 30px;">
                    <input type="text" id="floating" value="<?= $om['hotel'] ?> " class="form-control form-control-line" name="hotel" style=" width: 135px" required>
                    <label for="floating" id="floatingInputlabel">hotel</label>
                </div>
            </div>

            <label>date depart</label><br>
            <input type="text" name="dated" value="<?= $om["datedepart"]?>"  class="form-control" required id="date"><br>


               
            

                <textarea name="desc"  rows="10" placeholder="description" style="width: 300px; margin-top: 15px; margin-bottom: 70px;"><?= $om['descriptio'] ?></textarea>
               

                <input type="text" value="<?= $om["id"]?>" name="idomra" hidden>
            <button class="w-100 btn btn-lg btn-primary"  type="submit" name="modifieomra"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg> modifie omra</button>



        </form>
    </div>
    
</body>

</html>