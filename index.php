<?php

$urlPokemons = 'https://pokebuildapi.fr/api/v1/pokemon';
$urlTypes = 'https://pokebuildapi.fr/api/v1/types';

$pokemonsType = file_get_contents($urlTypes);
$pokemonsType = json_decode($pokemonsType);

switch (!empty($_GET['type'])) {
    case "":
        break;
    case "":
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>POKEDEX</title>
</head>

<body>
    <header>
        <nav class="d-xl-none d-flex justify-content-around align-items-center py-3">
            <div class="text-start w-50 mx-3">
                <i class="fa-solid fa-bars fs-2" id="icon-menu"></i>
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
            <div class="d-xl-none d-none mobile-nav-menu position-absolute start-0">
                <ul class="my-2">
                    <li class="mb-3 text-light">
                        <p>Accueil</p>
                    </li>
                    <li class="mb-3 text-light">
                        <p>Pokédex</p>
                    </li>
                    <li class="mb-3 text-light">
                        <p>Paramètres</p>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="d-none d-xl-flex justify-content-between align-items-center">
            <div class="menu-image py-1">
                <img src="public/assets/img/logoPokeworld.png" alt="">
            </div>
            <input type="text" placeholder="rechercher un pokemon via son NOM ou ID" class="form-control w-25">
            <p class="text-light fw-bold">ACCUEIL</p>
            <p class="text-light fw-bold">POKEDEX</p>
            <div class="d-flex flex-wrap justify-content-end">
                <div class="mx-3 text-center">
                    <i class="fa-solid fa-heart fs-2"></i>
                    <p class="m-0 fs-12 text-light">Favoris</p>
                </div>
                <div class="mx-3 text-center">
                    <i class="fa-solid fa-heart fs-2"></i>
                    <p class="m-0 fs-12 text-light">Profil</p>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="w-100 text-center my-5 d-xl-none">
            <img src="public/assets/img/titlePokemon.png" class="" alt="">
        </div>

        <form class="d-flex d-xl-none justify-content-center my-5 mx-auto text-center" role="search">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="ex: fée" aria-label="Search">
                <button class="btn btn-pokemon" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </div>
        </form>

        <div class="d-flex flex-wrap justify-content-center mx-0 mx-xl-5 my-5">
            <p class="w-100 text-center mt-5 mb-5 fs-4">Classe la liste les Pokémon par type :</p><br>
            <?php foreach ($pokemonsType as $pokemonType): ?>
                <div class="text-center card-type mb-3 d-flex">
                    <button class="btn border">
                        <img class="w-50" src='<?= $pokemonType->image ?>'>
                        <a href='<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="position-absolute end-50 pokeball">
            <img src="public/assets/img/pokeball.png" alt="">
        </div>
        
        <div class="position-absolute end-0">
            <img src="public/assets/img/sacha.webp" alt="">
        </div>

    </main>

    <div class="d-flex flex-wrap justify-content-around">
        <?php foreach ($pokemonsType as $pokemonType) : ?>
            <div class="text-center card-type">
                <img src='<?= $pokemonType->image ?>'>
                <a href='<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
            </div>
        <?php endforeach; ?>
    </div>

    <?php require_once 'partials/footer.php'; ?>

    <script src="public/assets/js/script.js"></script>
    <script src="public/assets/js/navbar.js"></script>
</body>

</html>