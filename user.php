<?php
// J'utilise le session_start pour utiliser les variables de session
session_start();
// Je m'assure que la session d'utilisateur est active sinon je redirige vers la page forbidden.php
if (empty($_SESSION['userName'])){
    header("Location: http://projettitre/forbidden.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Profil : <?= $_SESSION['userName'] ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/styleUser.css" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <a class="navbar-brand text-white" href="#">Unde'R</a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 text-dark" type="search" placeholder="Recherche un artiste">
                        <button class="btn btnSearch my-2 my-sm-0" type="submit">GO !</button>
                    </form>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link btnActuality" href="#">Actualite</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link btn btnDeconnect" type="button" href="logout.php">Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-4 presentation">
                    <div class="avatar">Mettre LAVATAR</div>                    
                    <h2><?= $_SESSION['userName'] ?></h2>
                    <h3><?= $_SESSION['nameCategory'] ?></h3>
                    <p><?= $_SESSION['nameCountry'] ?></p>
                    <h3>Liens des reseaux de la personne</h3>
                    <p>YouTube</p>
                    <p>Facebook</p>
                    <p>Twitter</p>
                    <p>Instagram</p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active nav-link-user" href="user.php">Mon Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-user" href="addContent.php">Ajoute du contenu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-user" href="updateProfil.php">Modifier mon compte</a>
                        </li>                        
                    </ul>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <div class="publication presentation">
                        <h2>AUCUN CONTENU POUR LE MOMENT</h2>                        
                    </div>
                    <div class="publication presentation">
                        <h2>TITRE DU CONTENU</h2>
                        <h5>Date de publication, modifie le:</h5>
                        <div class="content">le CONTENU</div>
                        <p>Texte d'explication</p>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="jumbotron text-center">
                <p class="text-white">&copy; 2018. UNDE'R. All rights reserved.</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    </body>
</html>

