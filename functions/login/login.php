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




