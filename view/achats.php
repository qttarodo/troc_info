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
<?php include '../modal/achats.php';
$bdd = getDataBase();
$idUser = $_SESSION['id'];
$achatAttentes = selectProduitAchatAttente($bdd, $idUser);
$achatHistoriques = selectProduitAchatHistorique($bdd, $idUser);


?>

<div class="container">
    <h1>Mes achats :</h1>

    <h2>Achats en attente de validation :</h2>
    <table class="table table-striped">
        <thead>
        <tr>

            <th scope="col">Produit</th>
            <th scope="col">Prix</th>
            <th scope="col">Date demande d'achat</th>


        </tr>
        </thead>
        <tbody>
        <?php while ($aa = $achatAttentes->fetch()){?>
        <tr>
            <th scope="row"><?= $aa['nom_produit'] ?></th>
            <td><?= $aa['prix_produit'] ?></td>
            <td><?= $aa['date_proposition_achat'] ?></td>

        </tr>
        <?php } ?>
        </tbody>
    </table>

    <h2>Historique des achats :</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Produit</th>
            <th scope="col">Prix</th>

        </tr>
        </thead>
        <tbody>
        <?php while ($ah = $achatHistoriques->fetch()){?>
        <tr>
            <th scope="row"><?= $ah['nom_produit'] ?></th>
            <td><?= $ah['prix_produit'] ?> €</td>


        </tr>
        <?php } ?>
        </tbody>
    </table>



</div>




</body>
</html>
