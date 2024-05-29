<?php
require('./controllers/pokemonListController.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/public/assets/img/favicon.ico" type="image/x-icon">
    <title>Accueil</title>
</head>

<body>
    <?php
    // display of all pokemon water
    if (is_array($pokemonListWaterDecode)) {
        foreach ($pokemonListWaterDecode as $value) { ?>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $value->image ?>" class="card-img-top" alt="<?= $value->name ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value->name ?></h5>
                        <p class="card-text">ID: <?= $value->id ?></p>
                    </div>
                </div>
            </div>
        <?php }
    } else { ?>
        <p>Erreur lors de la récupération des données.</p>
    <?php } ?>
    <!-- en of display -->
</body>

</html>