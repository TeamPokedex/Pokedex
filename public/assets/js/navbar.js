const menuIcon = document.getElementById('icon-menu');
const navbarMenu = document.getElementsByClassName('mobile-nav-menu')[0];

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