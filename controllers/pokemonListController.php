<?php
// require('../views/pokemon/list.php');
require('./models/Pokemon.php');
$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS);
$pokemonListDecode = getAllPokemonByType($type);

require('./views/pokemon/list.php');
