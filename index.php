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

// Liste des icônes disponibles
$icons = [
    "IconBulbizare.png",
    "IconCarapuce.png",
    "IconChenipan.png",
    "IconPika.png",
    "IconRatata.png",
    "IconRondoudou.png",
    "IconRoucoul.png",
    "IconSalameche.png"

];

// Initialiser les variables
$currentName = '';
$currentIcon = '';
$currentMode = 'light';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et sécuriser les données du formulaire
    $currentName = isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : '';
    $currentIcon = isset($_POST['icon']) ? htmlspecialchars($_POST['icon']) : '';
    $currentMode = isset($_POST['mode']) && $_POST['mode'] == 'on' ? 'dark' : 'light';

    // Cookies
    setcookie('pseudo', $currentName, time() + (30 * 24 * 60 * 60), "/");
    setcookie('icon', $currentIcon, time() + (30 * 24 * 60 * 60), "/");
    setcookie('mode', $currentMode, time() + (30 * 24 * 60 * 60), "/");

    // Mettre à jour les variables
    $_COOKIE['pseudo'] = $currentName;
    $_COOKIE['icon'] = $currentIcon;
    $_COOKIE['mode'] = $currentMode;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
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
            
            <p class="position-relative w-25">
                <input type="text" placeholder="ex : pikachu" class="form-control">
                    <a href="https://www.google.com" class="fa-solid text-secondary text-decoration-none search-bar-menu position-absolute fa-search end-0 me-2 ps-2"></a>
                </input>
            </p>
            
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

        <div class="d-flex flex-wrap justify-content-center mx-0 mx-xl-5 my-5 container-list-pokemon">
            <p class="w-100 text-center mt-5 mb-5 fs-5">Classe la liste les Pokémon par type :</p><br>
            <?php foreach ($pokemonsType as $pokemonType): ?>
                <div class="text-center card-type mb-3 d-flex flex-wrap">
                    <button class="btn border">
                        <img class="w-75" src='<?= $pokemonType->image ?>'>
                        <a class="fs-5"href='<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="d-none d-xl-flex my-5">
            <div class="container-pokeball text-center w-50">
                <img src="public/assets/img/pokeball.png" alt="" class="img-pokeball">
            </div>
            
            <p class="container-sacha text-end w-50 pe-5">
                <img src="public/assets/img/sacha.webp" alt="">
            </p>
        </div>

    </main>

    <?php require_once 'partials/footer.php'; ?>

    <script src="public/assets/js/script.js"></script>
    <script src="public/assets/js/navbar.js"></script>
=======
    <title>Paramètres</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/style.css">


</head>

<body>
    <div class="text-center">
        <img src="./public/assets/img/title/parametres.png" alt="Parametres" class="title-image">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data" novalidate>
                            <div class="form-group fw-semibold mb-4">
                                <label for="pseudo">Nom :</label>
                                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Choisissez un pseudo..." required>
                            </div>

                            <div class="form-group fw-semibold mb-4">
                                <label for="icon">Choisissez une icône :</label>
                                <div id="icon-options" class="d-flex justify-content-around flex-wrap">
                                    <?php foreach ($icons as $icon) : ?>
                                        <div class="iconContenair">
                                            <img src="public/assets/img/iconeUtilisateur/<?= $icon; ?>" alt="<?= $icon; ?>" class="icon-option <?php if ($icon == $currentIcon) echo 'selected'; ?>" data-icon="<?= $icon; ?>" width="50">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <input type="hidden" name="icon" id="selected-icon" value="<?= $currentIcon; ?>">
                            </div>

                            <div class="form-group fw-semibold mb-4">
                                <label>Choisissez le mode du site :</label>
                                <div class="d-flex justify-content-around align-items-center">
                                    <span class="mode-label">Light Mode</span>
                                    <input type="checkbox" id="switch" name="mode" <?= $currentMode == 'dark' ? 'checked' : ''; ?>>
                                    <label for="switch" class="toggle-label">Toggle</label>
                                    <span class="mode-label">Dark Mode</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning btn-block fw-bold">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
>>>>>>> 468dbc8d6087006827357a09c1ad3653d185d1cb
</body>

</html>
require('./controllers/typeListController.php');
