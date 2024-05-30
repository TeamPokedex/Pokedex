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
            <?php foreach ($countries as $key => $country) : ?>
                <option value="<?= $country ?>" <?= $key == $birth_country ? 'selected' : '' ?>><?= $country ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label class="fw-semibold">Quels langages web connaissez-vous ?</label><br>
        <?php foreach ($languages as $key => $language) : ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id=<?= $language ?> name="web_languages[]" value=<?= $language ?>>
                <label class="form-check-label" for=<?= $language ?>><?= $language ?></label>
            </div>
        <?php endforeach ?>

    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>