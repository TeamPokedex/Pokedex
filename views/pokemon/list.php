<div class="container" id= list-container>
    <div class="row">
        <?php
        // Affichage de tous les Pokémon de type Eau
        if (is_array($pokemonListDecode)) {
            foreach ($pokemonListDecode as $value) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%;">
                        <img src="<?= $value->image ?>" class="card-img-top" alt="<?= $value->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value->name ?></h5>
                            <p class="card-text">ID: <?= $value->id ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="./pokemonDetailsController.php?id=<?= $value->id ?>">Voir + de détails</a>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <p>Erreur lors de la récupération des données.</p>
        <?php } ?>
    </div>
</div>