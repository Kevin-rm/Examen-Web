<?php

// Partie 1/3
function add_variete_the($nom, $occupation, $rendement)
{
    $data= [
        'nom'        => $nom,
        'occupation' => $occupation,
        'rendement'  => $rendement
    ];
    return add(null,'the_variete_the', $data);
}

// Partie 2/3


