function toggleFavoris(button) {
    button.classList.toggle('active');
    // Ajoutez ici le code pour gérer l'ajout/suppression des favoris côté serveur si nécessaire
}

// Icone utilisateur
document.addEventListener('DOMContentLoaded', function () {
    const iconOptions = document.querySelectorAll('.icon-option');
    iconOptions.forEach(icon => {
        icon.addEventListener('click', function () {
            iconOptions.forEach(i => i.classList.remove('selected'));
            this.classList.add('selected');
            document.getElementById('selected-icon').value = this.getAttribute('data-icon');
        });
    });

    // Thème DARK LIGHT
    var checkbox = document.querySelector('input[name=mode]');
    checkbox.addEventListener('change', function () {
        if (this.checked) {
            trans();
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            trans();
            document.documentElement.setAttribute('data-theme', 'light');
        }
    });

    let trans = () => {
        document.documentElement.classList.add('transition');
        window.setTimeout(() => {
            document.documentElement.classList.remove('transition');
        }, 1000);
    };

    // Initialisation du mode thème selon la valeur actuelle
    if (checkbox.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
});
