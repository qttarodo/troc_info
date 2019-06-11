<?php

require 'navbarAdmin.php';
require '../../modal/produit.php';
require '../../controller/fonctions.php';
$bdd = getDataBase();
$totalProduitsVentes = countAllProduitsVente($bdd);
$totalVentes = $totalProduitsVentes->fetch();
$totalProduitsVendus = countAllProduitsVendus($bdd);
$totalVendus = $totalProduitsVendus->fetch();
$totalProduitsAttentes = countAllProduitsAttentes($bdd);
$totalAttentes = $totalProduitsAttentes->fetch();

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

<div class="container ">

    <table class="table table_admin">

        <tbody>
        <tr>
            <th scope="row">Produits : </th>
            <td> <a href="produitsAdmin.php"><i class="far fa-eye icon_admin"></i></i></a></td>

        </tr>

        <tr>
            <th scope="row">Utilisateurs : </th>
            <td> <a href="utilisateursAdmin.php"><i class="far fa-eye icon_admin"></i></i></a></td>

        </tr>

        <tr>
            <th scope="row">Marques : </th>
            <td> <a href="marquesAdmin.php "><i class="far fa-eye icon_admin"></i></i></a></td>
        </tr>

        <tr>
            <th scope="row">Catégories : </th>
            <td> <a href="categoriesAdmin.php"><i class="far fa-eye icon_admin"></i></i></a></td>
        </tr>

        </tbody>
    </table>


    <h1 class="text-center">Statistiques : </h1>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                Nombres de produits en vente : <?= $totalVentes["total"] ?>
            </div>
            <div class="col-sm">
                Nombre de produits vendus : <?= $totalVendus["total"] ?>
            </div>
            <div class="col-sm">
                Nombre de transaction en cours : <?= $totalAttentes["total"] ?>
            </div>
        </div>
    </div>
</div>




</body>
</html>
