<?php
// if (isset($_GET["type"]) && !empty($_GET["type"])) {
// }

function getAllType()
{
    $pokemonTypesUrl = 'https://pokebuildapi.fr/api/v1/types';
    $result = json_decode(file_get_contents($pokemonTypesUrl));
    return $result;
}
