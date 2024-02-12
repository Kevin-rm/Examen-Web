<?php

function get_page_to_include($url_page)
{
    $valiny = '../';
    switch ($url_page) {
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
