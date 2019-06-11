<?php

require '../modal/recherche.php';

function testRecherche($bdd,$nom,$categorie,$marque)
{

    $recherche = selectAllProduitsDispo($bdd);


    if ($nom AND $categorie AND $marque){
        $recherche = rechercheParNomMarqueCategorie($bdd, $nom, $marque, $categorie);
    }
    if ($nom AND $categorie AND !$marque){
        $recherche = rechercheParNomCategorie($bdd, $nom, $categorie);

    }
    if ($nom AND !$categorie AND $marque){
        $recherche = rechercheParNomMarque($bdd, $nom, $marque);

    }
    if ($nom AND !$categorie AND !$marque){
        $recherche = rechercheParNom($bdd, $nom);

    }
    if (!$nom AND $categorie AND $marque){
        $recherche = rechercheParCategorieMarque($bdd, $categorie, $marque);

    }
    if (!$nom AND $categorie AND !$marque){
        $recherche = rechercheParCategorie($bdd, $categorie);

    }
    if (!$nom AND !$categorie AND $marque){
        $recherche = rechercheParMarque($bdd, $marque);

    }



    return $recherche;


}

