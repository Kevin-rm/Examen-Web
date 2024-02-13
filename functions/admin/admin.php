<?php

require_once '../../database/crud_operations.php';

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
        case 'list-variete-the':
            $valiny .= 'list_variete_the';
            break;
        case 'list-parcelle':
            $valiny .= 'list_parcelle';
            break;
        case 'list-cueilleur':
            $valiny .= 'list_cueilleur';
            break;
        case 'list-categorie-depense':
            $valiny .= 'list_categorie_depense';
            break;
        default:
            break;
    }

    return $valiny . '.php';
}

function add_cueilleur($nom , $pseudo, $genre, $date_de_naissance, $mot_de_passe)
{
    $data= [
        "nom"            => $nom,
        "pseudo"         => $pseudo,
        "genre"          => $genre,
        "date_naissance" => $date_de_naissance,
        "mot_de_passe"   => hash('sha256', $mot_de_passe)
    ];
    return add(null,'the_membre',$data );
}

function add_categorie_depense($categorie)
{
    $data= [
        "categorie"=>$categorie
    ];
    return add(null,'the_categorie_depense',$data );
}

function add_parcelle($surface)
{
    $data=
        [
            "surface"=>$surface,
        ];
    return add(null,'the_parcelle',$data );
}

function get_all_variete_the()
{
    return findAll(null,'the_variete_the');
}

function get_all_parcelle()
{
    return findAll(null,'the_parcelle');
}

function get_all_membre()
{
    return findAll(null,'the_membre');
}

function get_all_categorie_depense()
{
    return findAll(null,'the_categorie_depense');
}
// Partie 2/3


