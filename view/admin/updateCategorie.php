<?php
require 'navbarAdmin.php';
require '../../controller/fonctions.php';
require '../../modal/categories.php';
$bdd = getDataBase();
$categorieRecup = selectCategorieId($bdd,$_GET['idCat']);


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
<?php while ($ca = $categorieRecup->fetch())
{
    ?>

    <div class="container">
        <form class="form_log" method="post" action="../../controller/admin/updateCategorie.php?idCat=<?=$ca['id_categorie']?>">



                <div class="form-group col-md-6">
                    <label for="inputPassword4">Libelle : </label>
                    <input type="text" class="form-control" placeholder="Libelle : " name="nom_categorie" required value="<?=$ca['nom_categorie']?>">
                </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="submit" class="btn btn-info">
                </div>
            </div>

            </div>



        </form>


    </div>
    <?php
} ?>






</body>
</html>
