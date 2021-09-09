<?php
session_start();

include_once "../fenctionphp/bddvoyage.php";
require_once "../fenctionphp/cnxbdd.php";
$bdd = bdd();
$info = plussurvoyage();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>plus</title>
    <link rel="stylesheet" type="text/css" href="../css/plusstylecss.css">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
    
<?php include "header.php" ?>

<div class="col-lg-8 mx-auto p-3 py-md-5" id="core">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom" >
    <span class="fs-4">plus d information sur votre voyage</span>
  </header>

  <main>
     
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="height: 350px; background-color: white; border-radius: 10px;">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?= $info["image1"] ?>" class="d-block w-100" alt="..." style="height: 350px;">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="<?= $info["image2"] ?>" class="d-block w-100" alt="..." style="height: 350px;">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="<?= $info["image3"] ?>" class="d-block w-100" alt="..." style="height: 350px;">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="<?= $info["image4"] ?>" class="d-block w-100" alt="..." style="height: 350px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
   
 
    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
      <span style="font-size: 30px; margin-right: 40px;"><?= $info["pays"] ?></span>
      <span style="color: red; font-size: 30px"><?= $info["prix"] ?> DA</span><br>
      <span><?= $info["etoile"] ?> etoil</span><br>
      <span><?= $info["nbrjoursetnuit"] ?></span><br><br>
        
        <b>discription</b>
        <p><?= $info["descriptio"] ?></p>
  
      </div>

      <div class="col-md-6">
        <h2>Depart <?= $info["datedpr"] ?></h2>

        <b>programme</b>
        <p> <?= $info["programme"] ?></p>

      </div>
    </div>
  </main>
  <footer class="pt-5 my-5 text-muted border-top">
    
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      
  </body>
</html>