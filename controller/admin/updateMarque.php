<?php
include "../fonctions.php";
include "../../modal/marques.php";


$bdd= getDataBase();
$idMarq = getVar("idMarq");
$nom =  postVar("nom_marque");

updateMarque($bdd,$nom,$idMarq);


var_dump($bdd);
var_dump($idMarq);
var_dump($nom);


header('Location: ../../view/admin/marquesAdmin.php');