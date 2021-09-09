<?php
/*fencion inscription*/
function inscription()
{
    $bdd = bdd();//connexion a la base de donnees  
    $email = $_POST['email'];
    $validation = true;
    if (existe($email)) {//on verfie si email utilise deja alors on peut pas inscrire
        $validation = false;
        
        $erreur ="<div class='messageerreur' style='color: black; text-align: center; background-color: red; border-radius: 7px; padding: 5px;'><svg class='bi flex-shrink-0 me-2' width='20' height='20' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg><b>Cette email est déjà pris</b></div>
        ";
    }
    if ($validation == true) {//sinon inscrir
        $phot = 'http://localhost/site/photoutiliser/default.jpg';
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $datenai = htmlspecialchars($_POST['daten']);
        $sexe = htmlspecialchars($_POST['radio']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $mdps =password_hash($_POST['passwor'],PASSWORD_DEFAULT);
        $post = 'client';
        $inscription = $bdd->prepare("INSERT INTO membre(photop, Nom, prenom, date_naissance, sexe, telephone, email, passwor, poste) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $inscription->execute(array($phot, $nom, $prenom, $datenai, $sexe, $tel, $email, $mdps, $post));
        
        $msg = "<div class='messageerreur' style='color: black; text-align: center; background-color: green; border-radius: 7px; padding: 5px;'><svg class='bi flex-shrink-0 me-2' width='20' height='20' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg><b>vous étes bien inscrit</b></div>
        ";
        
        return $msg;
        
    } else {
        return $erreur;
    }
}

/*verfie si email existe deja
    alors il ne peux pas inscrire deux fois avec le meme email
 */
function existe($email)
{
    global $bdd;
    $resultat = $bdd->prepare("SELECT * FROM membre WHERE email = ?");
    $resultat->execute([$email]);
    $resultat = $resultat->fetch();
    return $resultat;
}

/*fenction  connexion*/
function connexion()
{
    $bdd = bdd();
    /*l email ou mot de passe inncorecte*/
    $erreur ="<div class='messageerreur' style='color: black; text-align: center; background-color: rgba(255, 0, 0, 0.4); border-radius: 7px; padding: 5px;  width: 100%;'><svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg><b> Les identifiants sont erronés</b></div>
        ";
    $email = $_POST['email'];
    /*si email existe*/
    $connexion = $bdd->prepare("SELECT * FROM membre WHERE email = ?");
    $connexion->execute([$email]);
    $seconcte = $connexion->fetch();
    if ($seconcte == true) {
        /*si mot de passe existe*/
        if (password_verify($_POST['pass'],$seconcte["passwor"])) {
            /*alors il est conecter */
            $_SESSION["membre"] = $seconcte["id"];
            $_SESSION["membrepo"] = $seconcte["poste"];
            header("Location: ../../index.php");
        } else {
            /*sinon returne erreur */
            return $erreur;
        }
    }
}

/*function deconnexion*/
function deconnexion()
{
    unset($_SESSION["membre"]);
    session_destroy();
    header("Location: connexion.php");
}


/*function recupere les information d une persone selon session ouvert*/
function information()
{
    $bdd = bdd();
    $idpro = $_SESSION["membre"];
    $connexion = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
    $connexion->execute([$idpro]);
    $information = $connexion->fetch();
    return $information;
}
