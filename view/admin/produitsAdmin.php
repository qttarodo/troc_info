<?php

require 'navbarAdmin.php';
require '../../modal/produit.php';
require '../../controller/fonctions.php';
$bdd = getDataBase();
$produitsVentes = selectAllProduitsDispo($bdd);
$produitsVendus = selectAllProduitsVendus($bdd);
$produitsAttentes = selectAllProduitsAttentes($bdd);

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

    <h1>Produits en ventes : </h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nom </th>
            <th scope="col">Prix</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($pVentes = $produitsVentes->fetch()){?>
        <tr>
            <th scope="row"><a href="../../controller/admin/supprimerProduitAdmin.php?idProduit=<?= $pVentes['id_produit'] ?>"> <i class="fas fa-trash-alt icon_admin"></i> </a>  <a href="updateProduit.php?id_produit=<?= $pVentes['id_produit']?>"> <i class="fas fa-edit icon_admin"></i></a></th>
            <td><?= $pVentes["nom_produit"] ?></td>
            <td><?= $pVentes["prix_produit"] ?></td>

        </tr>

        <?php }
        ?>
        </tbody>
    </table>

    <h1>Produits vendus : </h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nom </th>
            <th scope="col">Prix</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($pVendus = $produitsVendus->fetch()){?>
            <tr>
                <th scope="row"><a href="../../controller/admin/supprimerProduitAdmin.php?idProduit=<?= $pVendus['id_produit'] ?>"> <i class="fas fa-trash-alt icon_admin"></i> </a>  <a href="updateProduit.php?id_produit=<?= $pVendus['id_produit']?>"> <i class="fas fa-edit icon_admin"></i></a></th>
                <td><?= $pVendus["nom_produit"] ?></td>
                <td><?= $pVendus["prix_produit"] ?></td>

            </tr>

        <?php }
        ?>
        </tbody>
    </table>


    <h1>Produits en cours de transaction : </h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nom </th>
            <th scope="col">Prix</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($pAttentes = $produitsAttentes->fetch()){?>
            <tr>
                <th scope="row"><a href="../../controller/admin/annulerVente.php?idProduit=<?= $pAttentes['id_produit'] ?>"> Annuler la transaction </a>  </th>
                <td><?= $pAttentes["nom_produit"] ?></td>
                <td><?= $pAttentes["prix_produit"] ?></td>

            </tr>

        <?php }
        ?>
        </tbody>
    </table>


</div>




</body>
</html>
