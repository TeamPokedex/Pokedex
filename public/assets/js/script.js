// let url = window.location.search;
// let param = url.split('=')[1];

// function getQueryParam(param) {
//     const urlParams = new URLSearchParams(window.location.search);
//     return urlParams.get(param);
// }

function getPokemonTypeColor(type) {
    const typeColors = {
        'Eau': 'blue',
        'Feu': 'orange',
        'Plante': 'green',
        'Electrik': 'yellow',
        'Psy': 'purple',
        'Glace': 'lightblue',
        'Dragon': 'red',
        'Ténèbres': 'black',
        'Fée': 'pink',
        'Normal': 'gray',
        'Combat': 'red',
        'Vol': 'blue',
        'Poison': 'purple',
        'Sol': 'brown',
        'Roche': 'gray',
        'Insecte': 'green',
        'Acier': 'gray',
        'Spectre': 'black',
    };
    return typeColors[type] || 'white'; // couleur par défaut si le type n'est pas trouvé
}

function setBackgroundColor() {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const type = card.getAttribute('data-type');
        const color = getPokemonTypeColor(type);
        if (color) {
            card.style.backgroundColor = color;
        }
    });
}

window.onload = setBackgroundColor;