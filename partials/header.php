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

<body data-theme="<?= $currentMode ?>">
    <header>
        <nav class="d-xl-none d-flex justify-content-around align-items-center py-3">
            <div class="text-start w-50 mx-3">
                <i class="fa-solid fa-bars fs-2" id="icon-menu"></i>
            </div>
            <div class="w-50 d-flex justify-content-end text-center">
                <div class="mx-3">
                    <img src="public/assets/img/iconeUtilisateur/<?= $currentIcon; ?>" alt="<?= $currentName; ?>" class="icon-option" width="50">
                </div>
            </div>
            <div class="d-xl-none d-none mobile-nav-menu position-absolute start-0">
                <ul class="my-2">
                    <li class="mb-3 text-light">
                        <a href="/">Accueil</a>
                    </li>
                    <li class="mb-3 text-light">
                        <a href="/?pokedex">Pokédex</a>
                    </li>
                    <li class="mb-3 text-light">
                        <a href="/?favorites">Favoris</a>
                    </li>
                    <li class="mb-3 text-light">
                        <a href="/?param">Paramètres</a>
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
                <a class="fa-solid text-secondary text-decoration-none search-bar-menu position-absolute fa-search end-0 me-2 ps-2" href="/"></a>
                </input>
            </p>

            <a href="/" class="text-light fw-bold">ACCUEIL</a>
            <a href="/?pokedex" class="text-light fw-bold">POKEDEX</a>
            <a href="/?favorites" class="text-light fw-bold">FAVORIS</a>
            <a href="/?param" class="text-light fw-bold">PARAMETRES</a>
            <div class="d-flex flex-wrap justify-content-end">
                <div class="mx-3 text-center">
                    <div id="profile">
                        <div class="row">
                            <img src="public/assets/img/iconeUtilisateur/<?= $currentIcon ?? "../pokeball.png" ?>" alt="<?= $currentName; ?>" class="icon-option">
                        </div>
                        <div class="row">
                            <span class="pseudo"><?= $currentName ?? "Profil" ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>