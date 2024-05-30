<?php

require(__DIR__ . '/../models/Pokemon.php');
$pokemonId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$pokemon = getPokemonById($pokemonId);

require(__DIR__ . '/../partials/header.php');
require(__DIR__ . '/../views/pokemon/details.php');
require(__DIR__ . '/../partials/footer.php');
