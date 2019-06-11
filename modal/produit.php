<?php

function selectProduitParId($bdd, $idProduit)
{
    $produits = $bdd->query('SELECT * FROM produits WHERE id_produit = "'.$idProduit.'"');
    return $produits;
}

function selectAllProduitsDispo($bdd)
{
    $produits = $bdd->query('SELECT id_produit, nom_produit, prix_produit, description_produit, image_produit FROM produits WHERE validation_transaction = 0 AND disponibilite_produit = 1');
    return $produits;
}

function selectAllProduitsVendus($bdd){
    $produits = $bdd->query('SELECT id_produit, nom_produit, prix_produit, description_produit, image_produit FROM produits WHERE validation_transaction = 1');
    return $produits;

}

function selectAllProduitsAttentes($bdd){
    $produits = $bdd->query('SELECT id_produit, nom_produit, prix_produit, description_produit, image_produit FROM produits WHERE validation_transaction = 0 AND disponibilite_produit = 0');
    return $produits;

}

function updateProduitVente($bdd, $now, $idProduit){

    $bdd->query('UPDATE produits SET validation_transaction = 1, date_confirmation_transaction = "'.$now.'" WHERE id_produit = "'.$idProduit.'"');

}

function updateNonDispoProduit($bdd, $idProduit){
    $bdd->query('UPDATE produits SET disponibilite_produit = 0 WHERE id_produit = "'.$idProduit.'"');
}


function updateDispoProduit($bdd, $idProduit){
    $bdd->query('UPDATE produits SET disponibilite_produit = 1 WHERE id_produit = "'.$idProduit.'"');
}


function addProduit($bdd,$etat_produit,$prix_produit, $description_produit, $nom_produit, $id_categorie, $id_marque, $id_user, $image_produit)
{
    $bdd->query('INSERT INTO produits(etat_produit, prix_produit, description_produit, nom_produit,
id_categorie, id_marque,id_user,image_produit) VALUES ("'.$etat_produit.'","'.$prix_produit.'","'.$description_produit.'","'.$nom_produit.'", "'.$id_categorie.'","'.$id_marque.'","'.$id_user.'","'.$image_produit.'")');

}
function deleteProduit($bdd, $id_produit)
{
     $bdd->query('DELETE from produits WHERE id_produit = "'.$id_produit.'"');

}

function countAllProduitsVente($bdd){

    $totalProduitsVentes = $bdd->query('SELECT COUNT(*) as total FROM produits WHERE disponibilite_produit = 1');
    return $totalProduitsVentes;
}

function countAllProduitsVendus($bdd){

    $totalProduitsVendus = $bdd->query('SELECT COUNT(*) as total FROM produits WHERE validation_transaction = 1');
    return $totalProduitsVendus;
}

function countAllProduitsAttentes($bdd){

    $totalProduitsAttentes = $bdd->query('SELECT COUNT(*) as total FROM produits WHERE validation_transaction = 0 AND disponibilite_produit = 0');
    return $totalProduitsAttentes;
}
function updateProduit($bdd,$etat_produit,$prix_produit, $description_produit, $nom_produit, $id_categorie, $id_marque, $id_produit)
{
    $bdd->query('UPDATE produits SET etat_produit = "'.$etat_produit.'", prix_produit = "'.$prix_produit.'", description_produit = "'.$description_produit.'", nom_produit = "'.$nom_produit.'", id_categorie = "'.$id_categorie.'", id_marque = "'.$id_marque.'" WHERE id_produit = "'.$id_produit.'"');

}


function selectAllProduitsMarque($bdd, $idMarq){
    $produits = $bdd->query('SELECT * FROM produits where id_marque = "'.$idMarq.'"');
    return $produits;
}

