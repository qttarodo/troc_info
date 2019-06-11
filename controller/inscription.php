<?php
require 'fonctions.php';
require '../modal/utilisateur.php';

$bdd = getDataBase();
$nom = postVar('nom');
$prenom = postVar('prenom');
$adresse = postVar('adresse');
$tel = postVar('tel');
$dateNaiss = postVar('dateNaiss');
$mail = postVar('mail');
$mdp = postVar('mdp');

if ($bdd AND $nom AND $prenom AND $adresse AND $tel AND $dateNaiss AND $mail AND $mdp){
    addUtilisateur($bdd, $nom, $prenom, $adresse, $tel, $dateNaiss, $mail, $mdp);

    header('Location: ../view/connexion.php');

}else{
    echo "Une erreur est survenue";
}


