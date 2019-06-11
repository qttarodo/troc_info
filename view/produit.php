<?php include 'navbar.php'; ?>
<?php include '../controller/fonctions.php';?>
<?php include '../modal/produit.php';
$bdd = getDataBase();
$idProduit = getVar('idProduit');
$produit = selectProduitParId($bdd, $idProduit);
$p = $produit->fetch();


?>
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

<div class="container">

    <div class="row">

<div class="col-lg-12">

    <div class="card mt-4">
        <img class="card-img-top img-fluid" src="../img/<?= $p['image_produit'] ?> " alt="">
        <div class="card-body">
            <h3 class="card-title"><?= $p['nom_produit'] ?></h3>
            <h4><?= $p['prix_produit'] ?> €</h4>
            <p class="card-text"><?= $p['description_produit'] ?></p>
            <a href="../controller/propositionAchat.php?idProduit=<?= $p['id_produit'] ?>" class="btn btn-success">Effectuer une demande d'achat</a>
        </div>
    </div>
    <!-- /.card -->


    <!-- /.card -->

</div>
<!-- /.col-lg-9 -->

</div>

</div>
<!-- /.container -->



</body>
</html>
