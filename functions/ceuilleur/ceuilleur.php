<?php 
include ("../../database/crud_operations.php");
require_once("../utils.php");

//ajouter ceuilleur 
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

//ajouter depense 
function add_depense($id_categorie_depense,$montant)
{
    $data=
    [
        "id_categorie_depense"=$id_categorie_depense,
        "montant"=$montant
    ]
    return add(null,'depense',$ata );
}
