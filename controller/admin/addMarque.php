<?php
require "../fonctions.php";
require "../../modal/marques.php";

$nom = postVar("nom_marque");
$bdd = getDataBase();

addMarque($bdd,$nom);

header('Location: ../../view/admin/marquesAdmin.php');