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
