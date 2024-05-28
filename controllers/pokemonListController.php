<?php
$pokemonApiUrl = "https://pokebuildapi.fr/api/v1/pokemon/limit/100";

if(isset($_GET["type"]) && !empty($_GET["type"]))
{
    $pokemonApiUrl = "https://pokebuildapi.fr/api/v1/pokemon/type/".htmlspecialchars($_GET["type"]);
}

$pokemonList = file_get_contents($pokemonApiUrl);
$pokemonListDecode = json_decode($pokemonList);

require('../views/pokemon/list.php');