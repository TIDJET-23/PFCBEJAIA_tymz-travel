<?php
session_start();

require_once "../fenctionphp/cnxbdd.php";
include_once "../fenctionphp/bddidee.php";
$lesvoyage = afficheidee();
if (isset($_POST["plus"])) {
  $information = set_ididee();
  
  header("Location: plusinfo.php");
}



?>

<html lang="fr">

<head>
  <title>idees voyages</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/voyagescss.css">
  <!--meme css que voyage.php-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script type="text/javascript" src="javaScript/script.js"></script>
</head>

<body>
  <!--header-->
  <?php include "header.php" ?>



  <ul class="nav nav-tabs profile-tab" role="tablist" style="margin-top: 80px;">

  </ul>

  <div class="album py-5 bg-light">


    <!--liste des voyage et omra-->
    <div class="container">


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="voyage">

        <div class="col">
        <form action="" method="POST">
          <select class="form-select" name="ideev" style=" width: 100%; height: 40px;" aria-label="Default select example" id="floating">
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




        </div>
        <div class="col">

          <button class="btn btn-outline-success" name="pays" id="btnxherche1" type="submit" style=" width: 10%; height: 40px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>


          </form>
        </div>

        
      </div>

      <!--ligne des voyage-->

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top: 20px;">
      <?php foreach ($lesvoyage as $voyage) : ?>

        <div class="col">

          
            <div class="card shadow-sm">


              <img src="<?= $voyage->image1 ?>" alt="" height="300px" width="100%">


              <div class="card-body">
                <p class="card-text">
                <h5><?= $voyage->region ?></h5>
                
                <div class="d-flex justify-content-between align-items-center">

                  <form action="" method="POST">
                    <?php ?>
                    <input type="text" value="<?= $voyage->id ?>" name="ididee" hidden>
                    <button type="submit" class="btn btn-sm btn-outline-secondary" name="plus" style="margin-right: 160px;">plus</button>
                    
                    <!-- Button trigger modal -->
 




                  </form>
                </div>


              </div>
            
            </div>

        </div>
        <?php endforeach; ?>





      </div>




    </div>

  </div>


  






</body>

</html>