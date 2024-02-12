<?php

require_once 'login.php';
include_once '../utils.php';

session_start();

$login_page = 'pages/layout/layout_1.php';

// Absence du statut(admin ou cueilleur)
if (empty($_POST['statut']) || !in_array($_POST['statut'], ['cueilleur', 'admin'])) {
    $_SESSION['flash_message'] = 'Oups! Une erreur est survenue';
    header("Location : $login_page" . '?who=cueilleur');
}

$statut   = $_POST['statut'];

// Formulaire vide
if (empty($_POST['pseudo']) || !empty($_POST['password'])) {
    $_SESSION['flash_message'] = 'Veuiller remplir tout le formulaire';
    header("Location : $login_page" . "?who=$statut");
}

$pseudo   = $_POST['pseudo'];
$password = $_POST['password'];

if ($statut === 'admin') {
    $admin = get_admin_by_pseudo_and_password($pseudo, $password);
} else {
    $cueilleur = get_cueilleur_by_pseudo_and_password($pseudo, $password);
}
