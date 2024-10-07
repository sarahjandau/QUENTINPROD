<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Quentin Prod</title>
</head>
<body>

<div class="informationPresta">
    <div class="presentationPresta">
        <h2> UN ANNIVERSAIRE MEMORABLE <br> AVEC UNE AMBIANCE UNIQUE !</h2> 
        <p class="aProposText">  
            Professionnalisme, réactivité et flexibilité sont au cœur de mon service. Mon approche personnalisée me permet de m’adapter à vos envies, que ce soit pour le choix des styles musicaux ou pour l’intégration d’animations comme les jeux. <br> <br>
            Toujours dynamique et présent au micro, mon objectif est simple : vous offrir une expérience sur-mesure et garantir votre entière satisfaction.
        </p>
        <div class="buttonWrapper presta">
            <button class="aproposbtn">CONTACTEZ-MOI</button>
        </div>
    </div>
</div>

<div class="titrePresta">
    <h2 class="banderole">PRESTATION ANNIVERSAIRE</h2>
</div>

<div class="prestationCardContainer">
    <div class="cards">
        <h3>ANNIVERSAIRE</h3>
        <p class="price">A partir de : <strong>500€</strong></p>
        <h4>Cette prestation comprend :</h4>
        <ul class="serviceList">
            <li>Sonorisation sans limite d'heure</li>
            <li>Lyre sur totem</li>
            <li>Gig bar</li>
            <li>Machine à fumée</li>
            <li>Devanture en lycra noire ou blanche</li>
        </ul>
    </div>
    <div class="optionsPlus">
        <h4>Options en plus ?</h4>
        <ul class="options-list">
            <li>2 jet de scène : 50€</li>
            <li>Éclairage de salle complet : 50€</li>
        </ul>
    </div>
</div>

<div class="servicecontainer">
    <img src="images/materielDJ2" alt="" class="photomateriel">
    <div class="servicequalitecontainer">
        <h2>UN SERVICE DE QUALITÉ</h2> <br>
        <div class="sonorisation">
            <p>Profitez d'une sonorisation sans limite d'heure et d'un éclairage haut de gamme :</p><br>
            <h4>Éclairage et effets visuels</h4>
            <p>4 lyres sur totems avec habillage lycra pour un rendu moderne et élégant.</p><br>
                
            <h4>Effets lumineux</h4>
            <p>La Gig Bar 2 combine stroboscopes, lasers et autres effets lumineux pour animer la piste. Une machine à fumée intensifie l’ambiance en soulignant les faisceaux.</p> <br>
                
            <h4>Effets spéciaux</h4>
            <p>4 jets de scène et fumée lourde pour un moment magique, idéal pour l’ouverture de bal.</p><br>
                
            <h4>Événement DJ personnalisable</h4>
            <p>Habillage en lycra blanc ou noir selon votre thème. Un setup professionnel pour une soirée mémorable !</p>
        </div>
            
    </div>
</div>
    







<?php
$content = ob_get_clean();
$titre = "PRESTATION ANNIVERSAIRE";
$headerImage = 'images/anniversaire.jpg';
require "template.php";
?>