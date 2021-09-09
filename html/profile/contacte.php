<?php
session_start();

require_once "../../fenctionphp/cnxbdd.php";
$bdd = bdd();


if (isset($_POST['envoyer'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['sujet'];
    $Msg = $_POST['msg'];

    
    if (empty($Name) || empty($Email) || empty($Subject) || empty($Msg)) {
        $erreurs ="<div class='messageerreur' style='color: black; text-align: center; background-color: red; border-radius: 7px; padding: 5px;'><svg class='bi flex-shrink-0 me-2' width='20' height='20' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg><b>msg non envoyer</b></div>
        ";
    } else {
        
        $to = "khireddinetidjet@gmail.com";
        $header = "From: ". $Email;
		
        if ($Email!= NULL) {
			mail($to, $Subject, $Msg, $header);
            
			$erreurs ="<div class='messageerreur' style='color: black; text-align: center; background-color: green; border-radius: 7px; padding: 5px;'><svg class='bi flex-shrink-0 me-2' width='20' height='20' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg><b>msg envoyer avec succes</b></div>
        ";
        }
    }
	
}

?>




<!DOCTYPE html>
<html>

<head>

    <title>Contact</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/modifiescss.css"><!--meme css avec modifie mrofile-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    
</head>

<body>
    <!--header-->
    <?php include "header.php" ?>
	
    <div class="container">
    <div class="card mt-5" style="background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(5px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.623);
    border: solid 2px rgba(252, 252, 252, 0.096); width: 500px; margin-left: auto; margin-right: auto;">
            <div class="card-title">
                <h2 class="text-center py-2">Contact</h2>
				
							<div style="margin-top: -10px; margin-bottom: 10px;">
				<?php
                if (isset($erreurs)) :
                ?>
                   <?= $erreurs ?>           
				<?php
                endif;
                ?>
       </div>



                <hr>
                
            </div>
            <div class="card-body">
                <!--formulaire d envoyer un messege-->
                <form action="" method="POST">
                    <input type="text" name="Name" placeholder="nom & prenom" class="form-control mb-2">
                    <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                    <input type="text" name="sujet" placeholder="sujet" class="form-control mb-2">
                    <textarea name="msg" class="form-control mb-2" placeholder="votre messege" rows="7"></textarea>
                    <button type="submit" class="btn btn-success" name="envoyer"> envoyer </button>
                </form>
            </div>
        </div>

        <!--div des contacte-->
        <div class="card mt-5" style="background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(5px);
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.623);
    border: solid 2px rgba(252, 252, 252, 0.096); width: 500px; margin-left: auto; margin-right: auto;">
            
            <div class="card-body" style="margin-left: auto; margin-right: auto;">
                    
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
            </div>
        </div>
    </div>
</body>

</html>