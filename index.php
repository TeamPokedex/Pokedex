<?php
$pokemonTypesUrl = 'https://pokebuildapi.fr/api/v1/types';
$pokemonTypes = json_decode(file_get_contents($pokemonTypesUrl));
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
        foreach ($pokemonTypes as $pokemonType) {
    ?>
    
        <a href="./controllers/pokemonListController.php?type=<?= $pokemonType->name ?>"><?= $pokemonType->name ?></a>
    <?php
        }
    ?>
</body>

</html>