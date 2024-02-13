<?php

require_once 'cueilleur.php';
include_once '../utils.php';

$response = '';
if (
    empty($_POST['date']) ||
    empty($_POST['parcelle']) ||
    $_POST['parcelle'] === 'Choix' ||
    empty($_POST['poids-cueilli']) ||
    empty($_POST['cueilleur'])
)  $response = 'Veuillez remplir tout le formulaire';
else {
    $date              = trim($_POST['date']);
    $parcelle          = trim($_POST['parcelle']);
    $poids_cueilli     = trim($_POST['poids-cueilli']);
    $cueilleur         = trim($_POST['cueilleur']);

    // Vérification du poids_cueilli

    //add_cueillette($cueilleur, $parcelle, $poids_cueilli, $date);
    $response = 'Insertion de cueillette réussie';
}

header('Content-type: Text/plain');
echo $response;
