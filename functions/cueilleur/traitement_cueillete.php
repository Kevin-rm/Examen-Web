<?php

require_once 'cueilleur.php';
include_once '../utils.php';

$response = '';
if (
    empty($_POST['date']) ||
    empty($_POST['parcelle']) ||
    $_POST['parcelle'] === 'Choix' ||
    !isset($_POST['poids-cueilli']) ||
    empty($_POST['cueilleur'])
)  $response = 'Veuillez remplir tout le formulaire';
else {
    $date              = trim($_POST['date']);
    $parcelle          = trim($_POST['parcelle']);
    $poids_cueilli     = trim($_POST['poids-cueilli']);
    $cueilleur         = trim($_POST['cueilleur']);

    if (!is_numeric($poids_cueilli) || $poids_cueilli <= 0) $response = 'Poids invalide';
    else {
        // Vérification du poids_cueilli
        if ($poids_cueilli > get_reste_poids_par_parcelle($parcelle, $date))
           $response = 'Poids supérieur au poids restant de la parcelle. ' .
                       "Poids entré : $poids_cueilli ." .
                       'Poids restant: ' . get_reste_poids_par_parcelle($parcelle, $date);
        else {
            add_cueillette($cueilleur, $date, $parcelle, $poids_cueilli);
            $response = 'Insertion de cueillette réussie';
        }
    }
}

header('Content-type: Text/plain');
echo $response;
