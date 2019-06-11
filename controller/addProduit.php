<?php
require '../modal/produit.php';
require 'fonctions.php';

session_start();
$bdd = getDataBase();

function addImage($input_name){
    //Test si le fichier a bien été envoyé et qu'il n'y a pas d'erreur
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['error']==0)
    {
        //Test si le fichier n'est pas trop gros
        if ($_FILES[$input_name]['size'] <= 1000000)
        {
            //Test pour vérifier l'extension des fichiers
            $infosfichier = pathinfo($_FILES[$input_name]['name']);
            $extension_upload = $infosfichier['extension'];
            $exentions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if(in_array($extension_upload,$exentions_autorisees))
            {
                move_uploaded_file($_FILES[$input_name]['tmp_name'],'../img/' . basename($_FILES[$input_name]['name']));
                $image_produit = $_FILES[$input_name]['name'];
            }
        }


    }

    return $image_produit;
}


$image_produit = addImage("image_produit");
$etat_produit =  postVar("etat_produit");
$prix_produit = postVar("prix_produit");
$description_produit = postVar("description_produit");
$nom_produit= postVar("nom_produit");
$id_categorie = postVar("categorie");
$id_marque = postVar("marque");
$id_user = $_SESSION['id'];

addProduit($bdd,$etat_produit,$prix_produit, $description_produit, $nom_produit, $id_categorie, $id_marque, $id_user, $image_produit);

header("Location: ../view/ventes.php");