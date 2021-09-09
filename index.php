<?php
session_start();
    require_once "fenctionphp/cnxbdd.php";
    
    
    include_once "fenctionphp/bddvoyage.php";
    include_once "fenctionphp/bddomra.php";

    $bdd = bdd();
    $lesvoyage =affichevoyage();
    $lesomra =afficheomra();
 /*afficher plus d information sur un voyage*/
      if (isset($_POST["plus"])) {
        $setid = set_idvoyage();
        header("Location: html/plus.php");
      }


      if (isset($_POST["reservervoyage"])) {
        $setidv=set_idvoyage();
        header("Location: html/reservervoyage.php");
      }
      
      if (isset($_POST["reserveromra"])) {
        $setido=set_idomra();
        header("Location: html/reserveromra.php");
      }



      
?>

<html lang="fr">

<head>
  <title>voyage</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/voyagescss.css">
  
   <script type="text/javascript" src="javaScript/script.js"></script>
</head>

<body>
   <!--header-->
   <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <!--logo-->
            <a class="navbar-brand" id="logo" href="index.php"><img src="image/logo.png" style="height: 70px; width: 120px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--les button-->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <!--button voyage-->
                    <li class="nav-item">
                        <a class="nav-link active" id="lien1" aria-current="page" href="index.php"><b>voyage</b></a>
                    </li>
                    <!--button contacte-->
                    <li class="nav-item">
                        <a class="nav-link" id="lien2" href="html/profile/contacte.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg> contact</a>
                    </li>
                    <!--button service-->
                    <li class="nav-item dropdown" id="lien2">
                      <a class="nav-link dropdown-toggle"  href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      service
                      </a>
                          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="html/depliant.php">depliant touristique</a></li>
                            <li><a class="dropdown-item" href="html/ideevoyage.php">idées voyages</a></li>
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
                                    <li><a class="dropdown-item" href="html/admin/gerevoyage.php">gere les voyage & omra</a></li>
                                    <li><a class="dropdown-item" href="html/admin/gerereservation.php">gere les reservation</a></li>
                                    <li><a class="dropdown-item" href="html/admin/gereidee.php">gere les idee</a></li>
                                    <li><a class="dropdown-item" href="html/admin/listevalidation.php">liste des validation</a></li>
                                    <li><a class="dropdown-item" href="html/admin/ajouterunvoy.php">ajouter un voyage</a></li>
                                    <li><a class="dropdown-item" href="html/admin/ajouteromra.php">ajouter omra</a></li>
                                    <li><a class="dropdown-item" href="html/admin/ajouteridee.php">ajouter une idee</a></li>

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
                                    <li><a class="dropdown-item" href="html/profile/profil.php"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: -15px; margin-right: 5px;" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>mon profil</a></li>

                                    
                            <!--button deconnexion-->
                                    <li><a class="dropdown-item" href="html/profile/deconnexion.php"><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: -15px; margin-right: 5px;" width="20" height="20" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
</svg>deconnexion</a></li>
                                </ul>
                            </li>

                        <?php
                        else :
                        ?>
                         <!--button connexion-->
                            <li class="nav-item">
                                <a class="nav-link active" id="lien3" aria-current="page" href="html/profile/connexion.php">connexion</a>
                            </li>
                            <!--inscription-->
                            <li class="nav-item">
                                <a class="nav-link active" id="lien4" aria-current="page" href="html/profile/inscription.php">inscription</a>
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









<!--voice le slider qui contient description + video + contacte et address -->
  <section class="py-5 text-center container" >

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" id="vg" style="margin-top: 50px;     background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(5px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.623);
    border: solid 2px rgba(252, 252, 252, 0.096);">
        <div class="carousel-item active">
           
        <div style="margin-top: 50px; color: black; width: 60%; margin-left: auto; margin-right: auto;">
         
            <h4><i>voyager un jour, souvenez pour toujours</i></h4>
            <h4><i>ḥewwes Yiwen wass, mmektit-d yall-ass.</i></h4>
            <br><br>
            <p style="font-size: large;"><b>TYMS TRAVEL</b> est une agence de voyage situé à Bejaia. Elle vous offre des voyage Organises, Omra et elle vous permet de faire des reservation en ligne , elle vous propose des idees de voyage (sejours rementique,des pays sans visa ... ) et vous facilitez le contact avec l'agence pour les réservations d'hotel et l'achat des billets. </p>
            
          </div>
        </div>
        <div class="carousel-item">
         
            <div class="map-box" style="margin-top: 30px;">
                       
                        
                        <a href="https://web.facebook.com/khireddin.tidjet.3/"><button class="btn btn-circle btn-info"><i class="fa fa-facebook"></i></button></a> 
                        <a href="https://www.instagram.com/?hl=fr"><button class="btn btn-circle btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg></i></button></a>
                        
                        <a href="https://www.twitter.com"><button class="btn btn-circle btn-info"><i class="fa fa-twitter"></i></button></a>
                        <a href="https://www.youtube.com/channel/UCkPgEucgqedbckpzC2EUwIA"><button class="btn btn-circle btn-info"><i class="fa fa-youtube"></i></button></a>
                      <a href="mailto:khireddinetidjet@email.com">
                        <button class="btn btn-circle btn-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                      </a>
                      <a href="https://goo.gl/maps/Y5EETsndPVazFobo9">
                        </button>
                        <button class="btn btn-circle btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg></button>
                      </a>
                        <a href="https://www.linkdin.com"><button class="btn btn-circle btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg></button>
                      </a>
                        <a href="tel:213783990777">
                        <button class="btn btn-circle btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg></button>
                      </a>
                        <br/>

            </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102272.5049786394!2d4.936938471693055!3d36.7701888855708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f2cca1a82082c5%3A0x7807b41e13330b6e!2zQsOpamHDr2E!5e0!3m2!1sfr!2sdz!4v1622401424677!5m2!1sfr!2sdz" width="60%" height="230" style="border:0; margin-top: 40px; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="carousel-item">
        <div class="carousel-caption d-none d-md-block">
            <h5>comment reserver un voyage</h5>
           
          </div>
          <video src="photoutiliser/1.mp4" controls style="height: 400px; width :70%">
        
         </video>
          
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>
 



  

  <div class="album py-5 bg-light" >

  <ul class="nav nav-tabs profile-tab" role="tablist" style="margin-bottom: 15px; margin-left: 100px;">
      <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#voyage" role="tab">voyage organise</a> </li>
      <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#omra" id="profileLink" role="tab">omra</a> </li>
  </ul>
<!--liste des voyage et omra-->
    <div class="container" >


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="voyage">

        <div class="col">


          <form class="d-flex" method="POST">

            <input class="form-control me-2" type="search" placeholder="pays" name="paysvoy" aria-label="Search">
            <button class="btn btn-outline-success" name="pays" id="btnxherche1" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
          </form>

        </div>
      </div>
    
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($lesvoyage as $voyage): ?>
        <div class="col">
        
          
          <div class="card shadow-sm">
            
              
              <img src="<?= $voyage->image1?>" alt="" height="300px" width="100%">
            

            <div class="card-body">
              <p class="card-text">
              <h5><?= $voyage->pays?></h5>
              <p><?= $voyage->etoile?> etoil</p>
              <div class="d-flex justify-content-between align-items-center">
 
              <form action="" method="POST">
              <?php $idvoyage= $voyage->id ;?>
              <input type="text" value="<?= $idvoyage ?>" name="idvoyage" hidden>

    
              <?php
                if (isset($_SESSION["membre"])) :
                ?>




                 <button type="submit" name="reservervoyage" class="btn btn-sm btn-outline-secondary" >reservers</button>
                <?php
                else :
                ?>
                  <a href="html/profile/connexion.php"><button type="button" class="btn btn-sm btn-outline-secondary" onclick="alertmsg()">reservers</button></a>
                <?php
                endif;
                ?>



                <button type="submit" class="btn btn-sm btn-outline-secondary" name="plus" style="margin-right: 160px;">plus</button>
                <small class="text-muted">prix : <?= $voyage->prix?> DA</small>
                </form>
              </div>


            </div>
          </div>
        </div>

        <?php 
        endforeach;
        ?>




      </div>
      <br><br><br><br><hr>

<!--liste des omra-->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="omra">
      <?php foreach($lesomra as $afficheomra): ?>
        <div class="col">
          <div class="card shadow-sm">
              <img src="<?= $afficheomra->image1?>" alt="" height="300px" width="100%">
              <div class="card-body">
              <p class="card-text">
              <h5><?= $afficheomra->omra?></h5>
              <h5>date de depart : <?= $afficheomra->datedepart?></h5>
              <p>hotel : <?= $afficheomra->hotel?></p>
              <div style="width:65%;">        <span ><?= $afficheomra->descriptio?></span></div>

              <div class="d-flex justify-content-between align-items-center">
 
              <form action="" method="POST">
              <?php $idomra= $afficheomra->id ;?>
              <input type="text" value="<?= $idomra ?>" name="idomra" hidden>
              <?php
                if (isset($_SESSION["membre"])) :
                ?>
                  <button type="submit" class="btn btn-sm btn-outline-secondary" name="reserveromra" style="margin-right: 200px;">reservers</button>
                <?php
                else :
                ?>
                  <a href="html/profile/connexion.php"><button type="button" class="btn btn-sm btn-outline-secondary" onclick="alertmsg()" style="margin-right: 200px;">reservers</button></a>
                <?php
                endif;
                ?>
                <small class="text-muted" style="margin-left: -30px;">prix min : <?= $afficheomra->prix?> DA</small>
                </form>
              </div>


            </div>
          </div>
        </div>

        <?php 
        endforeach;
        ?>
      </div>
       


    </div>
  </div>

  



  <footer class="text-muted py-5" style="background-color: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(5px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.623);  
    border-top: solid 1px rgba(0, 0, 0, 0.623) ;" >
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="voyage">

    <div class="col" >
        
        <span>l utilisation de ce site implique l'acceptaion des conditions et du reglement sur le respect de la vie privee</span><br>
        <hr>
        <span>site web developper par un groupe d'etudiant de l'universiter de Bejaia </span>
          
        </div>

        <div class="col" style="border-left: solid 2px black; border-right: solid 2px black;">
        <h5>lien rapide</h5>
           <ul>
           <li><a href="html/depliant.php" style="text-decoration: none; color: gray;">Depliant touristique</a></li>
           <li><a href="html/ideevoyage.php" style="text-decoration: none; color: gray;">idee pour voyager</a></li>
           <li><a href="html/profile/contacte.php" style="text-decoration: none; color: gray;">contact</a></li>
           </ul>
        </div>
            

        <div class="col">
          
          <h5>Contacter-nous</h5>
          <ul>
          <li><span> Bejaia</span></li>
          <li><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg> khireddinetidjet@gmail.com</span></li>
          <li><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tablet" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> 0783990777</span></li>
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> 034-000-000</li>
          </ul>
          
        </div>
        
    </div>



      </div>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  

</body>

</html>