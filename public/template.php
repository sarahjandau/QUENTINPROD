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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
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
    <p class="footer">Copyright AFCI - 2024</p>
</footer>


<script src="js/style.js"></script>   
</body>
</html>