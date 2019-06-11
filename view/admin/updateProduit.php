<?php
require 'navbarAdmin.php';
require '../../controller/fonctions.php';
require '../../modal/categories.php';
require '../../modal/marques.php';
require '../../modal/produit.php';
$bdd = getDataBase();
$categories = selectAllCategories($bdd);
$marques = selectAllMarques($bdd);
$produitRecuperer = selectProduitParId($bdd,$_GET['id_produit']);


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
<!-- Navigation -->
<?php while ($p = $produitRecuperer->fetch())
{
    ?>

    <div class="container">
        <form class="form_log" method="post" action="../../controller/admin/updateProduit.php?id_produit=<?=$p['id_produit']?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Etat du Produit</label>
                    <input type="text" class="form-control" placeholder="Etat de votre produit" name="etat_produit" required value="<?= $p['etat_produit']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Prix du Produit</label>
                    <input type="text" class="form-control" placeholder="Prix de votre produit" name="prix_produit" required value="<?= $p['prix_produit']?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exempleTextarea">Description du produit</label>
                    <textarea class="form-control" id="exempleTextarea" placeholder="Décrivez votre produit" name="description_produit" rows="3" required > <?= $p['description_produit']?> </textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="nom">Nom du Produit</label>
                    <input type="text" class="form-control" placeholder="Nom de votre produit" name="nom_produit" required id="nom" value="<?= $p['nom_produit']?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="Select1">Choisir la catégorie</label>
                    <select name = "id_categorie" class="form-control" id="Select1" required>
                        <?php while ($categorie = $categories->fetch())
                        {
                            ?> <option value="<?= $categorie['id_categorie'];?>"><?= $categorie['nom_categorie'];?></option> <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Select2">Choisir la marque</label>
                    <select name = "id_marque" class="form-control" id="Select2" required>
                        <?php while ($marque = $marques->fetch())
                        {
                            ?> <option value="<?= $marque['id_marque'];?>"><?= $marque['nom_marque'];?></option> <?php
                        }
                        ?>
                        /select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="submit" class="btn btn-info">
                </div>
            </div>

        </form>


    </div>
    <?php
} ?>






</body>
</html>
