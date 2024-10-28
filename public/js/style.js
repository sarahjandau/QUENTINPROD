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




    // CHANGER FOND MENU SCROLLED
    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
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
            if (reponseDiv.classList.contains("active")) {
                toggleIcon.textContent = "-";
            } else {
                toggleIcon.textContent = "+";
            }
    
            document.querySelectorAll(".reponse").forEach(function(otherReponse) {
                if (otherReponse !== reponseDiv && otherReponse.classList.contains("active")) {
                    otherReponse.classList.remove("active");
                    const otherQuestion = otherReponse.previousElementSibling;
                    otherQuestion.querySelector(".toggle-icon").textContent = "+";
                }
            });
        });
    });

    // NOMBRE CARACTERE MDP
    document.querySelector('form').addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        
        if (password.length < 6 || !/[A-Z]/.test(password) || !/[0-9]/.test(password)){
            event.preventDefault();
            alert("Le mot de passe doit contenir plus de 5 caractères, une majuscule et un chiffre.");
        }
    });

    
    // COOKIES

    const modal = document.getElementById("cookieModal");
    const acceptButton = document.getElementById("acceptCookies");

    if (!localStorage.getItem("cookiesAccepted")){
        modal.style.display = "flex";
    }

    acceptButton.addEventListener("click", function(){
    localStorage.setItem("cookiesAccepted", "true");
    modal.style.display = "none";
    });

});

  

