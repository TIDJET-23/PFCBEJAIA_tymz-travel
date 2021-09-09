<?php

/*si il est deja connecter ouvrir voyage.php*/
if (isset($_SESSION["membre"]))
    header("Location: ../../voyage.php");
/*connexion a la base de donnees*/
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();

/*apele a la fenction inscription*/
if (isset($_POST["inscription"])) {

    if ($_POST['passwor'] == $_POST['cpassw']) {
        include_once "../../fenctionphp/membre.php";
        $erreurs = inscription();
        
    } else {
        $erreurs ="<div class='messageerreur' style='color: black; text-align: center; background-color: red; border-radius: 7px; padding: 5px;'><svg class='bi flex-shrink-0 me-2' width='20' height='20' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg><b>verfie les mot de passe</b></div>
        ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>inscription</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="../../css/inscriptionscss.css"><!--css de la page inscription-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/stl.css"><!--css pour le script-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script type="text/javascript" src="../../javaScript/script.js"></script>
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
          
          maxDate:'-1D'


        });
   
    });

    
    </script>

</head>

<body>


    <div class="cover">
    <!--header-->
    <?php include "header.php" ?>


    
                <!--inclusion de button-->
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
<!---->


    <div class="centre">
        <form method="POST" action="" autocomplete="off">

        <div style="margin-top: -20px; margin-bottom: 10px;">
<?php
                if (isset($erreurs)) :
                ?>
                   <?= $erreurs ?>                <?php
                endif;
                ?>
       </div>



            <div style="display: flex; margin-bottom: 10px;">
                <div class="form-floating">
                    <input type="text" id="floating" class="form-control form-control-line" name="nom" style="width: 135px;" required>
                    <label for="floating" id="floatingInputlabel">Nom</label>
                </div>
                <div class="form-floating" style="margin-left: 30px;">
                    <input type="text" id="floating" class="form-control form-control-line" name="prenom" style=" width: 135px" required>
                    <label for="floating" id="floatingInputlabel">prenom</label>
                </div>
            </div>

            <label>date naissance</label><br>
            <input type="text" name="daten" class="form-control" required id="date" placeholder="entre la date naissance"><br>

            <div style="margin-bottom: -20px; margin-top: 10px;">
                <label style="margin-left: 2px;">sexe</label><br>
                <input type="radio" name="radio" class="radio1" id="H1" value="HOMME" required><label  for="H1"><b>HOMME</b></label>
                <input type="radio" name="radio" class="radio2" id="F1" value="FEMME"><label  for="F1" ><b> FEMME</b></label><br><br><br>
            </div>

            <div class="form-floating">
                <input type="tel" class="form-control" name="tel" id="tel" minlength="10" maxlength="10" placeholder="name@example.com" style="margin-bottom: 10px;" required>
                <label for="tele" id="floatingInputlabel">telephone</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" style="margin-bottom: 10px" required>
                <label for="floatingInput" id="floatingInputlabel">adresse Email</label>
            </div>





            
            <input type="password"  id="pwdp" name="passwor" placeholder="mot de passe" oninput="taillePasswords()" minlength="8" required><br><br>
            <i class="fa fa-eye" id="eye" aria-hidden="true" onclick="passe()" style="cursor: pointer;"></i>
            <input type="password"  id="pwdcp" name="cpassw" placeholder="confirme mot de passe" oninput="checkPasswords()"  required ><br><br><br>
           

            
            <button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="inscription" style="margin-top: -50px;"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: -70px; margin-right: 50px;" width="23" height="23" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>inscription</button>

            <div style="text-align: center;">
            <h5 class="connect">si vous avez un compt clic ici pour <a href="connexion.php" style="color: white;">connecter</a></h5>
            </div>


        </form>
    </div>
    </div>
</body>

</html>