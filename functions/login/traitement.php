<?php

require_once 'login.php';
include_once '../utils.php';

session_start();

const LOGIN_PAGE = '../../pages/layout/layout_1.php';

// Absence du statut(admin ou cueilleur)
if (empty($_POST['statut']) || !in_array($_POST['statut'], ['cueilleur', 'admin']))
    redirect_with_error('Oups! Une erreur est survenue', LOGIN_PAGE . "?who=cueilleur");

$statut = trim($_POST['statut']);

// Formulaire vide
if (empty($_POST['pseudo']) || empty($_POST['password']))
    redirect_with_error('Veuiller remplir tous les champ du formulaire', LOGIN_PAGE . "?who=$statut");

$pseudo   = trim($_POST['pseudo']);
$password = trim($_POST['password']);

$membre = get_membre_by_pseudo($pseudo);
if ($statut === 'admin') {
    if (empty($membre) || !verify_password($password, $membre->mot_de_passe) || $membre->is_admin !== 1)
        redirect_with_error(
            'Administrateur introuvable ou mot de passe incorrect',
            LOGIN_PAGE . "?who=$statut"
        );
    else { // Redirige vers la page Admin
        $_SESSION['membre']   = $membre;
        $_SESSION['is_admin'] = true;
        redirect('../../pages/layout/layout_3.php?page=insertion-variete-the');
    }
} else {
    if (empty($membre) || !verify_password($password, $membre->mot_de_passe)) {
        redirect_with_error(
            'Cueilleur introuvable ou mot de passe incorrect',
            LOGIN_PAGE . "?who=$statut"
        );
    } else { // Redirige vers la page de cueilleur
        $_SESSION['membre'] = $membre;
        $_SESSION['is_admin'] = false;
        redirect('../../pages/layout/layout_2.php?page=insertion-cueillette');
    }
}
