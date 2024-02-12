<?php

require_once '../../database/crud_operations.php';
include_once '../utils.php';

/*
 * Ensembles des fonctions sur le login
 */

function get_admin_by_pseudo_and_password($pseudo, $password)
{
    return findWithFilters(
        null,
        'admin',
        "pseudo = '$pseudo' AND mot_de_passe = sha2('$password', 256)",
        null
    );
}

function get_cueilleur_by_pseudo_and_password($pseudo, $password)
{
    return findWithFilters(
        null,
        'cueilleur',
        "pseudo = '$pseudo' AND mot_de_passe = sha2('$password', 256)",
        null
    );
}
