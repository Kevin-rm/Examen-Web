<?php
function login($nom_table,$email,$mot_de_passe)
{
    $mot_de_passe = hash('sha1', $mot_de_passe);
    $requetet="select * from '%s'";
    $requete=sprintf($requete,$nom_table);
    $result = mysqli_query(dbconnect(), $requete);
    while($data=mysqli_fetch_assoc($result))
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

