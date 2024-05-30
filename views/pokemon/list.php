<?php
$typeColors = [
    'eau' => 'blue',
    'feu' => 'orange',
    'plante' => 'green',
    'electrik' => 'yellow',
    'psy' => 'purple',
    'glace' => 'lightblue',
    'dragon' => 'red',
    'tenebres' => 'black',
    'fee' => 'pink',
    'normal' => 'grey',
    'combat' => 'red',
    'vol' => 'blue',
    'poison' => 'purple',
    'sol' => 'brown',
    'roche' => 'grey',
    'insecte' => 'green',
    'acier' => 'grey',
    'spectre' => 'black',
];
?>
<div class="container" id="list-container">
    <!-- style="background-color:<?= $typeColors[$type] ?>" -->
    <div class="row">
        <h1 class="text-center fs-1 my-5"><?= htmlspecialchars($_GET['type']) ?></h1>
        <?php
        if (is_array($pokemonList)) {
            foreach ($pokemonList as $pokemon) {
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card" data-type="<?= $pokemon->type ?>">
                        <form action=".?type=<?= $type ?>" method="POST">
                            <input type="hidden" name="favorite_id" value="<?= $pokemon->id ?>"/>
                            <button type="submit" class="btn position-absolute" style="top: 5px; right: 5px;"><i class="fa-solid fs-1 fa-heart favorite-icon <?= (in_array((int)$pokemon->id, $favorites)) ? "enabled-favorite-icon" : "disabled-favorite-icon" ?>"></i></button>
                        </form>
                        <img src="<?= $pokemon->image ?>" class="card-img-top" alt="<?= $pokemon->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pokemon->name ?></h5>
                            <p class="card-text">ID: <?= $pokemon->id ?></p>
                            <p class="card-text">Type(s): <?php
                                                            foreach ($pokemon->apiTypes as $pokemonType) { ?>
                                    <img src="<?= $pokemonType->image ?>" name="<?= $pokemonType->name ?>" class="pokemon-type-logo" />
                                    <?= $pokemonType->name ?>
                                <?php
                                                            } ?>
                            </p>
                        </div>
                        <div class="card-footer bg-red">
                            <a class="text-light" href=".?id=<?= $pokemon->id ?>">Voir + de détails</a>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <p>Erreur lors de la récupération des données.</p>
        <?php } ?>
    </div>
</div>