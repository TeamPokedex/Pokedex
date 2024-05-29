<?php
$urlTypesPokemons = 'https://pokebuildapi.fr/api/v1/type';

$pokemonTypes = file_get_contents($urlTypesPokemons);

$pokemonTypesDecode = json_decode($pokemonTypes);
