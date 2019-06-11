<?php
include "../fonctions.php";
include "../../modal/categories.php";


$bdd= getDataBase();
$idCat = getVar("idCat");
$nom =  postVar("nom_categorie");

updateCategorie($bdd,$nom,$idCat);


var_dump($bdd);
var_dump($idCat);
var_dump($nom);


header('Location: ../../view/admin/categoriesAdmin.php');