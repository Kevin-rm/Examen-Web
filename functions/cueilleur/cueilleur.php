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
        case 'list-with-filters':
            $valiny .= 'list_with_date_filters';
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
    return !empty(
        findWithFilters(
            null,
            'the_categorie_depense',
            "id = $id_categorie_depense"
        )[0]
    );
}

function add_depense($id_cueilleur, $id_categorie_depense, $montant, $date)
{
    $data= [
        'id_cueilleur'         => $id_cueilleur,
        'id_categorie_depense' => $id_categorie_depense,
        'montant'              => $montant,
        'date'                 => $date
    ];
    return add(null,'the_depense', $data);
}

function add_cueillette($id_cueilleur, $id_parcelle, $poids_cueilli, $date)
{
    $data= [
        'id_cueilleur'  => $id_cueilleur,
        'id_parcelle'   => $id_parcelle,
        'poids_cueilli' => $poids_cueilli,
        'date'          => $date
    ];
    return add(null, 'the_cueillette', $data);
}

// Poids total cueillette entre 2 dates
function get_poids_total_cueillette($id_cueilleur, $date_min, $date_max)
{
    $query = "SELECT SUM(poids_cueilli) AS value FROM the_cueillette " .
             "WHERE date BETWEEN '$date_min' AND '$date_max' " .
             "AND id_cueilleur = $id_cueilleur";

    return selectFromSQLRaw(null, $query)[0]->value;
}

function get_cout_revient($id_cueilleur, $date_min, $date_max)
{
    $query = "SELECT SUM(montant) AS value FROM the_depense " .
             "WHERE date BETWEEN '$date_min' AND '$date_max' " .
             "AND id_cueilleur = $id_cueilleur";

    $depense_total          = selectFromSQLRaw(null, $query)[0]->value;
    $poids_total_cueillette = get_poids_total_cueillette($id_cueilleur, $date_min, $date_max);

    if ($poids_total_cueillette === 0) return 0;

    return $depense_total / $poids_total_cueillette;
}
