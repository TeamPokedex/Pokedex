<?php var_dump($pokemon) ?>

<div class="col-6">
    <img src="<?= $pokemon->image ?>" title="<? $pokemon->name ?>" />
    <div class="stats-and-name">
        <div id='pokemon-details-name'><?= $pokemon->name ?></div>
        <div>Statistiques de base :</div>
        <ul>
            <li>HP: <?= $pokemon->stats->HP ?></li>
            <li>Attack: <?= $pokemon->stats->attack ?></li>
            <li>Defense: <?= $pokemon->stats->defense ?></li>
            <li>Special Attack: <?= $pokemon->stats->special_attack ?></li>
            <li>Special Defense: <?= $pokemon->stats->special_defense ?></li>
            <li>Speed: <?= $pokemon->stats->speed ?></li>
        </ul>
    </div>

    <div class="resistances">
        <div>Résistance :</div>
        <ul>
            <?php foreach ($pokemon->apiResistances as $resistance) : ?>
                <?php if ($resistance->damage_multiplier >= 2) : ?>
                    <li><?= $resistance->name ?>: <?= $resistance->damage_multiplier ?> (<?= $resistance->damage_relation ?>)</li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>

</div>