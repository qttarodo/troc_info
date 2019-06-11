<?php include 'navbar.php';
require '../controller/fonctions.php';
require '../modal/utilisateur.php';
$bdd = getDataBase();
$idUser = $_SESSION['id'];
$user = selectUserId($bdd, $idUser);
$u = $user->fetch();

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
<h1>Votre compte :</h1>
    <h2><?= $u['nom_user'] ?> <?= $u['prenom_user'] ?> </h2>

    <h3>Solde de votre compte : <?= $u['solde_user'] ?> jetons</h3>


    <form action="../controller/crediterCompte.php" method="post">
        <div class="input-group-prepend">
        <input type="number" class="form-control input-solde" name="solde">
        <button type="submit" class="btn btn-success">Créditer  <i class="fas fa-euro-sign"></i> </button>
        </div>
    </form>



</div>




</body>
</html>
