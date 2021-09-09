<?php
session_start();



require_once "../fenctionphp/cnxbdd.php";
include_once "../fenctionphp/bdddepliant.php";
$bdd = bdd();

$affichedep =afficherdepliant();

if (isset($_POST["suppdep"])) {
  $supp=supprimerdep();
  header("Location: depliant.php");

  }

  if (isset($_POST["ajtdep"])) {
    $supp=ajoutedepliant();
    header("Location: depliant.php");
  
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>depliant touristique</title>
    <link rel="stylesheet" type="text/css" href="../css/plusstylecss.css"> <!--meme css que plus.php-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
    
<?php include "header.php" ?>





<?php
  if (isset($_SESSION["membre"])) :
  ?>
  <?php
  if ($_SESSION["membrepo"] == "admin") :
  ?>
 <div style="margin-top: 50px;background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(5px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.623);
    border: solid 2px rgba(252, 252, 252, 0.096); width: 1000px; margin-left: auto; margin-right: auto; padding: 20px;">
    
    <form method="POST" action="" enctype="multipart/form-data">
    <div class="row g-5">
      <div class="col-md-6">
         
          <input type="file"   name="photo"  required /><br><br>
          
         
      </div>

      <div class="col-md-6">
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="ajtdep"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg> ajouter</button>
      </div>
      
    </div>
    </form>

    </div>
    <?php
    endif;
    ?>
    <?php
    endif;
    ?>




<div class="col-lg-8 mx-auto p-3 py-md-5" id="core">
  <header class="d-flex align-items-center pb-3 mb-5 border-bottom" >
    <span class="fs-4">depliant touristique</span>
  </header>

  <main>
  
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style=" border-radius: 10px;">
  
  
    <?php foreach($affichedep as $dep): ?>
    <form method="POST" action="" enctype="multipart/form-data">
      
      <img src="<?= $dep->image1 ?>" class="d-block w-100" alt="..." style="height: 500px; margin-bottom: 10px;">
      <?php
      if (isset($_SESSION["membre"])) :
      ?>
      <?php
      if ($_SESSION["membrepo"] == "admin") :
      ?>
            <input type="text" value="<?= $dep->iddep ;?>" name="iddep" hidden>
            <button class="w-100 btn btn-lg btn-primary" id="btncnx" type="submit" name="suppdep" style="border: none; background-color: red; margin-top: 4px; margin-bottom: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> supprimer</button>
            

         <?php
        endif;
        ?>
        <?php
        endif;
        ?>

</form>


<?php endforeach; ?>
    
    
     
  


  
  

      
        

    
        
       
   

   

  </main>

</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      
  </body>
</html>