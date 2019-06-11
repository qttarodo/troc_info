<?php
include "../fonctions.php";
include "../../modal/produit.php";


$bdd= getDataBase();
$etat_produit =  postVar("etat_produit");
$prix_produit = postVar("prix_produit");
$description_produit = postVar("description_produit");
$nom_produit= postVar("nom_produit");
$id_categorie = postVar("id_categorie");
$id_marque = postVar("id_marque");
$id_produit = getVar("id_produit");


var_dump($id_categorie);
updateProduit($bdd,$etat_produit,$prix_produit, $description_produit, $nom_produit, $id_categorie, $id_marque, $id_produit);
header('Location: ../../view/admin/produitsAdmin.php');