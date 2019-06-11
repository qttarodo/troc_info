<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TrocInfo</title>



    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">



    <!-- PERSO CSS-->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<nav class="navbar navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">TROC INFO</a>

        <div class="dropdown">
            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user icon-user-navbar"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header"><?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?></h6>
                <a class="dropdown-item" href="achats.php">Mes achats</a>
                <a class="dropdown-item" href="ventes.php">Mes ventes</a>

                <a class="dropdown-item" href="compte.php">Mon compte</a>
                <a class="dropdown-item" href="../controller/deco.php"><span class="text-danger">Déconnexion</span></a>

            </div>
        </div>

    </div>
</nav>



<!-- BOOTSTRAP CDN JS-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


