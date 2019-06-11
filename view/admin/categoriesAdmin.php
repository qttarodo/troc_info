<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 23/11/2018
 * Time: 11:35
 */

require 'navbarAdmin.php';
require '../../modal/categories.php';
require '../../controller/fonctions.php';
$bdd = getDataBase();
$categories = selectAllCategories($bdd);


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

    <h1>Categories : </h1>
    <a href="addCategorie.php"><i class="fas fa-plus-circle icon_admin"></i> </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">ID </th>
            <th scope="col">Nom</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($ca = $categories->fetch()){?>
            <tr>
                <th scope="row"><a href="../../controller/admin/supprimerCategorie.php?idCat=<?= $ca['id_categorie'] ?>"> <i class="fas fa-trash-alt icon_admin"></i> </a>  <a href="updateCategorie.php?idCat=<?= $ca['id_categorie']?>"> <i class="fas fa-edit icon_admin"></i> </a></th>
                <td><?= $ca["id_categorie"] ?></td>
                <td><?= $ca["nom_categorie"] ?></td>


            </tr>

        <?php }
        ?>
        </tbody>
    </table>




</div>




</body>
</html>
