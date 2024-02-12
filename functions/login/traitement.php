<?php

require_once 'login.php';
include_once '../utils.php';

//display_var($_POST);

// Formulaire vide
//if (empty($_POST['pseudo']) || !empty($_POST['password']))
  //  header('Location: ../../pages/layout/layout_1.php');

// Absence du statut(admin ou cueilleur)
if (empty($_POST['statut'])) {

}

$pseudo   = $_POST['pseudo'];
$password = $_POST['password'];
$statut   = $_POST['statut'];

if ($statut === 'admin') {
    $admin = get_admin_by_pseudo_and_password($pseudo, $password);

} else {
    $cueilleur = get_cueilleur_by_pseudo_and_password($pseudo, $password);
}
