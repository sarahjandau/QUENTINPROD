document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menuToggle'); 
    const closeMenu = document.querySelector('.closeMenu');   
    const mobileNav = document.querySelector('.mobileNav');   

    menuToggle.addEventListener('click', function() {
        mobileNav.style.display = 'block'; 
    });

    closeMenu.addEventListener('click', function() {
        mobileNav.style.display = 'none'; 
    });


    // ANIMATION JS PAGE A PROPOS 

    function animateNumbers(element, start, end, duration){
        let current = start;
        const stepTime = Math.abs(Math.floor(duration / (end - start)));
        const timer = setInterval(function () {
            current += 1;
            element.textContent = current;
            if (current === end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    if (window.innerWidth > 768){
        const anneeElement = document.querySelector('.experience .annee');
        const chiffreElement = document.querySelector('.evenements .chiffre');
        const satisfactionElement = document.querySelector('.satisfaction .pourcentage');

        
        animateNumbers(anneeElement, 0, 10, 2000);  
        animateNumbers(chiffreElement, 0, 30, 2000); 
        animateNumbers(satisfactionElement, 0, 100, 2000); 
    }else{
        document.querySelector('.experience .annee').textContent = 10;
        document.querySelector('.evenements .chiffre').textContent = 30;
        document.querySelector('.satisfaction .pourcentage').textContent = '100%';
    }

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

});