<?php

require_once 'cueilleur.php';
require_once '../utils.php';

const INSERTION_DEPENSES_VIEW = '../../pages/layout/layout_2.php?page=insertion-depenses';

if (
    empty($_POST['date']) ||
    empty($_POST['categorie-depense']) ||
    empty($_POST['montant'])
)  redirect_with_error('Veuillez remplir tout le formulaire', INSERTION_DEPENSES_VIEW);

$date              = trim($_POST['date']);
$categorie_depense = trim($_POST['categorie-depense']);
$montant           = trim($_POST['montant']);

// Validation des données
if (!categorie_depense_exists($categorie_depense))
    redirect_with_error('Oups! quelque chose s\'est mal passé', INSERTION_DEPENSES_VIEW);

if ($montant <= 0) redirect_with_error('Le montant doit être strictement positif', INSERTION_DEPENSES_VIEW);

// Si tout s'est bien passé
add_depense($categorie_depense, $montant);
redirect();
