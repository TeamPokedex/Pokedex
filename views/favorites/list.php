<div class="text-center mt-4">
    <img src="./public/assets/img/title/favoris.png " alt="Favoris" class="title-image">
</div>
<div class="container" id="list-container">
    <div class="row">
        <h1 class="text-center fs-1 my-5"><?= $type ?? '' ?></h1>
        <?php
        if (is_array($pokemonList)) {
            foreach ($pokemonList as $pokemon) {
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card" data-type="<?= $pokemon->type ?>">
                        <form action="" method="POST">
                            <input type="hidden" name="favorite_id" value="<?= $pokemon->id ?>" />
                            <button type="submit" class="btn position-absolute" style="top: 5px; right: 5px;"><i class="fa-solid fs-1 fa-heart favorite-icon"></i></button>
                        </form>
                        <img src="<?= $pokemon->image ?>" class="card-img-top" alt="<?= $pokemon->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pokemon->name ?></h5>
                            <p class="card-text">ID: <?= $pokemon->id ?></p>
                            <p class="card-text">Type(s):
                                <?php foreach ($pokemon->apiTypes as $pokemonType) { ?>
                                    <img src="<?= $pokemonType->image ?>" name="<?= $pokemonType->name ?>" class="pokemon-type-logo" />
                                    <?= $pokemonType->name ?>
                                <?php } ?>
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