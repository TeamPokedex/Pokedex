<?php 

    $urlPokemons = 'https://pokebuildapi.fr/api/v1/pokemon';
    $urlTypes = 'https://pokebuildapi.fr/api/v1/types';

    $pokemonsType = file_get_contents($urlTypes);
    $pokemonsType = json_decode($responseTypes);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="d-md-none">
            
        </nav>
    </header>
    <div class="d-flex flex-wrap justify-content-around">
        <?php foreach ($pokemonsType as $pokemonType): ?>
            <div class="text-center card-type">
                <img src='<?= $pokemonType->image ?>'>
                <a href='<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>