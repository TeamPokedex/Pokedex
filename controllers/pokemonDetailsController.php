<?php

require('../models/Pokemon.php');
$pokemonId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$pokemon = getPokemonById($pokemonId);

require('../partials/header.php');
require('../views/pokemon/details.php');
require('../partials/footer.php');