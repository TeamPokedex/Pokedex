<!-- <?php var_dump($pokemon) ?> -->
<div class="name-pokemon d-flex justify-content-center mt-5 mb-0">
    <h1 id='pokemon-details-name'><?= htmlspecialchars($pokemon->name) ?> # <?= htmlspecialchars($pokemon->id) ?></h1>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card ml-5" style="width: 20rem;">
                <img class="card-img-top" src="<?= htmlspecialchars($pokemon->image) ?>" title="<?= htmlspecialchars($pokemon->name) ?>" />
            </div>
        </div>
        <div class="col">
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
        <div class="col">
            <h2 class='stats-details'>Statistiques de base:</h2>
            <ul>
                <li>HP: <?= htmlspecialchars($pokemon->stats->HP) ?></li>
                <li>Attack: <?= htmlspecialchars($pokemon->stats->attack) ?></li>
                <li>Defense: <?= htmlspecialchars($pokemon->stats->defense) ?></li>
                <li>Special Attack: <?= htmlspecialchars($pokemon->stats->special_attack) ?></li>
                <li>Special Defense: <?= htmlspecialchars($pokemon->stats->special_defense) ?></li>
                <li>Speed: <?= htmlspecialchars($pokemon->stats->speed) ?></li>
            </ul>
        </div>
        <div class="col">
            <h2>Évolution(s)</h2>
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