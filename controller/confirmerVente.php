<?php

require 'fonctions.php';
require '../modal/produit.php';
require '../modal/utilisateur.php';
require '../modal/ventes.php';
session_start();

$bdd = getDataBase();
$idProduit = getVar('idProduit');
$idUserAchteur = getVar('idUser');
$produit = selectProduitParId($bdd, $idProduit);
$p = $produit->fetch();
$prix = $p['prix_produit'];
$idUser = $_SESSION['id'];


$now = (new DateTime('now'))->format('Y-m-d H:i:s');

updateProduitVente($bdd, $now, $idProduit);
updatePropositionAchat($bdd, $idUserAchteur, $idProduit);
supprimerAutresPropositionAchat($bdd,$idProduit,$idUserAchteur);
updateSoldeVente($bdd, $idUser, $prix);
updateNonDispoProduit($bdd,$idProduit);

header('Location: ../view/ventes.php');