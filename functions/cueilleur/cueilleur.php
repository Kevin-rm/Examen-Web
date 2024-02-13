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

// Recupérer le poids par parcelle en une date donnee
function get_poids_ceuilli_parcelle_by_date($id_parcelle ,$date)
{
    $query = "SELECT SUM(poids_cueilli) AS value FROM the_cueillette " .
             "WHERE EXTRACT(MONTH FROM date) =  EXTRACT(MONTH FROM '$date') ".
             "AND id_parcelle = $id_parcelle";
    return selectFromSQLRaw(null, $query)[0]->value;

}

// Total par parcelle
function get_total_rendement_par_parcelle($id_parcelle)
{
    $query = "SELECT SUM(rendement * occupation) AS value FROM the_v_rel_variete_the_parcelle " .
             "WHERE id_parcelle = $id_parcelle";
    return selectFromSQLRaw(null, $query)[0]->value;
}

// Restant poids sur parcelle
function get_reste_poids_par_parcelle($id_parcelle, $date)
{
    return get_total_rendement_par_parcelle($id_parcelle) - get_poids_ceuilli_parcelle_by_date($id_parcelle, $date);
}

function add_cueillette($id_cueilleur, $date, $parcelle, $poids_cueilli)
{
    $connection = get_mysql_connection();
    $data= [
        'id_cueilleur'             => $id_cueilleur,
        'date'                     => $date,
        'id_parcelle'              => $parcelle,
        'poids_cueilli'            => $poids_cueilli,
        'bonus'                    => findWithFilters($connection, "the_configuration",null ,"bonus")[0]->bonus,
        'mallus'                   => findWithFilters($connection, "the_configuration",null ,"mallus")[0]->mallus,
        'poids_minimal_journalier' => findWithFilters($connection, 'the_configuration', null, 'poids_minimal_journalier')[0]->poids_minimal_journalier
    ];
    return add($connection,'the_cueillette', $data);
}
