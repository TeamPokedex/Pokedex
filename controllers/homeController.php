<?php 
    
    require(__DIR__.'/../models/Pokemon.php');

    // $type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'plante';
    
    $pokemonsType = getAllPokemonTypes();
    
    require(__DIR__.'/../partials/header.php');
    require(__DIR__.'/../views/home.php');
    require(__DIR__.'/../partials/footer.php');