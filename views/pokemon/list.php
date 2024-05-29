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
    'normal' => 'gray',
    'combat' => 'red',
    'vol' => 'blue',
    'poison' => 'purple',
    'sol' => 'brown',
    'roche' => 'gray',
    'insecte' => 'green',
    'acier' => 'gray',
    'spectre' => 'black',
];
?>
<div class="container" id="list-container" style="background-color:<?= $typeColors[$type] ?>">
    <div class="row">
        <?php
        if (is_array($pokemonListDecode)) {
            foreach ($pokemonListDecode as $pokemon) {
                // var_dump($value);
                // die;
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card" data-type="<?= $pokemon->type ?>">
                        <img src="<?= $pokemon->image ?>" class="card-img-top" alt="<?= $pokemon->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pokemon->name ?></h5>
                            <p class="card-text">ID: <?= $pokemon->id ?></p>
                            <p class="card-text">Type(s): <?php 
                            foreach ($pokemon->apiTypes as $pokemonType) { ?>
                            <img src="<?= $pokemonType->image ?>" name="<?= $pokemonType->name ?>" class="pokemon-type-logo"/>
                              <?= $pokemonType->name?> 
                              <?php  
                            }?></p>
                        </div>
                        <div class="card-footer">
                            <a href="pokemon/<?= $pokemon->id ?>">Voir + de détails</a>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <p>Erreur lors de la récupération des données.</p>
        <?php } ?>
    </div>
</div>