<?php

function getAllPokemonByType($type)
{
    $pokemonApiUrl = "https://pokebuildapi.fr/api/v1/pokemon/type/" . $type;
    $pokemonList = file_get_contents($pokemonApiUrl);
    $result = json_decode($pokemonList);
    return $result;
}
