document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menuToggle'); 
    const closeMenu = document.querySelector('.closeMenu');   
    const mobileNav = document.querySelector('.mobileNav');   

    menuToggle.addEventListener('click', function() {
        mobileNav.style.display = 'block'; // Affiche le menu
    });

    // Fermer le menu mobile au clic sur closeMenu
    closeMenu.addEventListener('click', function() {
        mobileNav.style.display = 'none'; // Masque le menu
    });
});


