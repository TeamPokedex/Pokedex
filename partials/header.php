<!DOCTYPE html>
<html lang="fr" data-theme="<?= $currentMode ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="/public/assets/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
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
                    <i class="fa-solid fa-heart fs-4 w-100"></i>
                    <a href="" class="m-0 fs-12 text-light">Favoris</a>
                </div>
                <div class="mx-3">
                    <i class="fa-solid fa-user fs-4 w-100"></i>
                    <a href="" class="m-0 fs-12 text-light">Profil</a>
                </div>
            </div>
            <div class="d-xl-none d-none mobile-nav-menu position-absolute start-0">
                <ul class="my-2">
                    <li class="mb-3">
                        <a class="text-light my-5" href="/">Accueil</a>
                    </li>
                    <li class="mb-3">
                        <a class="text-light my-5" href="">Pokédex</a>
                    </li>
                    <li class="mb-3">
                        <a class="text-light my-5" href="/?param">Paramètres</a>
                    </li>
                    <li class="mb-3">
                        <div class="position-relative">
                            <input type="text" placeholder="ex : pikachu" class="form-control input-search">
                            <a class="fa-solid text-secondary text-decoration-none search-bar-menu position-absolute fa-search me-2 ps-2"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="d-none d-xl-flex justify-content-between align-items-center">
            <div class="menu-image py-1">
                <img src="/public/assets/img/logoPokeworld.png" alt="">
            </div>

            <p class="position-relative w-25">
                <input type="text" placeholder="ex : pikachu" class="form-control input-search">
                <a class="fa-solid text-secondary text-decoration-none search-bar-menu position-absolute fa-search fa-search-md me-2"></a>
                </input>
            </p>

            <a href="/" class="text-light fw-bold">ACCUEIL</a>
            <a href="/?pokedex" class="text-light fw-bold">POKEDEX</a>
            <a href="/?favorites" class="text-light fw-bold">FAVORIS</a>
            <a href="/?param" class="text-light fw-bold">PARAMETRES</a>
            <div class="d-flex flex-wrap justify-content-end">
                <div class="mx-3 text-center">
                    <i class="fa-solid fa-heart fs-2 w-100"></i>
                    <a href="" class="m-0 fs-12 text-light">Favoris</a>
                </div>
                <div class="mx-3 text-center">
                    <i class="fa-solid fa-heart fs-2 w-100"></i>
                    <a href="" class="m-0 fs-12 text-light">Profil</a>
                </div>
            </div>
        </nav>
    </header>