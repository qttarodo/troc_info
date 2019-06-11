<?php

function selectProduitAchatAttente($bdd, $idUser){
    $achatAttentes = $bdd->query('SELECT P.nom_produit, P.prix_produit, A.date_proposition_achat FROM produits P JOIN proposition_achat A on P.id_produit = A.id_produit WHERE A.id_user = ('.$idUser.') AND validation_achat=0');
    return $achatAttentes;
}


function selectProduitAchatHistorique($bdd, $idUser){
    $achatAttentes = $bdd->query('SELECT P.nom_produit, P.prix_produit, A.date_proposition_achat FROM produits P JOIN proposition_achat A on P.id_produit = A.id_produit WHERE A.id_user = ('.$idUser.') AND validation_achat=1');
    return $achatAttentes;
}

function addPropositionAchat($bdd, $now, $idUser, $idProduit){

    $bdd->query('INSERT INTO proposition_achat(date_proposition_achat, validation_achat, id_user, id_produit) VALUES("'.$now.'",0,"'.$idUser.'","'.$idProduit.'")');

}

