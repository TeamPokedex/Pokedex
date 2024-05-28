<?php
$urlAllPokemons = 'https://pokebuildapi.fr/api/v1/pokemon';

$pokemonList = file_get_contents($urlAllPokemons);

$pokemonListDecode = json_decode($pokemonList);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Détails des Pokémon</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php if (is_array($pokemonListDecode)) {
                foreach ($pokemonListDecode as $value) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $value->image ?>" class="card-img-top" alt="<?= $value->name ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $value->name ?></h5>
                                <p class="card-text">ID: <?= $value->id ?></p>
                            </div>
                        </div>
                    <?php }
            } else { ?>
                    <p>Erreur lors de la récupération des données.</p>
                <?php } ?>
                    </div>
        </div>
    </div>
</body>

</html>