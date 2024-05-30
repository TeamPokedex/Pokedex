const menuIcon = document.getElementById('icon-menu');
const navbarMenu = document.getElementsByClassName('mobile-nav-menu')[0];
const searchbarMenu = document.getElementsByClassName("search-bar-menu")[0];
const inputSearch = document.getElementsByClassName("input-search")[0];

const types = [
'eau',
'feu',
'plante',
'electrik',
'psy',
'glace',
'dragon',
'tenebres',
'fee',
'normal',
'combat',
'vol',
'poison',
'sol',
'roche',
'insecte',
'acier',
'spectre',
];

const searchByPokemonName = async (name) => {
    try {
        const req = await fetch("https://pokebuildapi.fr/api/v1/pokemon/" + name);
        if(req.status === 200){
            const pokemon = await req.json();
            window.location.href = "http://localhost:8080/pokemon/" + pokemon.id
        }
    } catch (e) {
        console.log(e);
    }
}


menuIcon.addEventListener('click', () => {
    if(menuIcon.classList.contains('fa-bars')){

        //HANDLE ICON CHANGING
        menuIcon.classList.add('fa-close');
        menuIcon.classList.remove('fa-bars');

        //DISPLAY BLOCK NAV MENU
        navbarMenu.classList.remove('d-none');

    }else{

        //HANDLE ICON CHANGING
        menuIcon.classList.add('fa-bars');
        menuIcon.classList.remove('fa-close');

        //HIDDEN BLOCK NAV MENU
        navbarMenu.classList.add('d-none');

    }
})

searchbarMenu.addEventListener('click', () => {
    if(types.includes(inputSearch.value)){

    }else{
        searchByPokemonName(inputSearch.value);
    }
    // window.location.href = 'https://www.google.com';
})

