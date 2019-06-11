<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <title>TrocInfo</title>

    <!-- BOOTSTRAP CDN CSS-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- PERSO CSS-->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<?php include 'navbar.php'; ?>
<?php include '../controller/fonctions.php';?>
<?php include '../modal/ventes.php';
$bdd = getDataBase();
$idUser = $_SESSION['id'];
$ventesEnCours = selectProduitVente($bdd, $idUser);
$ventesAttentes = selectProduitVenteAttente($bdd, $idUser);
$ventesHistoriques = selectProduitVenteHistorique($bdd, $idUser);



?>

<div class="container">

    <a type="button" class="btn btn-success" href="addProduit.php">Vendre un produit</a>


    <h1>Ventes en cours :</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Produit</th>

            <th scope="col">Prix</th>

            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php while ($vc = $ventesEnCours->fetch()){?>
        <tr>
            <th><?= $vc['nom_produit'] ?></th>
            <td><?= $vc['prix_produit'] ?> €</td>
            <td> <a href="../controller/supprimerProduit.php?idProduit=<?= $vc['id_produit'] ?>"><span class="text-danger">Supprimer produit</span></a> </td>


        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="container">
    <h1>Ventes en attente de confirmation :</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Produit</th>
            <th scope="col">ID acheteur</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        <?php while ($va = $ventesAttentes->fetch()){?>
        <tr>
            <th scope="row"><?= $va['nom_produit'] ?></th>
            <td><?= $va['id_user'] ?></td>
            <td><a type="button" class="btn btn-success" href="../controller/confirmerVente.php?idProduit=<?= $va['id_produit'] ?>&idUser=<?= $va['id_user'] ?>">Confirmer la vente</a></td>
            <td><a type="button" class="btn btn-danger" href="../controller/refuserVente.php?idProduit=<?= $va['id_produit'] ?>&idUser=<?= $va['id_user'] ?>">Refuser la vente</a></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>

<div class="container">
    <h1>Historique des ventes :</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Produit</th>
            <th scope="col">Prix</th>
            <th scope="col">Date confirmation</th>

        </tr>
        </thead>
        <tbody>
        <?php while ($vh = $ventesHistoriques->fetch()){?>
        <tr>
            <th scope="row"><?= $vh['nom_produit'] ?></th>
            <td><?= $vh['prix_produit'] ?> €</td>
            <td><?= $vh['date_confirmation_transaction'] ?></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>

</div>




</body>
</html>
