<?php

include "fonctions.php";
include "../modal/utilisateur.php";
include "../modal/produit.php";
include "../modal/achats.php";

session_start();
$bdd = getDataBase();
$idProduit = getVar('idProduit');
$idUser = $_SESSION['id'];



$user = selectUserId($bdd, $idUser);
$u = $user->fetch();
$solde = $u['solde_user'];


$produit = selectProduitParId($bdd, $idProduit);
$p = $produit->fetch();
$prix = $p['prix_produit'];


$now = (new DateTime('now'))->format('Y-m-d H:i:s');


if ($bdd AND $idProduit AND $idUser AND $prix<=$solde){

    addPropositionAchat($bdd, $now, $idUser, $idProduit);
    //updateNonDispoProduit($bdd, $idProduit);
    updateSoldeAchat($bdd, $idUser, $prix);
    header('Location: ../view/achats.php');

}else{
    echo "Une erreur est survenue, vérifiez le solde de votre compte.";
}