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

function get_page_to_include($page)
{
    $valiny = '../admin/';
    switch ($page) {
        case 'insertion-variete-the':
            $valiny .= 'insertion_variete_the';
            break;
        case 'insertion-parcelle':
            $valiny .= 'insertion_parcelle';
            break;
        case 'insertion-cueilleur':
            $valiny .= 'insertion_cueilleur';
            break;
        case 'insertion-categorie-depense':
            $valiny .= 'insertion_categorie_depense';
            break;
        default:
            break;
    }

    return $valiny . '.php';
}


// Partie 2/3


