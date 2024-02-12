<?php

/**
 * Cette fonction permet de récupérer un objet de connexion PDO MySQL.
 *
 * Elle n'a pas de paramètres donc vous devez changer le bout de code au niveau des options par défaut et
 * y mettre vos informations de base de données MySQL.
 *
 * @return PDO Objet de connexion MySQL.
 */
function get_mysql_connection()
{
    // Options par défaut
    $host     = 'localhost';
    $port     = '3306';
    $db_name  = 'the';
    $user     = 'root';
    $password = 'paradis23';

    try {
        // Data source name
        $dsn = "mysql:host=$host;port=$port;dbname=$db_name";
        return new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'PDOException dans db_connector sur get_mysql_connection : ' . '<br/>' .
             $e->getMessage();
        die();
    }
}
