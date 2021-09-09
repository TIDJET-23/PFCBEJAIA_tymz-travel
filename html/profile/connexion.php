<?php
session_start();
/*si il est deja connecter alors il affiche voyage.php*/
if (isset($_SESSION["membre"]))
    header("Location: ../../voyage.php");
/*cnx a la base de donnees*/
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();
/*verfie et connecter si il apuit sur connexion*/
if (isset($_POST["btnconnexion"])) {
    if (!empty($_POST)) {
        include_once "../../fenctionphp/membre.php";
        $erreurs = connexion();
        
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>connexion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../../css/connexioncss.css"><!-- la page css utiliser-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../javaScript/script.js"></script><!-- scripte utiliser-->
       
</head>

<body>
     <!--header-->
    <?php include "header.php" ?>
    <!--forme de connexion-->
    <div class="centre">
                

        <!--image-->
        <img src="../../image/cnxphoto.png" height="150px" width="150px" class="image">
        <div class="cnx">
        <!--formulaire-->
            <form method="POST" action="" autocomplete="off">
              
           

                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput" id="floatingInputlabel">Adresse E-mail</label>
                </div>
                <i class="fa fa-envelope" aria-hidden="true" id="iconeemail"></i>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                    <label for="floatingPassword" id="floatingPasswordlabel">Mot de passe</label>
                </div>
                <i class="fa fa-key" aria-hidden="true" id="iconepasse"></i>
                <i class="fa fa-eye" id="eye1" aria-hidden="true" onclick="passecnx()"></i>
                <button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="btnconnexion">connexion</button>
                <!--erreur cnx-->

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

                <div style="margin-top: 5px; margin-bottom: 10px; width: 100%;">
                <?php
                if (isset($erreurs)) :
                ?>
                 
     <?= $erreurs ?>
                <?php
                endif;
                ?>
                </div>
                <!--lien vers inscription-->
                <h3 class="inscrir">clic ici pour <a href="inscription.php" style="color: white;">inscrire</a></h3>
            </form>
        </div>


    </div>


    
</body>

</html>