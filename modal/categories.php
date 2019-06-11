<?php


function selectAllCategories($bdd)
{
$categories = $bdd->query('SELECT nom_categorie, id_categorie FROM categorie');
return $categories;
}

function deleteCategorie($bdd, $id_cat)
{

    $bdd->query('DELETE FROM categorie WHERE id_categorie = "'.$id_cat.'"');

}

function selectCategorieId($bdd,$id){
    $categorie = $bdd->query('SELECT * FROM categorie WHERE id_categorie = "'.$id.'" ');
    return $categorie;
}

function updateCategorie($bdd, $nom, $id){
    $bdd->query('UPDATE categorie SET nom_categorie = "'.$nom.'" WHERE id_categorie = "'.$id.'"');
}

function addCategorie($bdd,$nom){
    $bdd->query('INSERT into categorie(nom_categorie) VALUES("'.$nom.'")');
}