<?php

require_once 'admin.php';
include_once '../utils.php';

session_start();

$page = $_POST['page'];
$admin_layout = '../../pages/layout/layout_3.php?page=' . $page;

if (!isset($_POST['to-insert']))
    redirect_with_error('Oups! Une erreur est survenue', $admin_layout);

$to_insert = $_POST['to-insert'];

if ($to_insert === 'variete_the') {
    if (
        empty($_POST['nom']) ||
        empty($_POST['occupation']) ||
        empty($_POST['rendement'])
    ) redirect_with_error('Veuillez remplir tout le formulaire', $admin_layout);

    $nom = trim($_POST['nom']);
    $occupation = trim($_POST['occupation']);
    $rendement = trim($_POST['rendement']);

    if ($occupation <= 0) redirect_with_error('Occupation non valide', $admin_layout);
    if ($rendement <= 0 || !is_numeric($rendement))  redirect_with_error('Rendement invalide', $admin_layout);

    add_variete_the($nom, $occupation, $rendement);
    redirect_with_success('Insertion de variété avec succès', $admin_layout);

} elseif ($to_insert === 'parcelle') {
    if (!isset($_POST['surface']) || $_POST['surface'] === '')
        redirect_with_error('Veuillez remplir tout le formulaire', $admin_layout);

    $surface = $_POST['surface'];
    if ($surface <= 0) redirect_with_error('La surface doit être positive', $admin_layout);

    add_parcelle($surface);
    redirect_with_success('Insertion de parcelle réussie', $admin_layout);

} elseif ($to_insert === 'cueilleur') {
    if (
        empty($_POST['nom']) ||
        empty($_POST['genre']) ||
        empty($_POST['pseudo']) ||
        empty($_POST['date-naissance']) ||
        empty($_POST['password'])
    ) redirect_with_error('Veuillez remplir tout le formulaire', $admin_layout);

    $nom = trim($_POST['nom']);
    $genre = trim($_POST['genre']);
    $pseudo = trim($_POST['pseudo']);
    $date_naissance = trim($_POST['date-naissance']);
    $password = trim($_POST['password']);

    add_cueilleur($nom, $pseudo, $genre, $date_naissance, $password);
    redirect_with_success('Insertion de cueilleur réussie', $admin_layout);
} elseif ($to_insert === 'categorie-depense') {
    if (empty($_POST['nom'])) redirect_with_error('Veuillez remplir tout le formulaire', $admin_layout);

    $categorie = trim($_POST['nom']);
    add_categorie_depense($categorie);

    redirect_with_success('Insertion de catégorie de dépense réussie', $admin_layout);
}
