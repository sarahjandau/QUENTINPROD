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
        <h2> OFFREZ UN BAPTEME REMPLI <br> DE DOUCEUR ET D’ELEGANCE</h2> 
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
    <h2 class="banderole">PRESTATION BAPTEME</h2>
</div>

<div class="prestationCardContainer">
    <div class="cards">
        <h3>BAPTEME</h3>
        <p class="price">A partir de : <strong>600€</strong></p>
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

<div class="aproposContainer">
    <img src="images/photoQuentin.jpeg" alt="" class="presentationQuentin">

    <div class="monParcours">
        <h2>MON PARCOURS</h2>
        <p class="aProposText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. 
            Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. 
            Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictumLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. 
            Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. 
            Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictum.. 
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. Vivamus venenatis arcu ac magna tincidunt,
            quis mattis mi dictum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. Vivamus venenatis arcu ac 
            magna tincidunt, quis mattis mi dictum. 
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. Vivamus venenatis arcu ac magna tincidunt, 
            quis mattis mi dictum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum 
            scelerisque. Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictum.
        </p>
        <div class="buttonWrapper presta">
            <button class="aproposbtn"> <a href="public/contact.php">CONTACT MOI</a></button>
        </div>

    </div>

    
</div>

<?php
$content = ob_get_clean();
$titre = "PRESTATION BAPTEME";
$headerImage = 'images/Bapteme.jpg';
require "template.php";
?>