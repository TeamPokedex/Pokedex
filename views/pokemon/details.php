<!-- <?php var_dump($pokemon) ?> -->
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

<main class="d-flex align-content-center justify-content-around flex-wrap mb-5">


    <div class="name-pokemon d-flex justify-content-center my-4">
        <h1 class="mb-5" id='pokemon-details-name'><?= htmlspecialchars($pokemon->name) ?> # <?= htmlspecialchars($pokemon->id) ?></h1>
    </div>
    <div class="d-flex">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <!-- pokemon image -->
                    <div class="card ml-5" style="width: 100%;">
                        <img class="card-img-top img-fluid" src="<?= htmlspecialchars($pokemon->image) ?>" title="<?= htmlspecialchars($pokemon->name) ?>" />
                        <form action=".?id=<?= $pokemon->id ?>" method="POST">
                            <input type="hidden" name="favorite_id" value="<?= $pokemon->id ?>" />
                            <button type="submit" class="btn position-absolute" style="top: 5px; right: 5px;"><i class="fa-solid fa-heart favorite-icon <?= (in_array((int)$pokemon->id, $favorites)) ? "enabled-favorite-icon" : "disabled-favorite-icon" ?>"></i></button>
                        </form>
                    </div>
                    <!-- end pokemon image -->
                </div>
                <div class="col-12 col-sm-8">
                    <div class="row">
                        <div class="col-12 col-sm-4 bloc-pokemon-stats">
                            <h2 class="stats-details">Type(s):</h2>
                            <?php foreach ($pokemon->apiTypes as $pokemonType) { ?>
                                <img src="<?= htmlspecialchars($pokemonType->image) ?>" name="<?= htmlspecialchars($pokemonType->name) ?>" class="pokemon-type-logo" />
                                <?= htmlspecialchars($pokemonType->name) ?>
                            <?php } ?>
                            <h2 class="stats-details">Faiblesse(s):</h2>
                            <ul>
                                <?php foreach ($pokemon->apiResistances as $resistance) : ?>
                                    <?php if ($resistance->damage_multiplier >= 2) : ?>
                                        <li><?= htmlspecialchars($resistance->name) ?>: <?= htmlspecialchars($resistance->damage_multiplier) ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-4 bloc-pokemon-stats">
                            <h2 class='stats-details'>Statistiques de base:</h2>
                            <?php
                            $stats = [
                                'HP' => $pokemon->stats->HP,
                                'Attack' => $pokemon->stats->attack,
                                'Defense' => $pokemon->stats->defense,
                                'Special Attack' => $pokemon->stats->special_attack,
                                'Special Defense' => $pokemon->stats->special_defense,
                                'Speed' => $pokemon->stats->speed
                            ];
                            ?>
                            <div class="stats-bars">
                                <?php foreach ($stats as $statName => $statValue) :
                                    // Determine if the statValue exceeds 100%
                                    $progressBarClass = $statValue > 100 ? 'progress-bar-custom' : 'progress-bar-custom';
                                ?>
                                    <div class="stat-bar mb-2">
                                        <strong><?= htmlspecialchars($statName) ?>:</strong>
                                        <div class="progress">
                                            <div class="<?= $progressBarClass ?>" role="progressbar" style="width: <?= $statValue * 100 / 160 ?>%;" aria-valuenow="<?= $statValue ?>" aria-valuemin="0" aria-valuemax="160"><?= $statValue ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 bloc-pokemon-stats">
                            <h2>Évolution(s) :</h2>
                            <div class="card-evolutions">
                                <?php
                                $previousEvolution = [];
                                $nextEvolutions = [];

                                // Vérifier et stocker les évolutions suivantes
                                if (!empty($pokemon->apiEvolutions) && is_array($pokemon->apiEvolutions)) {
                                    foreach ($pokemon->apiEvolutions as $evolution) {
                                        $nextEvolutions[] = $evolution;
                                    }
                                }

                                // Vérifier et stocker les pré-évolutions
                                if (!empty($pokemon->apiPreEvolution) && is_object($pokemon->apiPreEvolution)) {
                                    $previousEvolution[] = $pokemon->apiPreEvolution;
                                }
                                ?>

                                <?php if (!empty($previousEvolution)) : ?>
                                    <div>
                                        <strong>Évolution précédente :</strong>
                                        <?php foreach ($previousEvolution as $evolution) : ?>
                                            <div class="evolution">
                                                <?= htmlspecialchars($evolution->name) ?> <div># <?= htmlspecialchars($evolution->pokedexIdd) ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php else : ?>
                                    <p>Aucune pré-évolution disponible</p>
                                <?php endif; ?>

                                <?php if (!empty($nextEvolutions)) : ?>
                                    <div>
                                        <strong>Évolution suivante :</strong>
                                        <?php foreach ($nextEvolutions as $evolution) : ?>
                                            <div class="evolution">
                                                <?= htmlspecialchars($evolution->name) ?><div># <?= htmlspecialchars($evolution->pokedexId) ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php else : ?>
                                    <p>Aucune évolution disponible</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</main>