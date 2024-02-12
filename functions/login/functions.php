<?php

require_once '../../database/crud_operations.php';
require_once '../utils.php';

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
    );
}

display_var(get_membre_by_pseudo('johnny'));
