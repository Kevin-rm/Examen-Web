<?php

require_once '../../database/crud_operations.php';

/*
 * Ensembles des fonctions sur le login
 */
function get_membre_by_pseudo($pseudo)
{
    return findWithFilters(
        null,
        'the_membre',
        "pseudo = '$pseudo'",
        null
    )[0];
}

function verify_password($input_password, $actual_password)
{
    return hash('sha256', $input_password) === $actual_password;
}
