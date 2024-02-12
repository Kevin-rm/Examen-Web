<?php

require_once 'login.php';
include_once '../utils.php';

session_start();

$login_page = '../../pages/layout/layout_1.php';

// Absence du statut(admin ou cueilleur)
if (empty($_POST['statut']) || !in_array($_POST['statut'], ['cueilleur', 'admin'])) {
    $_SESSION['flash_messages'] = 'Oups! Une erreur est survenue';
    redirect("$login_page" . '?who=cueilleur');
}

$statut   = $_POST['statut'];

// Formulaire vide
if (empty($_POST['pseudo']) || empty($_POST['password'])) {
    $_SESSION['flash_messages'] = 'Veuiller remplir tout le formulaire';
    redirect("$login_page" . "?who=$statut");
}

$pseudo   = $_POST['pseudo'];
$password = $_POST['password'];

if ($statut === 'admin') {
    $admin = get_admin_by_pseudo_and_password($pseudo, $password);
    if (empty($admin)) {
        $_SESSION['flash_messages'] = 'Administrateur introuvable. Vérifier votre pseudo ou votre mot de passe.';
        redirect("$login_page" . "?who=$statut");
    }
    else { // Redirige vers la page Admin
        // redirect('layout_2.php?page=insertion-cueillette');
    }
} else {
    $cueilleur = get_cueilleur_by_pseudo_and_password($pseudo, $password);
    if (empty($cueilleur)) {
        $_SESSION['flash_messages'] = 'Cueilleur introuvable. Vérifier votre pseudo ou votre mot de passe.';
        redirect("$login_page" . "?who=$statut");
    }
    else { // Redirige vers la page de cueilleur
        $_SESSION['cueilleur'] = $cueilleur;
        redirect('../../pages/layout/layout_2.php?page=insertion-cueillette');
    }
}
