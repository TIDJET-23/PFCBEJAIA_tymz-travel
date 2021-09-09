<?php
session_start();
include_once "../../fenctionphp/membre.php";
?>

<header>
    <!--navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <!--logo-->
            <a class="navbar-brand" id="logo" href="../../index.php"><img src="../../image/logo.png" style="height: 70px; width: 120px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">


                    <li class="nav-item">
                        <a class="nav-link active" id="lien1" aria-current="page" href="../../index.php"><b>voyage</b></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="lien2" href="../profile/contacte.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg> contact</a>
                    </li>

                    <!--button service-->
                    <li class="nav-item dropdown" id="lien2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      service
                      </a>
                          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="../depliant.php">depliant touristique</a></li>
                            <li><a class="dropdown-item" href="../ideevoyage.php">idées voyages</a></li>
                          </ul>
                    </li>
                    
                    <?php
                    if (isset($_SESSION["membre"])) :
                    ?>
                        <?php
                        if ($_SESSION["membrepo"] == "admin") :
                        ?>

                            

                              <li class="nav-item dropdown" id="lien2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                administration
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="gerevoyage.php">gere les voyage & omra</a></li>
                                    <li><a class="dropdown-item" href="gerereservation.php">gere les reservation</a></li>
                                    <li><a class="dropdown-item" href="gereidee.php">gere les idee</a></li>
                                    <li><a class="dropdown-item" href="listevalidation.php">liste des validation</a></li>
                                    <li><a class="dropdown-item" href="ajouterunvoy.php">ajouter un voyage</a></li>
                                    <li><a class="dropdown-item" href="ajouteromra.php">ajouter omra</a></li>
                                    <li><a class="dropdown-item" href="ajouteridee.php">ajouter une idee</a></li>

                                </ul>
                            </li>

                        <?php
                        endif;
                        ?>
                    <?php
                    endif;
                    ?>

                </ul>
                <nav>


                    <ul class="menu">
                        <?php
                        if (isset($_SESSION["membre"])) :
                        ?>

                            <!--profil-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" id="profil">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="../profile/profil.php"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: -15px; margin-right: 5px;" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> mon profil</a></li>
                   
                                <li><a class="dropdown-item" href="../profile/deconnexion.php"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: -15px; margin-right: 5px;" width="20" height="20" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
</svg> deconnexion</a></li>
                                </ul>
                            </li>

                        <?php
                        else :
                        ?>

                            <li class="nav-item">
                                <a class="nav-link active" id="lien3" aria-current="page" href="../profile/connexion.php">connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="lien4" aria-current="page" href="../profile/inscription.php">inscription</a>
                            </li>
                        <?php
                        endif;
                        ?>


                    </ul>
                </nav>
            </div>
        </div>
    </nav>
</header>