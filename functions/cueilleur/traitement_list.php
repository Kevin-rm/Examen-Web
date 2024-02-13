<?php

session_start();

require_once 'cueilleur.php';
require_once '../utils.php';
//display_var($_POST);

$response = [
    'message' => '',
    'data'    => []
];
if (empty($_POST['date-min']) || empty($_POST['date-max']))
    $response['message'] = 'Oups! Quelque chose s\'est mal passé';
else {
    $date_min = trim($_POST['date-min']);
    $date_max = trim($_POST['date-max']);

    if ($date_min > $date_max)
        $response['message'] = 'La date de début doit être inférieure ou égale à date de fin';
    else { // Mety
        $response['data']['poids_total_cueillette'] = get_poids_total_cueillette($_SESSION['membre']->id, $date_min, $date_max);
    }
}

header('Content-Type: application/json');
echo json_encode($response);