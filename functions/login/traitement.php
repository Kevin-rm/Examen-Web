<?php

require_once 'login.php';
include_once '../utils.php';

session_start();

const LOGIN_PAGE = '../../pages/layout/layout_1.php';

// Absence du statut(admin ou cueilleur)
if (empty($_POST['statut']) || !in_array($_POST['statut'], ['cueilleur', 'admin']))
    redirect_with_error('Oups! Une erreur est survenue', LOGIN_PAGE, 'cueilleur');

$statut = trim($_POST['statut']);

// Formulaire vide
if (empty($_POST['pseudo']) || empty($_POST['password']))
    redirect_with_error('Veuiller remplir tous les champ du formulaire', LOGIN_PAGE, $statut);

$pseudo   = trim($_POST['pseudo']);
$password = trim($_POST['password']);

if ($statut === 'admin') {
    $admin = get_membre_by_pseudo($pseudo);
    if (empty($admin) || !verify_password($password, $admin->mot_de_passe))
        redirect_with_error(
            'Administrateur introuvable ou mot de passe incorrect',
            LOGIN_PAGE,
            $statut
        );
    else { // Redirige vers la page Admin
        // redirect('layout_2.php?page=insertion-cueillette');
    }
} else {
    $cueilleur = get_membre_by_pseudo($pseudo);
    if (empty($cueilleur) || !verify_password($password, $cueilleur->mot_de_passe)) {
        redirect_with_error(
            'Cueilleur introuvable ou mot de passe incorrect',
            LOGIN_PAGE,
            $statut
        );
    } else { // Redirige vers la page de cueilleur
        $_SESSION['membre'] = $cueilleur;
        redirect('../../pages/layout/layout_2.php?page=insertion-cueillette');
    }
}
