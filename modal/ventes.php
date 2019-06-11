<?php

function selectProduitVente($bdd, $idUser){
    $ventes = $bdd->query('SELECT id_produit, nom_produit, prix_produit FROM produits WHERE id_user = ('.$idUser.') AND validation_transaction = 0');
    return $ventes;

}

function selectProduitVenteAttente($bdd, $idUser){
    $ventesAttentes = $bdd->query('SELECT P.id_produit, P.nom_produit, P.prix_produit, A.id_user FROM produits P JOIN proposition_achat A ON P.id_produit = A.id_produit WHERE P.id_user = ('.$idUser.') AND P.validation_transaction = 0 AND A.validation_achat = 0 ');
    return $ventesAttentes;
}

function selectProduitVenteHistorique($bdd, $idUser){
    $ventes = $bdd->query('SELECT id_produit, nom_produit, prix_produit, date_confirmation_transaction FROM produits WHERE id_user = ('.$idUser.') AND validation_transaction = 1');
    return $ventes;
}


function updatePropositionAchat($bdd, $idUser, $idProduit){
    $bdd->query('UPDATE proposition_achat SET validation_achat = 1 WHERE id_produit = "'.$idProduit.'" AND id_user="'.$idUser.'"');
}

function supprimerPropositionAchat($bdd, $idProduit,$idacheteur){
    $bdd->query('DELETE FROM  proposition_achat WHERE id_produit = "'.$idProduit.'"AND id_user = "'.$idacheteur.'"');
}
function supprimerAutresPropositionAchat($bdd, $idProduit, $idacheteur){
    $bdd->query('DELETE FROM  proposition_achat WHERE id_produit = "'.$idProduit.'" AND id_user != "'.$idacheteur.'"');
}


function supprimerPropositionAchatProduit($bdd, $idProduit){
    $bdd->query('DELETE FROM  proposition_achat WHERE id_produit = "'.$idProduit.'"');
}