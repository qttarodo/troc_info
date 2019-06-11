<?php
session_start();
require "fonctions.php";
require  "../modal/utilisateur.php";
 $bdd = getDataBase();
 $idUser = $_SESSION['id'];
 $credit = postVar('solde');



crediterCompte($bdd, $credit, $idUser);

header('Location: ../view/compte.php');