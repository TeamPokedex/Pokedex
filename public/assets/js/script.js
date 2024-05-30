// icone utilisateur
document.addEventListener('DOMContentLoaded', function () {
    const iconOptions = document.querySelectorAll('.icon-option');
    iconOptions.forEach(icon => {
        icon.addEventListener('click', function () {
            iconOptions.forEach(i => i.classList.remove('selected'));
            this.classList.add('selected');
            document.getElementById('selected-icon').value = this.getAttribute('data-icon');
        });
    });
});

// théme DARK LIGHT
const darkModeInput = document.getElementById('dark-mode');
const lightModeInput = document.getElementById('light-mode');
const body = document.getElementById('body');

darkModeInput.addEventListener('change', function () {
    if (darkModeInput.checked) {
        body.classList.remove('bg-light');
        body.classList.add('bg-dark', 'text-white');
    }
});

lightModeInput.addEventListener('change', function () {
    if (lightModeInput.checked) {
        body.classList.remove('bg-dark', 'text-white');
        body.classList.add('bg-light');
    }
});