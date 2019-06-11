<?php

function rechercheParNom($bdd, $nom)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, prix_produit, description_produit, image_produit FROM produits WHERE nom_produit LIKE "%'.$nom.'%" AND validation_transaction = 0 AND disponibilite_produit = 1');
    if ($recherche->rowCount() == 0)
    {
        $recherche = $bdd->query('SELECT id_produit, nom_produit, description_produit, prix_produit, image_produit FROM produits WHERE CONCAT(nom_produit,description_produit) LIKE "%'.$nom.'%" AND validation_transaction = 0 AND disponibilite_produit = 1');
    }
    return $recherche;
}
function rechercheParCategorie($bdd, $categorie)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, id_categorie, prix_produit, description_produit, image_produit FROM produits WHERE id_categorie = ('.$categorie.')  AND validation_transaction = 0 AND disponibilite_produit = 1');
    return $recherche;

}
function rechercheParMarque($bdd, $marque)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, id_marque, prix_produit, description_produit, image_produit FROM produits WHERE id_marque = ('.$marque.')  AND validation_transaction = 0 AND disponibilite_produit = 1');
    return $recherche;

}
function rechercheParNomCategorie($bdd, $nom, $categorie)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, id_categorie, prix_produit, description_produit, image_produit FROM produits WHERE nom_produit LIKE "%'.$nom.'%" AND id_categorie = ('.$categorie.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    if ($recherche->rowCount() == 0)
    {
        $recherche = $bdd->query('SELECT id_produit, nom_produit, description_produit, prix_produit, image_produit FROM produits WHERE CONCAT(nom_produit,description_produit) LIKE "%'.$nom.'%" AND id_categorie = ('.$categorie.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    }
    return $recherche;

}
function rechercheParNomMarque($bdd, $nom, $marque)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, id_marque, prix_produit, description_produit, image_produit FROM produits WHERE nom_produit LIKE "%'.$nom.'%" AND id_marque = ('.$marque.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    if ($recherche->rowCount() == 0)
    {
        $recherche = $bdd->query('SELECT id_produit, nom_produit, description_produit, prix_produit, image_produit FROM produits WHERE CONCAT(nom_produit,description_produit) LIKE "%'.$nom.'%" AND id_marque = ('.$marque.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    }
    return $recherche;

}
function rechercheParCategorieMarque($bdd, $categorie, $marque)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, id_categorie, id_marque, prix_produit, description_produit, image_produit FROM produits WHERE id_categorie = ('.$categorie.') AND id_marque = ('.$marque.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    return $recherche;


}
function rechercheParNomMarqueCategorie($bdd, $nom, $marque, $categorie)
{
    $recherche = $bdd->query('SELECT id_produit, nom_produit, id_categorie, id_marque, prix_produit, description_produit, image_produit FROM produits WHERE nom_produit LIKE "%'.$nom.'%" AND id_categorie = ('.$categorie.') AND id_marque = ('.$marque.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    if ($recherche->rowCount() == 0)
    {
        $recherche = $bdd->query('SELECT id_produit, nom_produit, description_produit, prix_produit, image_produit FROM produits WHERE CONCAT(nom_produit,description_produit) LIKE "%'.$nom.'%" AND id_categorie = ('.$categorie.') AND id_marque = ('.$marque.') AND validation_transaction = 0 AND disponibilite_produit = 1');
    }
    return $recherche;

}

