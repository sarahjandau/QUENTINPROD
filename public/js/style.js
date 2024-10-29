document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menuToggle'); 
    const closeMenu = document.querySelector('.closeMenu');   
    const mobileNav = document.querySelector('.mobileNav'); 
    const menu = document.querySelector('.menu');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            mobileNav.style.display = 'block'; 
        });
    }

    if (closeMenu) {
        closeMenu.addEventListener('click', function() {
            mobileNav.style.display = 'none'; 
        });
    }

    // CHANGER FOND MENU SCROLLED
    window.addEventListener('scroll', function() {
        if (menu && window.scrollY > 0) {
            menu.classList.add('scrolled'); 
        } else {
            menu.classList.remove('scrolled'); 
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

    // VALIDATION FORMULAIRE
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
        questionDiv.addEventListener('click', function() {
            const reponseDiv = questionDiv.nextElementSibling;
            reponseDiv.classList.toggle("active");

            const toggleIcon = questionDiv.querySelector(".toggle-icon");
            toggleIcon.textContent = reponseDiv.classList.contains("active") ? "-" : "+";

            document.querySelectorAll(".reponse").forEach(function(otherReponse) {
                if (otherReponse !== reponseDiv && otherReponse.classList.contains("active")) {
                    otherReponse.classList.remove("active");
                    otherReponse.previousElementSibling.querySelector(".toggle-icon").textContent = "+";
                }
            });
        });
    });

    // NOMBRE CARACTERE MDP
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            if (password.length < 6 || !/[A-Z]/.test(password) || !/[0-9]/.test(password)) {
                event.preventDefault();
                alert("Le mot de passe doit contenir plus de 5 caractères, une majuscule et un chiffre.");
            }
        });
    }

    // COOKIES

    setTimeout(showModal, 2000);

    const authButton = document.querySelector('.auth-button');
    if (authButton) {
        authButton.addEventListener('click', hideModal);
    }

    function showModal() {
        const modal = document.querySelector('.cookie-consent');
        if (modal && !localStorage.getItem('modalShown')) {
            modal.classList.add('-deploy');
        }
    }

    function hideModal() {
        const modal = document.querySelector('.cookie-consent');
        if (modal) {
            modal.classList.remove('-deploy');
            localStorage.setItem('modalShown', 'true');
        }
    }

    const cookieButton = document.querySelector('.cookie-button');
    if (cookieButton) {
        cookieButton.addEventListener('click', function() {
            showModal();
            localStorage.removeItem('modalShown');
        });
    }
});


  

