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

    // ACCORDEON MARIAGE

    document.querySelectorAll('.question').forEach(function(questionDiv) {
        // Ajoute un événement 'click' à chaque div de question
        questionDiv.addEventListener('click', function() {
            // Sélectionne la div de réponse suivante
            const reponseDiv = questionDiv.nextElementSibling;
    
            // Bascule l'état actif de cette réponse
            reponseDiv.classList.toggle("active");
    
            // Modifier l'icône (plus ou moins)
            const toggleIcon = questionDiv.querySelector(".toggle-icon");
            if (reponseDiv.classList.contains("active")) {
                toggleIcon.textContent = "-";
            } else {
                toggleIcon.textContent = "+";
            }
    
            // Ferme les autres réponses si elles sont ouvertes
            document.querySelectorAll(".reponse").forEach(function(otherReponse) {
                if (otherReponse !== reponseDiv && otherReponse.classList.contains("active")) {
                    otherReponse.classList.remove("active");
                    const otherQuestion = otherReponse.previousElementSibling;
                    otherQuestion.querySelector(".toggle-icon").textContent = "+";
                }
            });
        });
    });
});
