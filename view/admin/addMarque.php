<?php
require 'navbarAdmin.php';
require '../../controller/fonctions.php';
require '../../modal/marques.php';
$bdd = getDataBase();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TrocInfo</title>

    <!-- BOOTSTRAP CDN CSS-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- PERSO CSS-->
    <link rel="stylesheet" href="../../css/style.css">

</head>
<body>


    <div class="container">
        <form class="form_log" method="post" action="../../controller/admin/addMarque.php">



            <div class="form-group col-md-6">
                <label for="inputPassword4">Libelle : </label>
                <input type="text" class="form-control" placeholder="Liebelle : " name="nom_marque" required value="">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="submit" class="btn btn-info">
                </div>
            </div>

    </div>



    </form>


    </div>







</body>
</html>
