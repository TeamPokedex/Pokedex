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
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>

</html>