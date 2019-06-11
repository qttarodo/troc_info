
<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 16/11/2018
 * Time: 13:59
 */

require "fonctions.php";
require "../modal/produit.php";
require "../modal/ventes.php";

$bdd = getDataBase();
$idProduitt = getVar("idProduit");

deleteProduit($bdd, $idProduitt);



header("Location: ../view/ventes.php");