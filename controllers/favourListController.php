<?php
require(__DIR__.'/../models/Pokemon.php');
$favorites = getCookieArray("favorites");
$pokemonList = getPokemonByIds($favorites);

require(__DIR__.'/../partials/header.php');
require(__DIR__.'/../views/pokemon/list.php');
require(__DIR__.'/../partials/footer.php');