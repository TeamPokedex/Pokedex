<?php

function getAllPokemonByType($type) {
    $url = 'https://pokebuildapi.fr/api/v1/pokemon/type/';
    $pokemonApiUrl = $url . $type;
    $pokemonList = file_get_contents($pokemonApiUrl);
    $result = json_decode($pokemonList);
    return $result;
}

function getPokemonById($id) {
    $url = 'https://pokebuildapi.fr/api/v1/pokemon/';
    $url = $url . $id;
    $pokemonList = file_get_contents($url);
    $result = json_decode($pokemonList);
    return $result;
}

function getAllPokemonTypes(){
    $url = 'https://pokebuildapi.fr/api/v1/types';
    $pokemonList = file_get_contents($url);
    $result = json_decode($pokemonList);
    return $result;
}