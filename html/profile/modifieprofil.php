<?php
session_start();
if (!isset($_SESSION["membre"]))
    header("Location: connexion.php");
include_once "../../fenctionphp/membre.php";
require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();
$info = information();

if (isset($_POST["btnmdf"])) {
    /*permet de modifie le profile*/
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $mdps = $_POST['passw'];
    $mdpsc = $_POST['passc'];
    /*si ila modifie les mot de passe alors on utilise ca */
    if (!empty($mdps)) {
        /*si les mot de passe identique  */
        if ($mdps == $mdpsc) {
            if (!empty($tel) and !empty($email)) {
				$mdp =password_hash($_POST['passw'],PASSWORD_DEFAULT);
                $modifie = $bdd->prepare("UPDATE membre SET telephone = :tel, email = :email, passwor = :pswd WHERE id = :idi");
                $modifie->execute([
                    "tel" => $tel,
                    "email" => $email,
                    "pswd" => $mdp,
                    "idi" => $_SESSION["membre"]
                ]);

                header("Location: profil.php");
            } else {
                $erreurs = "remplire email et telephone";
            }

            /*siinon erreur*/
        } else {

            $erreurs = "verfie les mot de passe";
        }

        /*si il na pas modifie le mot de passe on utlise ca*/
    } else {
        if (!empty($tel) and !empty($email)) {
            $modifie = $bdd->prepare("UPDATE membre SET  telephone = :tel, email = :email WHERE id = :idi");
            $modifie->execute([

                "tel" => $tel,
                "email" => $email,
                "idi" => $_SESSION["membre"]
            ]);
            header("Location: profil.php");
        } else {
            $erreurs = "remplire email et telephone";
        }
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>modifie profile</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../../css/modifiescss.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../javaScript/script.js"></script>

</head>

<body>
    <!--header-->
    <?php include "header.php" ?>
    <div class="centre">
    <!--formulaire de modifie le profile-->
    <form method="POST" action="">
        <div class="form-floating">
            <input type="text" disabled="disabled" value="<?= $info["Nom"] ?>" id="floating" class="form-control form-control-line" name="lastName" style="margin-bottom: 10px;">
            <label for="floating" id="floatingInputlabel">Nom</label>
        </div>


        <div class="form-floating">
            <input type="text" disabled="disabled" id="prenom" value="<?= $info["prenom"] ?>" class="form-control form-control-line" name="firstName" style="margin-bottom: 10px;">
            <label for="prenom" id="floatingPasswordlabel">prenom</label>
        </div>

        <div class="form-floating">
            <input type="text" disabled="disabled" id="daten" value="<?= $info["date_naissance"] ?>" class="form-control form-control-line" name="daten" style="margin-bottom: 10px;">
            <label for="daten" id="floatingPasswordlabel">date naissance</label>
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" value="<?= $info["email"] ?>" name="email" id="floatingInput" placeholder="name@example.com" style="margin-bottom: 10px;">
            <label for="floatingInput" id="floatingInputlabel">adresse Email</label>
        </div>

        <div class="form-floating">
            <input type="tel" class="form-control" name="tel" id="tele" minlength="10" maxlength="10" value="<?= $info["telephone"] ?>" placeholder="name@example.com" style="margin-bottom: 10px;">
            <label for="tele" id="floatingInputlabel">telephone</label>
        </div>

        <div class="form-floating">
            <input type="text" disabled="disabled" value="<?= $info["sexe"] ?>" id="sxe" class="form-control form-control-line" name="lastName" style="margin-bottom: 10px;">
            <label for="sxe" id="floatingInputlabel">sexe</label>

        </div>



        <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="Password" name="passw" minlength="8" style="margin-bottom: -14px;">
            <label for="floatingPassword" id="floatingPasswordlabel">Mot de passe</label>
            <i class="fa fa-eye" id="eye1" aria-hidden="true" onclick="passecnx()"></i>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="passwordC" placeholder="Password" name="passc" style="margin-bottom: 10px;">
            <label for="floatingPassword" id="floatingPasswordlabel">Mot de passe</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="btnmdf"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="margin-top: -5px; margin-left: -35px; margin-right: 25px;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> Modifier le profil</button>

        <?php
        if (isset($erreurs)) :
        ?>
            <div class="messageerreur"><?= $erreurs ?></div>
        <?php
        endif;
        ?>




    </form>


    </div>

</body>

</html>