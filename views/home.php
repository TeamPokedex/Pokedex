<main>

    <div class="w-100 text-center my-5 d-xl-none">
        <img src="public/assets/img/titlePokemon.png" class="" alt="">
    </div>

    <form class="d-flex d-xl-none justify-content-center my-5 mx-auto text-center" role="search">
        <div class="input-group">
            <input class="form-control" type="search" placeholder="ex: fée" aria-label="Search">
            <button class="btn btn-pokemon" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </div>
    </form>

    <div class="d-flex flex-wrap justify-content-center mx-0 mx-xl-5 my-5 container-list-pokemon">
        <p class="w-100 text-center mt-5 mb-5 fs-5">Classe la liste les Pokémon par type :</p><br>
        <?php foreach ($pokemonsType as $pokemonType) : ?>
            <div class="text-center card-type mb-3 d-flex flex-wrap">
                <button class="btn border">
                    <img class="w-75" src='<?= $pokemonType->image ?>'>
                    <a class="fs-5" href='<?= $pokemonType->name ?>'><?= $pokemonType->name ?></a>
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