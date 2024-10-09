document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menuToggle'); 
    const closeMenu = document.querySelector('.closeMenu');   
    const mobileNav = document.querySelector('.mobileNav'); 
    const menu = document.querySelector('.menu');
  

    menuToggle.addEventListener('click', function() {
        mobileNav.style.display = 'block'; 
    });

    closeMenu.addEventListener('click', function() {
        mobileNav.style.display = 'none'; 
    });


    // Changer le fond du menu lors du défilement
    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            menu.classList.add('scrolled'); // Ajoute une classe 'scrolled'
        } else {
            menu.classList.remove('scrolled'); // Retire la classe 'scrolled'
        }
    });


    // ANIMATION CARDS COLOR
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('hovered'); 
        });

        card.addEventListener('mouseleave', () => {
            card.classList.remove('hovered'); 
        });
    });

    // Fonction de validation du formulaire
    function validateForm() {
        const moduleCheckboxes = document.querySelectorAll('input[name="modules[]"]');
        const isChecked = Array.from(moduleCheckboxes).some(checkbox => checkbox.checked);
        if (!isChecked) {
            alert("Veuillez cocher au moins un module.");
            return false; 
        }
        return true;
    }

    
});





