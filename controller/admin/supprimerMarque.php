<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 23/11/2018
 * Time: 11:25
 */



require "../fonctions.php";
require "../../modal/marques.php";
require "../../modal/produit.php";
require "../../modal/ventes.php";

$bdd = getDataBase();
$idMarq = getVar("idMarq");

$produits = selectAllProduitsMarque($bdd, $idMarq);

while($p = $produits->fetch()){
    supprimerPropositionAchatProduit($bdd,$p['id_produit']);
    deleteProduit($bdd,$p['id_produit']);

}


deleteMarque($bdd,$idMarq);




header("Location: ../../view/admin/marquesAdmin.php");