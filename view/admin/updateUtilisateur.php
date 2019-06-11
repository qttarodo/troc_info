<?php
require 'navbarAdmin.php';
require '../../controller/fonctions.php';
require '../../modal/utilisateur.php';
$bdd = getDataBase();
$utilisateurRecuperer = selectUserId($bdd,$_GET['idUser']);


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
<?php while ($u = $utilisateurRecuperer->fetch())
{
    ?>

    <div class="container">
        <form class="form_log" method="post" action="../../controller/admin/updateUtilisateur.php?idUser=<?=$u['id_user']?>">


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="nom" required value="<?=$u['nom_user']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Prenom</label>
                    <input type="text" class="form-control" placeholder="Prenom" name="prenom" required value="<?=$u['prenom_user']?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAddress">Addresse</label>
                    <input type="text" class="form-control"  placeholder="Votre adresse.." name="adresse" required value="<?=$u['adresse_user']?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Tel</label>
                    <input type="text" class="form-control" placeholder="06 xx xx xx xx" name="tel" required value="<?=$u['tel_user']?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Date de naissance</label>
                    <input type="date" class="form-control" placeholder="jj/mm/aaaa" name="dateNaiss" required value="<?=$u['naissance_user']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control"  placeholder="Email" name="mail" required value="<?=$u['mail_user']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Mot de passe</label>
                    <input type="password" class="form-control"  placeholder="Password" name="mdp" required value="<?=$u['mdp_user']?>">
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
