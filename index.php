<?php
require(__DIR__ . '/models/Cookie.php');

$favorites = getCookieArray("favorites");
$currentName = getCookie("pseudo") ?? "";
$currentIcon = getCookie("icon") ?? "";
$currentMode = getCookie("mode") ?? "light";

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

    // Cookies
    saveCookie('pseudo', $currentName);
    saveCookie('icon', $currentIcon);
}
if (isset($_POST['changeParam'])) {
    if (isset($_POST['mode'])) {

        $currentMode = 'dark';
        saveCookie('mode', $currentMode);
    } else {
        $currentMode = 'light';
        saveCookie('mode', $currentMode);
    }
}

if (isset($_GET['pokedex']) || !empty($_GET['type'])) {
    require('controllers/pokemonListController.php');
} else if (!empty($_GET['id'])) {
    require('controllers/pokemonDetailsController.php');
} else if (isset($_GET['param'])) {
    require('controllers/paramController.php');
} else if (isset($_GET["favorites"])) {
    require('controllers/favourListController.php');
} else {
    require('controllers/homeController.php');
}
