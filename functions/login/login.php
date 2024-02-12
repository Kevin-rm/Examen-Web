<?php
include ("../../database/db_connector.php");

function get_admin_by_id($id)
{        
    $sql ="select * from admin where id = :id";
    
    $stmt = get_mysql_connection()->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    $name="";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    {
        $name = $row['nom'];
    }
    return $name;

}
