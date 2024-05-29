<?php

require(__DIR__.'/../models/Pokemon.php');

$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'plante';

$pokemonListDecode = getAllPokemonByType($type);

require(__DIR__.'/../partials/header.php');
require(__DIR__.'/../views/pokemon/list.php');
require(__DIR__.'/../partials/footer.php');
