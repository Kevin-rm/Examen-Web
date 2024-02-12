<?php
include ("../../database/crud_operations.php");
require_once("../utils.php");

function get_all_admin()
{
    return findAll(null,'admin');
}
function get_admin_by_id($id)
{
    return findWithFilters(null, 'admin', 'id=$id',null);
}
function get_cueilleur_by_id($id)
{
    return findWithFilters(null, 'cueilleur', 'id=$id',null);
} 

function add_admin($nom,$pseudo,$mot_de_passe)
{
    $data=
    [
        "nom"=>$nom,
        "pseudo"=>$pseudo,
        "mot_de_passe"=>hash('sha256', $mot_de_passe)
    ]
    return add(null,'admin',$data );
}

function add_ceuilleur($nom,$genre,$date_de_naissance,$mot_de_passe)
{
    $data=
    [
        "nom"=$nom,
        "genre"=$genre,
        "date_naissance"=$date_de_naissance,
        "mot_de_passe"=>hash('sha256', $mot_de_passe)

    ]
    return add(null,'ceuilleur',$ata );
}




