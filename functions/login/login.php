<?php
include ("../../database/db_connector.php");

function login($nom_table,$email,$mot_de_passe)
{
    $mot_de_passe = hash('sha1', $mot_de_passe);
    $requete = "SELECT * FROM {$nom_table}";
    $stmt = get_mysql_connection()->prepare($requete);
    $stmt->execute();
 
    // Récupération des résultats
    while ($data = $stmt->fetch(PDO::FETCH_ASSOC))        
    {
        if($email !=$data['email'] || $mot_de_passe !=$data['mot$mot_de_passe'])
        {
            $erreur='veuillez reessayer a nouveau';
            header("Location:#?erreur=".$erreur);
        }
        else 
        {
            header("Location:#");
        }
    }
}

