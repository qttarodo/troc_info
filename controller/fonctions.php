<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 19/10/2018
 * Time: 19:39
 */


function getDataBase()
{
    $host = "localhost";
    $dbName = "final_troc_info";
    $login = "root";
    $password = "";
    try
    {
        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8', $login, $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        $bdd = null;
        die('Erreur : ' . $e->getMessage());

    }
    return $bdd;
}


function postVar($name)
{
    if (isset($_POST[$name]) && !empty($_POST[$name]))
    {
        return $_POST[$name];
    }
    return false;
}

function getVar($name)
{
    if (isset($_GET[$name]) && !empty($_GET[$name]))
    {
        return $_GET[$name];
    }
    return false;
}

function stringToInt($string)
{
    $string = (int) $string;
    return $string;
}
