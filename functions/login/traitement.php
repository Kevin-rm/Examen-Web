<?php

require_once 'functions.php';
include_once '../utils.php';

session_start();

$login_page = '../../pages/layout/layout_1.php';

// Absence du statut(admin ou cueilleur)
if (empty($_POST['statut']) || !in_array($_POST['statut'], ['cueilleur', 'admin'])) {
    $_SESSION['flash_messages'] = 'Oups! Une erreur est survenue';
    redirect("$login_page" . '?who=cueilleur');
}

$statut = $_POST['statut'];

// Formulaire vide
if (empty($_POST['pseudo']) || empty($_POST['password'])) {
    $_SESSION['flash_messages'] = 'Veuiller remplir tous les champ du formulaire';
    redirect("$login_page" . "?who=$statut");
}

$pseudo   = $_POST['pseudo'];
$password = $_POST['password'];

if ($statut === 'admin') {
    $admin = get_membre_by_pseudo($pseudo);
    if (empty($admin)) {
        $_SESSION['flash_messages'] = 'Administrateur introuvable';
        redirect("$login_page" . "?who=$statut");
    } elseif ($admin->mot_de_passe !== $password) {
        $_SESSION['flash_messages'] = 'Mot de passe incorrect';
        redirect("$login_page" . "?who=$statut");
    } else { // Redirige vers la page Admin
        // redirect('layout_2.php?page=insertion-cueillette');
    }
} else {
    $cueilleur = get_membre_by_pseudo($pseudo);
    if (empty($cueilleur)) {
        $_SESSION['flash_messages'] = 'Cueilleur introuvable';
        redirect("$login_page" . "?who=$statut");
    } elseif ($cueilleur->mot_de_passe !== ) {

    } else { // Redirige vers la page de cueilleur
        $_SESSION['membre'] = $cueilleur;
        redirect('../../pages/layout/layout_2.php?page=insertion-cueillette');
    }
}
