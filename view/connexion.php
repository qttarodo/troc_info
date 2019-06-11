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



  <form class="form_log" method="post" action="../controller/connexion.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse email</label>
      <input type="email" class="form-control" placeholder="Votre email" name="mail">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mot de passe</label>
      <input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
    </div>
    <button type="submit" class="btn btn-info">Connexion</button>
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
