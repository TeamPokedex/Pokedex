<?php
// Liste des icônes disponibles
$icons = [
    "../public/assets/img/iconeUtilisateur/IconBulbizare.png",
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

        <label for="icon">Choisissez une icône :</label>
        <div id="icon-options">
            <?php foreach ($icons as $icon) : ?>
                <img src="icons/<?php echo $icon; ?>" alt="<?php echo $icon; ?>" class="icon-option <?php if ($icon == $currentIcon) echo 'selected'; ?>" data-icon="<?php echo $icon; ?>" width="50">
            <?php endforeach; ?>
        </div>
        <input type="hidden" name="icon" id="selected-icon" value="<?php echo $currentIcon; ?>">


        <div class="form-group fw-semibold">
            <label for="birth_country">Pays de naissance :</label>
            <select class="form-control" id="birth_country" name="birth_country" required>
                <?php
                foreach ($countries as $key => $country) : ?>

                    <option value="<?= $country ?>" <?= $key == $birth_country ? 'selected' : '' ?>><?= $country ?></option>

                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label class="fw-semibold">Quels langages web connaissez-vous ?</label><br>
            <?php
            foreach ($languages as $key => $language) :
            ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id=<?= $language ?> name="web_languages[]" value=<?= $language ?>>
                    <label class="form-check-label" for=<?= $language ?>><?= $language ?></label>
                </div>
            <?php endforeach ?>

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>