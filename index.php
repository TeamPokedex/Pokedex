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


// Récupérer les paramètres existants (si nécessaire, par exemple depuis une base de données)
$currentName = isset($_POST['name']) ? $_POST['name'] : '';
$currentIcon = isset($_POST['icon']) ? $_POST['icon'] : '';
$currentMode = isset($_POST['mode']) ? $_POST['mode'] : 'light';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <h1 class="text-center">Paramètres</h1>

    <form action="" method="post" enctype="multipart/form-data" novalidate>

        <div class="form-group fw-semibold">
            <label for="name">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $currentName ?>" required>
        </div>
        <div class="form-group fw-semibold">
            <label for="icon">Choisissez une icône :</label>
            <div id="icon-options">
                <?php foreach ($icons as $icon) : ?>
                    <img src="/public/assets/img/iconeUtilisateur/<?= $icon; ?>" alt="<?= $icon; ?>" class="icon-option <?php if ($icon == $currentIcon) echo 'selected'; ?>" data-icon="<?= $icon; ?>" width="50">
                <?php endforeach; ?>
            </div>
            <input type="hidden" name="icon" id="selected-icon" value="<?= $currentIcon; ?>">
        </div>
        <div class="form-group fw-semibold">
            <p>Choisissez le mode du site :</p>
            <div class="mode">
                <label>
                    <input type="radio" name="mode" value="dark" required>
                    <span>🌙 DARK MODE</span>
                </label>
                <label>
                    <input type="radio" name="mode" value="light">
                    <span>🌞 LIGHT MODE</span>
                </label>
            </div>
        </div>

        <div class="form-group fw-semibold">
            <label for="mode">Choisissez le mode du site : :</label>
            <select id="mode" name="mode">
                <option value="light" <?php if ($currentMode == 'light') echo 'selected'; ?>>Light Mode</option>
                <option value="dark" <?php if ($currentMode == 'dark') echo 'selected'; ?>>Dark Mode</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <form action="submit.php" method="post">
                                <div class="form-group">
                                    <label for="pseudo">Nom:</label>
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Choisissez un pseudo..." required>
                                </div>

                                <div class="form-group fw-semibold">
                                    <label for="icon">Choisissez une icône :</label>
                                    <div id="icon-options">
                                        <?php foreach ($icons as $icon) : ?>
                                            <img src="/public/assets/img/iconeUtilisateur/<?= $icon; ?>" alt="<?= $icon; ?>" class="icon-option <?php if ($icon == $currentIcon) echo 'selected'; ?>" data-icon="<?= $icon; ?>" width="50">
                                        <?php endforeach; ?>
                                    </div>
                                    <input type="hidden" name="icon" id="selected-icon" value="<?= $currentIcon; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Choisissez le mode du site :</label>
                                    <div class="d-flex justify-content-around">
                                        <label class="btn btn-outline-dark">
                                            <input type="radio" name="mode" value="dark" required>
                                            <span>🌙 DARK MODE</span>
                                        </label>
                                        <label class="btn btn-outline-light">
                                            <input type="radio" name="mode" value="light">
                                            <span>🌞 LIGHT MODE</span>
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Soumettre</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../public/assets/js/form.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

</html>