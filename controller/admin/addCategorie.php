<?php
require "../fonctions.php";
require "../../modal/categories.php";

$nom = postVar("nom_categorie");
$bdd = getDataBase();

addCategorie($bdd,$nom);

header('Location: ../../view/admin/categoriesAdmin.php');