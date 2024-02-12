<?php
include ("../../database/crud_operations.php");
require_once("../utils.php");

//crud variete_the
function add_variete_the($nom,$occupation,$rendement)
{
    $data=
    [
        "nom"=>$nom,
        "occupation"=>$occupation,
        "rendement"=>$rendement

    ];
    return add(null,'the_variete_the',$data );
}

function get_all_variete_the()
{
    return findAll(null,'the_variete_the');
}

function update_variete_the($id,$nom,$occupation,$rendement)
{
    $data=
    [
        "nom"=>$nom,
        "occupation"=>$occupation,
        "rendement"=>$rendement
    ];
    return update(null,'the_variete_the',$data,'id=$id');
}

function delete_variete_the($id)
{
    return delete(null,'the_variete_the','id=$id');
}

//crud parcelle
function add_parcelle($surface)
{
    $data=
    [
        "surface"=>$surface,
    ];
    return add(null,'the_parcelle',$data );
}

function get_all_parcelle()
{
    return findAll(null,'the_parcelle');
}

function update_parcelle($id,$surface)
{
    $data=
    [
        "surface"=>$surface
    ];
    return update(null,'the_parcelle',$data,'id=$id');
}

function delete_parcelle($id)
{
    return delete(null,'the_parcelle','id=$id');
}

//crud membre
function add_membre($nom,$pseudo,$genre,$date_de_naissance,$mot_de_passe)
{
    $data=
    [
        "nom"=>$nom,
        "pseudo"=>$pseudo,
        "genre"=>$genre,
        "date_naissance"=>$date_de_naissance,
        "mot_de_passe"=>hash('sha256', $mot_de_passe)
    ];
    return add(null,'the_membre',$data );
}

function get_all_membre()
{
    return findAll(null,'the_membre');
}

function update_membre($id,$nom,$pseudo,$genre,$date_de_naissance,$mot_de_passe)
{
    $data=
    [
        "nom"=>$nom,
        "pseudo"=>$pseudo,
        "genre"=>$genre,
        "date_naissance"=>$date_de_naissance,
        "mot_de_passe"=>hash('sha256', $mot_de_passe)
    ];
    return update(null,'the_membre',$data,'id=$id');
}

function delete_membre($id)
{
    return delete(null,'the_membre','id=$id');
}


//crud categorie depense 
function add_categorie_depense($categorie)
{
    $data=
    [
        "categorie"=>$categorie
    ];
    return add(null,'the_categorie_depense',$data );
}

function get_all_categorie_depense()
{
    return findAll(null,'the_categorie_depense');
}

function update_categorie_depense($id,$categorie)
{
    $data=
    [
        "categorie"=>$categorie
    ];
    return update(null,'the_categorie_depense',$data,'id=$id');
}

function delete_categorie_depense($id)
{
    return delete(null,'the_categorie_depense','id=$id');
}


//configuration salaire 
function add_depense($id,$montant)
{
    $data=
    [
        "id_categorie_depense"=>$id_categorie_depense,
        "montant"=>$montant
    ];
    return add(null,'the_depense',$data );
}

function get_all_depense()
{
    return findAll(null,'the_depense');
}
function update_depense($id,$categorie)
{
    $data=
    [
        "id_categorie_depense"=>$id_categorie_depense,
        "montant"=>$montant
    ];
    return update(null,'the_depense',$data,'id=$id');
}

function delete_depense($id)
{
    return delete(null,'the_depense','id=$id');
}

function get_salary($id_categorie)
{
    return findWithFilters(null, 'the_depense', 'id_catetgorie_depense=$id_categorie',null);
}
function update_salary($id_categorie,$montant)
{
    $data=
    [
        "montant"=>$montant
    ];
    return update(null,'the_depense',$data,'id_categorie_depense=$id_categorie_depense');
}




