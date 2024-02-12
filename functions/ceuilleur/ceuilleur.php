<?php 
include ("../../database/crud_operations.php");
//require_once("../utils.php");

//ajouter ceuilleur 
function add_ceuilleur($nom,$genre,$date_de_naissance,$mot_de_passe)
{
    $data=
    [
        "nom"=>$nom,
        "genre"=>$genre,
        "date_naissance"=>$date_de_naissance,
        "mot_de_passe"=>hash('sha256', $mot_de_passe)
    ];
    return add(null,'ceuilleur',$data );
}
//ajouter depense 
function add_depense($id_categorie_depense,$montant)
{
    $data=
    [
        "id_categorie_depense"=>$id_categorie_depense,
        "montant"=>$montant
    ];
    return add(null,'depense',$ata );
}
//poids total ceuillete
function get_total_weight($ceuilleur)
{
    try {
        $requete = "SELECT SUM(poids_ceuilli) AS total_weight FROM ceuillette WHERE choix_ceuilleur = :ceuilleur ";
        $stmt = get_mysql_connection()->prepare($requete);
        $stmt->bindParam(':ceuilleur', $ceuilleur, PDO::PARAM_STR);
        $stmt->execute();
        
        // Récupération du résultat
        $total_weight = $stmt->fetchColumn();
        
        return $total_weight !== false ? $total_weight : 0; // Retourne 0 si aucun résultat n'est trouvé
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}




//poids restant sur le parcelle



//cout de revient en kg