<?php

require_once '../../database/crud_operations.php';

function get_page_to_include($page)
{
    $valiny = '../';
    switch ($page) {
        case 'insertion-cueillette':
            $valiny .= 'insert_cueillete';
            break;
        case 'insertion-depenses':
            $valiny .= 'insert_depenses';
            break;
        default:
            $valiny = '';
            break;
    }

    return $valiny . '.php';
}

function get_all_parcelle()
{
    return findAll(null, 'the_parcelle');
}

function get_all_categorie_depense()
{
    return findAll(null, 'the_categorie_depense');
}

function format_parcelle($parcelle)
{
    return "N° parcelle : $parcelle->id. " . "Surface : $parcelle->surface ha";
}

function categorie_depense_exists($id_categorie_depense)
{
    return empty(
        findWithFilters(
            null,
            'the_categorie_depense',
            "id = $id_categorie_depense"
        )[0]
    );
}

function add_depense($id_categorie_depense, $montant)
{
    $data= [
        "id_categorie_depense" => $id_categorie_depense,
        "montant"              => $montant
    ];
    return add(null,'depense', $data);
}

// Poids total cueillette entre 2 dates
function get_poids_total_cueillette($id_cueilleur, $date_min, $date_max)
{
    $query = "SELECT SUM(poids_cueilli) AS value FROM the_cueillette " .
             "WHERE date > '$date_min' AND date < '$date_max' " .
             "AND id_cueilleur = $id_cueilleur";
    return selectFromSQLRaw(null, $query)[0];
}
