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
  <!-- Navigation -->
  <nav class="navbar navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="landingPage.php">TROC INFO</a>

      <a href="connexion.php"> <button class="btn btn-outline-info my-2 my-sm-0">Connexion</button></a>



    </div>
  </nav>

<div class="container">




  <form class="form_log" method="post" action="../controller/inscription.php">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nom</label>
        <input type="text" class="form-control" placeholder="Nom" name="nom" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Prenom</label>
        <input type="text" class="form-control" placeholder="Prenom" name="prenom" required>
      </div>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Addresse</label>
      <input type="text" class="form-control"  placeholder="Votre adresse.." name="adresse" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Tel</label>
      <input type="text" class="form-control" placeholder="06 xx xx xx xx" name="tel" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Date de naissance</label>
      <input type="date" class="form-control" placeholder="jj/mm/aaaa" name="dateNaiss" required>
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control"  placeholder="Email" name="mail" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Mot de passe</label>
        <input type="password" class="form-control"  placeholder="Password" name="mdp" required>
      </div>
    </div>


    <button type="submit" class="btn btn-info">Inscription</button>
  </form>


</div>




<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
  </div>
  <!-- /.container -->
</footer>




</body>
</html>
