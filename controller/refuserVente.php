<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/11/2018
 * Time: 13:59
 */

require "fonctions.php";
require "../modal/ventes.php";
require "../modal/produit.php";

$bdd = getDataBase();
$idProduit = getVar('idProduit');
$idUserAchteur = getVar('idUser');

if ($bdd AND $idProduit){
    supprimerPropositionAchat($bdd, $idProduit,$idUserAchteur);
    updateDispoProduit($bdd, $idProduit);
    header("Location: ../view/ventes.php");
}