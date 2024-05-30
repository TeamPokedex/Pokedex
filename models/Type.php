<?php
// if (isset($_GET["type"]) && !empty($_GET["type"])) {
// }

function getAllTypes()
{
    $pokemonTypesUrl = 'https://pokebuildapi.fr/api/v1/types';
    $result = json_decode(file_get_contents($pokemonTypesUrl));
    return $result;
}

function isExistingType($typeName)
{
    $types = getAllTypes();
    $result = array_filter($types, function($item) use ($typeName) {
        return $item->name === $typeName;
    });

    return count($result) > 0;
}

