<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM3y9v5f76b2M7JhM0Zr1eVjv7+1txT1RpEJ8A" crossorigin="anonymous">
    
    <title>Quentin Prod, DJ pour vos évenements </title>
</head>
<body>


<header class="header" style="background-image: url('<?php echo $headerImage; ?>');">
    <div class="menu">
        <div class="logo">QUENTIN PROD</div>
        <button class="menuToggle" aria-label="Toggle navigation">
            ☰
        </button>
        <nav class="mobileNav">
            <button class="closeMenu" aria-label="Close menu">✖</button>
            <ul>
                <li><a href="#about">ACCUEIL</a></li>
                <li><a href="#about">A PROPOS</a></li>
                <li class="dropdown">
                    <a href="#services" id="prestations">PRESTATIONS</a>
                    <ul class="dropdownMenu">
                        <li><a href="#mariage">Mariages</a></li>
                        <li><a href="#bapteme">Baptêmes</a></li>
                        <li><a href="#anniversaire">Anniversaires</a></li>
                    </ul>
                </li>
                <li><a href="#contact">CONTACTEZ-NOUS</a></li> <br>
                <li><a href="#login">ESPACE ADMIN</a></li>
            </ul>
        </nav>
        <nav class="desktopNav">
            <ul>
                <li><a href="#about">ACCUEIL</a></li>
                <li><a href="#about">A PROPOS</a></li>
                <li class="dropdown">
                    <a href="#services">PRESTATIONS</a>
                    <ul class="dropdownMenu">
                        <li><a href="#mariage">Mariages</a></li>
                        <li><a href="#bapteme">Baptêmes</a></li>
                        <li><a href="#anniversaire">Anniversaires</a></li>
                    </ul>
                </li>
                <li><a href="#contact">CONTACTEZ-NOUS</a></li>
                <li><a href="#login">ESPACE ADMIN</a></li>
            </ul>
        </nav>
    </div>
    <div class="hero">
        <?= $titre ?>
    </div>
</header>


<main>
    <?= $content ?>
</main>


<footer>
    <div class="API">

    </div>

    
    <div class="footer"> 
        <div class="containerPresentation">
         <div class="logo">QUENTIN PROD</div>
            <div class="reseauxSociaux">
                <a href="https://www.facebook.com" class="facebook" target="_blank" > 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg> 
                </a>
                <a href="https://www.instagram.com" class="instagram" target="_blank" > 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
                </a>
                <a href="https://www.tiktok.com" class="tiktok" target="_blank" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg> 
                </a>
            </div>
        </div>
        <div class="containerService">
            <h3>Nos services</h3>
            <ul>
                <li><a href="#mariage">Mariage</a></li>
                <li><a href="#anniversaire">Anniversaire</a></li>
                <li><a href="#bapteme">Bapteme</a></li>
                <li><a href="#autre-demande">Autre demande</a></li>
            </ul>
        </div>
        <div class="containerLiens">
            <h3>Home</h3>
            <ul>
                <li><a href="a propos">A propos</a></li>
                <li><a href="#anniversaire">Prestations</a></li>
                <li><a href="#bapteme">Contact</a></li>
                <li><a href="#autre-demande">Se connecter</a></li>
            </ul>
        </div>
        <div class="mentionsLegales">
            <ul>
                <li><a href="#cookies">Cookies</a></li>
                <li><a href="#politiqueconfidentialité">Politique de confidentialité</a></li>
                <li><a href="#mentionsLégales">Mentions légales</a></li>
            </ul>
        </div>
    </div>

    </div>
</footer>


<script src="../public/js/style.js"></script>   
</body>
</html>