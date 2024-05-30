<!DOCTYPE html>
<html lang="fr">

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
                <img src="/public/assets/img/logoPokeworld.png" alt="">
            </div>

            <p class="position-relative w-25">
                <input type="text" placeholder="ex : pikachu" class="form-control input-search">
                <a class="fa-solid text-secondary text-decoration-none search-bar-menu position-absolute fa-search end-0 me-2 ps-2"></a>
                </input>
            </p>

            <a href="/" class="text-light fw-bold">ACCUEIL</a>
            <a href="" class="text-light fw-bold">POKEDEX</a>
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