document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menuToggle'); // Bouton pour ouvrir le menu
    const closeMenu = document.querySelector('.closeMenu');   // Bouton pour fermer le menu
    const mobileNav = document.querySelector('.mobileNav');   // Le menu mobile

    // Afficher le menu mobile au clic sur menuToggle
    menuToggle.addEventListener('click', function() {
        mobileNav.style.display = 'block'; // Affiche le menu
    });

    // Fermer le menu mobile au clic sur closeMenu
    closeMenu.addEventListener('click', function() {
        mobileNav.style.display = 'none'; // Masque le menu
    });

    
});

