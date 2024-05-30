<?php
    require(__DIR__.'/../models/Pokemon.php');

    $type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'plante';
    
    $pokemonList = getAllPokemonByType($type);
    
    require(__DIR__.'/../partials/header.php');
    require(__DIR__.'/../views/param/form.php');
    require(__DIR__.'/../partials/footer.php');