<?php
require(__DIR__ . '/models/Cookie.php');

$favorites = getCookieArray("favorites");
$currentName = getCookie("pseudo");
$currentIcon = getCookie("icon");
$currentMode = getCookie("mode");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['favorite_id']) && !empty($_POST['favorite_id'])) {
        $receivedFavoriteId = htmlspecialchars($_POST['favorite_id']);

        // Si l'id existe déjà dans le tableau alors ça sous entend qu'on souhaite le retirer
        if (in_array((int)$receivedFavoriteId, $favorites)) {
            // Supprime du tableau des favoris
            $favorites = array_diff($favorites, array($receivedFavoriteId));
            $favorites = array_values($favorites);
        } else {
            // Ajoute dans le tableau des favoris
            $favorites[] = (int)$receivedFavoriteId;
        }
        storeArrayInCookie("favorites", array_unique($favorites));
    }

    // Récupérer et sécuriser les données du formulaire
    $currentName = isset($_POST['pseudo']) ? htmlspecialchars($_POST['pseudo']) : $currentName;
    $currentIcon = isset($_POST['icon']) ? htmlspecialchars($_POST['icon']) : $currentIcon;
    if (isset($_POST['mode']) && !empty($_POST['mode'])) {
        $currentMode = 'dark';
    } else {
        $currentMode = 'light';
    }

    // Cookies
    saveCookie('pseudo', $currentName);
    saveCookie('icon', $currentIcon);
    saveCookie('mode', $currentMode);
}

if (isset($_GET['pokedex']) || !empty($_GET['type'])) {
    require('controllers/pokemonListController.php');
} else if (!empty($_GET['id'])) {
    require('controllers/pokemonDetailsController.php');
} else if (isset($_GET['param'])) {
    require('controllers/paramController.php');
} else if (isset($_GET["favorites"])) {
    require('controllers/favourListController.php');
    // } else if (empty($_GET['id'])) {
    //     require('./404.php');
} else {
    require('controllers/homeController.php');
}


// var_dump($_SERVER['REQUEST_URI']);

// var_dump($_GET['type']);
// var_dump($_GET);
// var_dump($_SERVER['HTTP_HOST']);
   

    // var_dump($_GET);

    // switch (!empty($_GET)) {
    //     case "param":
    //         require("controllers/paramController.php");
    //         break;
    //     default:
    //         require("controllers/homeController.php");
    //         break;
    // }

// Liste des icônes disponibles
/* $icons = [
    "IconBulbizare.png",
    "IconCarapuce.png",
    "IconChenipan.png",
    "IconPika.png",
    "IconRatata.png",
    "IconRondoudou.png",
    "IconRoucoul.png",
    "IconSalameche.png"
];
?>

<!-- <body>

    <title>Paramètres</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/style.css">

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
    require('./controllers/typeListController.php'); */
