<?php
$urlAllPokemons = 'https://pokebuildapi.fr/api/v1/pokemon';

$pokemonList = file_get_contents($urlAllPokemons);

$pokemonListDecode = json_decode($pokemonList);
