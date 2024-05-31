<main>

    <div class="w-100 text-center my-5 d-xl-none">
        <img src="public/assets/img/titlePokemon.png" class="" alt="">
    </div>

    <div class="input-group d-flex d-xl-none justify-content-center">
        <input class="input-search" type="search" placeholder="ex: fée" aria-label="Search">
        <button class="btn btn-pokemon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
        </button>
    </div>

    <div class="d-flex flex-wrap justify-content-center mx-0 mx-xl-5 my-5 container-list-pokemon">
        <?php foreach ($pokemonsType as $pokemonType) : ?>
            <div class="text-center card-type mb-3 d-flex flex-wrap">
                <button class="btn border">
                    <img class="w-75" src='<?= $pokemonType->image ?>'>
                    <a class="fs-5" href='?type=<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
                </button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="d-none d-xl-flex my-5">
        <div class="container-pokeball text-center w-50">
            <img src="public/assets/img/pokeball.png" alt="" class="img-pokeball">
        </div>
        <p class="container-sacha text-end w-50 pe-5">
            <img src="public/assets/img/sacha.webp" alt="">
        </p>
    </div>

</main>