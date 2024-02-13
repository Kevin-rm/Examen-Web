<?php 
include ("../../database/crud_operations.php");
require_once("../utils.php");

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

//recup poids par parcel en une date donnee
function get_poids_ceuilli_parcelle_by_date($id_parcelle ,$date)
{
    $query="SELECT sum(poids_ceuilli) as value from the_ceuillette".
    "WHERE EXTRACT(MONTH FROM date_ceuillette)= EXTRACT(MONTH FROM '$date')".
    "AND choix_parcelle=$id_parcelle";
    return selectFromSQLRaw(null, $query)[0];

}

//total par parcel 
function get_total_rendement_par_parcelle($id)
{
    $query="SELECT sum(rendement) as value from the_v_rel_variete_the_parcelle ".
    "WHERE id_parcelle=$id";
    return selectFromSQLRaw(null, $query)[0];
}

//restant poids sur parcel
function get_reste_poids_par_parcelle($date,$id )
{
    $total_poids_parcelle=get_total_rendement_par_parcelle($id)->value;
    $poids_ceuilli_parcelle=get_poids_ceuilli_parcelle_by_date($id ,$date)->value;
    $poids_restant=$total_poids_parcelle-$poids_ceuilli_parcelle;
    return $poids_restant;
}

function get_poids_total_cueillette_par_mois( $date_min, $date_max)
{
    $query = "SELECT SUM(poids_cueilli) AS value FROM the_cueillette " .
            //  "WHERE date > '$date_min' AND date < '$date_max' " .
            "WHERE EXTRACT(MONTH FROM date_ceuillette) = EXTRACT(MONTH FROM '$date_max') ";
             
    return selectFromSQLRaw(null, $query)[0];
}
function get_rendement_par_parcelle($id)
{
    return findWithFilters(null, 'the_rendement_par_parcelles','id_parcelle=$id', "rendement");
}

function get_total_rendement()
{
    $query="SELECT SUM(rendement) as total_rendement  
    from the_rendement_par_parcelles";
    return selectFromSQLRaw(null, $query)[0];
}

function get_poids_restant($date_min , $date_max)
{
    $poids_total_global=get_total_rendement();
    $poids_par_mois=get_poids_total_cueillette_par_mois();

    $poids_restant=$poids_total_global-$poids_par_mois;
}
/
function cout_revient($id_cueilleur,$date_min,$date_max)
{
    $query = "SELECT SUM(montant) AS value FROM the_depense ".
             "WHERE date_depense between :date_min and :date_max ";
   
    $cout_total=selectFromSQLRaw(null, $query)[0];
    $poids_total=get_poids_total_cueillette($id_cueilleur,$date_min,$date_max);
    $cout_revient=$cout_total/$poids_total;
    
    return $cout_revient;
  
}

function get_ceuilleur_by_id($id)
{
    return findWithFilters(null,'the_membre',"id=$id","nom");
}
function add_ceuillette($date_ceuillette,$choix_parcelle,$poids_ceuilli)
{
    $rqt = findWithFilters($connection, "configuration",null ,"bonus");
    $sql = findWithFilters($connection, "configuration",null ,"mallus");
    $data=
    [
        "date_ceuillette"=>$date_ceuillette,
        "choix_parcelle"=>$choix_parcelle,
        "poids_ceuilli"=>$poids_ceuilli,
        "bonus"=>$rqt,
        "mallus"=>$sql
    ];
    return add(null,'the_ceuillette',$data );
}

//obtenir la liste des payements
function get_liste_payement($id_cueilleur,$date_min,$date_max)
{
    return findWithFilters(null, 'the_ceuillette', "date_ceuillette >='$date_min' and date_ceuillette<='$date_max' and id_cueilleur=$id_cueilleur","date_ceuillette","poids_ceuilli","bonus","mallus" );
}

//prendre salaire a inserer dans liste payement
function get_salaire($poids)
{
    $salaire_par_kg=findWithFilters(null, 'the_configuration',null,"salaire_cueilleur")->value;
    $salaire=$salaire_par_kg*$poids;
   return $salaire;
   
}







