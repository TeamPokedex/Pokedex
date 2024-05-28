<?php 

    $urlPokemons = 'https://pokebuildapi.fr/api/v1/pokemon';
    $urlTypes = 'https://pokebuildapi.fr/api/v1/types';

    $pokemonsType = file_get_contents($urlTypes);
    $pokemonsType = json_decode($pokemonsType);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <title>POKEDEX</title>
</head>
<body>
    <header>
        <nav class="d-xl-none d-flex justify-content-around align-items-center py-3">
            <div class="text-start w-50 mx-3">
                <i class="fa-solid fa-bars fs-2"></i>
            </div>
            <div class="w-50 d-flex justify-content-end text-center">
                <div class="mx-3">
                    <i class="fa-solid fa-heart fs-4"></i>
                    <p class="m-0 fs-12 text-light">Favoris</p>
                </div>
                <div class="mx-3">
                    <i class="fa-solid fa-user fs-4 mx-3"></i>
                    <p class="m-0 fs-12 text-light">Profil</p>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="w-100 text-center">
            <img src="public/assets/img/titlePokemon.png" class="" alt="">
        </div>
    </main>

    <div class="d-flex flex-wrap justify-content-around">
        <?php foreach ($pokemonsType as $pokemonType): ?>
            <div class="text-center card-type">
                <img src='<?= $pokemonType->image ?>'>
                <a href='<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
            </div>
        <?php endforeach; ?>
    </div>
    <script src="public/assets/js/script.js"></script>
</body>
</html>