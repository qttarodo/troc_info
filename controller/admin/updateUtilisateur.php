<?php
include "../fonctions.php";
include "../../modal/utilisateur.php";


$bdd= getDataBase();
$idUser = getVar("idUser");
$nom = postVar('nom');
$prenom = postVar('prenom');
$adresse = postVar('adresse');
$tel = postVar('tel');
$dateNaiss = postVar('dateNaiss');
$mail = postVar('mail');
$mdp = postVar('mdp');

updateUser($bdd,$idUser,$nom,$prenom,$adresse,$tel,$dateNaiss,$mail,$mdp);
header('Location: ../../view/admin/utilisateursAdmin.php');