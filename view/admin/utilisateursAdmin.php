<?php

require 'navbarAdmin.php';
require '../../modal/utilisateur.php';
require '../../controller/fonctions.php';
$bdd = getDataBase();
$utilisateurs = selectAllUser($bdd);


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

    <h1>Utilisateurs : </h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Nom </th>
            <th scope="col">Prenom</th>
            <th scope="col">Mail</th>

        </tr>
        </thead>
        <tbody>
        <?php
        while ($ut = $utilisateurs->fetch()){?>
            <tr>
                <th scope="row"><a href="../../controller/admin/supprimerUtilisateur.php?idUser=<?= $ut['id_user'] ?>"> <i class="fas fa-trash-alt icon_admin"></i> </a>  <a  href="updateUtilisateur.php?idUser=<?= $ut['id_user'] ?>" > <i class="fas fa-edit icon_admin"></i> </a></th>
                <td><?= $ut["nom_user"] ?></td>
                <td><?= $ut["prenom_user"] ?></td>
                <td><?= $ut["mail_user"] ?></td>

            </tr>

        <?php }
        ?>
        </tbody>
    </table>




</div>




</body>
</html>
