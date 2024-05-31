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

    <main class="vh-100">
        <div class="text-center mt-5">
            <img class="pika" src="./public/assets/img/pika404.png" alt="Page non trouvée - ERREUR 404">
            <div class="fontError">
                <div>404</div>
                <div class="fs-2">ERREUR</div>
            </div>
            <p class="open-sans-regular fs-3">Pika...Pika?</p>
            <div class="open-sans-light fs-6">
                <p> Il semble que Pikachu ne trouve pas cette page.</p>
                <div>Peut-être que vous avez utilisé une attaque de type "Oubli"? </div>
                <div class="mb-3">Retournez à l'<a href="index.php">accueil</a> pour continuer votre aventure !</div>
            </div>
        </div>
    </main>



    <?php require_once 'partials/footer.php'; ?>

    <script src="public/assets/js/script.js"></script>
    <script src="public/assets/js/navbar.js"></script>
</body>

</html>