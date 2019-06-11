<?php
require 'fonctions.php';
require '../modal/utilisateur.php';



$bdd = getDataBase();
$mail = postVar('mail');
$mdp = postVar('mdp');

if ($bdd AND $mail AND $mdp){
    $connexion = testConnexion($bdd, $mail, $mdp);
    if ($connexion->rowCount() == 0){
        echo "Erreur";
    }
    else{
        session_start();
        $co = $connexion ->fetch();
        $_SESSION['id'] = $co['id_user'];
        $_SESSION['nom'] = $co['nom_user'];
        $_SESSION['prenom'] = $co['prenom_user'];
        header('Location: ../view/index.php');

    }

}