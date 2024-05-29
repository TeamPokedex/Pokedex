<?php

//require('./models/Type.php');
require('./models/Pokemon.php');

//$types = getAllTypes();
$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS);

// if(!isExistingType($type)) {
//     // return 404
// }

$pokemonListDecode = getAllPokemonByType($type ?? 'plante');

require('./views/pokemon/list.php');
