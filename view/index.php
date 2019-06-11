

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
<?php
include 'navbar.php';
require '../controller/fonctions.php';
require '../controller/recherche.php';
require '../modal/marques.php';
require '../modal/categories.php';
require '../modal/produit.php';


$bdd=getDataBase();
$categories = selectAllCategories($bdd);
$marques = selectAllMarques($bdd);
$nom = getVar("nom_produit");
$marque = getVar("marque");
$categorie = getVar("categorie");



$recherche = testRecherche($bdd,$nom,$categorie,$marque);

/* DEBUG


var_dump($categories);
var_dump($marques);
var_dump($recherche);
var_dump($categorie);
var_dump($marque);
var_dump($nom);
var_dump($_SESSION['id']);

*/


?>

<div class="container">


<form class="form_index" method="get">

    <h1>Trouvez un produit : </h1>
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="search" class="form-control" name="nom_produit" placeholder="Nom produit" >
        </div>
        <div class="form-group col-md-3">
            <select id="inputState" class="form-control" name="categorie">
                <option selected disabled>Catégories : </option>
                <?php while ($c = $categories->fetch()){?>
                <option value="<?= $c['id_categorie'] ?>"><?= $c['nom_categorie'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
            <select id="inputState" class="form-control" name="marque">
                <option selected disabled>Marques : </option>
                <?php while ($m = $marques->fetch()){?>
                    <option value="<?= $m['id_marque'] ?>"><?= $m['nom_marque'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-info">Rechercher </button>


</form>
</div>




<div class="container">
    <div class="row">
    <div class="col-lg-12">

        <div class="row">

            <?php
            if ($recherche->rowCount() > 0){


                        while ($p = $recherche->fetch()){?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="produit.php?idProduit=<?= $p['id_produit'] ?>"><img class="card-img-top" src="../img/<?= $p['image_produit'] ?> " alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="produit.php?idProduit=<?= $p['id_produit'] ?>"><?= $p['nom_produit'] ?></a>
                                    </h4>

                                    <p class="card-text"><?= $p['description_produit'] ?> </p>
                                </div>
                                <div class="card-footer">
                                    <h5><?= $p['prix_produit'] ?> € </h5>
                                </div>
                            </div>
                        </div>


                            <?php }
            }else { ?>
            <p>Aucun résultat</p>
            <?php } ?>

        </div>
    <!-- /.row -->

    </div>
    <!-- /.col-lg-12 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->




</body>
</html>
