<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 23/11/2018
 * Time: 11:25
 */



require "../fonctions.php";
require "../../modal/categories.php";
require "../../modal/recherche.php";
require "../../modal/ventes.php";
require "../../modal/produit.php";


$bdd = getDataBase();
$idCat = getVar("idCat");
$produits = rechercheParCategorie($bdd, $idCat);

while($p = $produits->fetch()){
    supprimerPropositionAchatProduit($bdd,$p['id_produit']);
    deleteProduit($bdd,$p['id_produit']);
}

deleteCategorie($bdd,$idCat );

header("Location: ../../view/admin/categoriesAdmin.php");




