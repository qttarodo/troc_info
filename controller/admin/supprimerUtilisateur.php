<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 23/11/2018
 * Time: 11:25
 */



require "../fonctions.php";
require "../../modal/utilisateur.php";

$bdd = getDataBase();
$idUser = getVar("idUser");

deleteUser($bdd,$idUser );



header("Location: ../../view/admin/utilisateursAdmin.php");