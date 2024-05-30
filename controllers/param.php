<?php
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
