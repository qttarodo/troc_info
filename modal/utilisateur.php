<?php


function addUtilisateur($bdd, $nom, $prenom, $adresse, $tel, $dateNaiss, $mail, $mdp){
    $bdd->query('INSERT INTO user(nom_user, prenom_user, adresse_user, naissance_user, mail_user, mdp_user, tel_user) VALUES("'.$nom.'","'.$prenom.'","'.$adresse.'","'.$dateNaiss.'", "'.$mail.'","'.$mdp.'","'.$tel.'")');
}

function selectUserId($bdd, $idUser){
    $user = $bdd->query('SELECT * FROM user WHERE id_user = "'.$idUser.'"');
    return $user;
}

function updateSoldeAchat($bdd, $idUser, $prix){
    $bdd->query('UPDATE user
SET solde_user = solde_user - "'.$prix.'" WHERE id_user = "'.$idUser.'"');

}

function updateSoldeVente($bdd, $idUser, $prix){
    $bdd->query('UPDATE user
SET solde_user = solde_user + "'.$prix.'" WHERE id_user = "'.$idUser.'"');
}

function updateUser($bdd,$id,$nom,$prenom, $adresse, $tel, $naiss, $mail, $mdp)
{
    $bdd->query('UPDATE user SET nom_user = "'.$nom.'", prenom_user = "'.$prenom.'", adresse_user = "'.$adresse.'", tel_user = "'.$tel.'", naissance_user = "'.$naiss.'", mail_user = "'.$mail.'", mdp_user = "'.$mdp.'" WHERE id_user = "'.$id.'"');

}

function crediterCompte($bdd, $credit, $idUser){
    $bdd->query('UPDATE user
SET solde_user = solde_user + "'.$credit.'" WHERE id_user = "'.$idUser.'"');
}

function testConnexion($bdd, $mail, $mdp) {
    $connexion = $bdd->query('SELECT id_user, nom_user, prenom_user, solde_user FROM user WHERE mail_user = "'.$mail.'" AND mdp_user = "'.$mdp.'"');
    return $connexion;
}

function selectAllUser($bdd){
    $user = $bdd->query('SELECT *FROM user');
    return $user;
}

function deleteUser($bdd, $id_user)
{
    $bdd->query('DELETE from user WHERE id_user = "'.$id_user.'"');

}
