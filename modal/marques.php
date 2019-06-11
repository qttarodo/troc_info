<?php


function selectAllMarques($bdd)
{
    $marques = $bdd->query('SELECT nom_marque, id_marque FROM marque');
    return $marques;
}

function deleteMarque($bdd, $idmarq)
{

    $bdd->query('DELETE FROM marque WHERE id_marque = "'.$idmarq.'"');

}

function updateMarque($bdd, $nom, $id){
    $bdd->query('UPDATE marque SET nom_marque = "'.$nom.'" WHERE id_marque = "'.$id.'"');
}


function selectMarqueId($bdd,$id){
    $marque = $bdd->query('SELECT * FROM marque WHERE id_marque = "'.$id.'" ');
    return $marque;
}

function addMarque($bdd,$nom){
    $bdd->query('INSERT into marque(nom_marque) VALUES("'.$nom.'")');
}