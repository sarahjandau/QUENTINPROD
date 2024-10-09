<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="pageApropos">
    <div class="presentationPresta">
        <h2> Entrez dans mon monde <br> où chaque mix transforme la <br> musique en expérience</h2> 
        <p class="aProposText">  
            Professionnalisme, réactivité et flexibilité sont au cœur de mon service. Mon approche personnalisée me permet de m’adapter à vos envies, que ce soit pour le choix des styles musicaux ou pour l’intégration d’animations comme les jeux. <br> <br>
            Toujours dynamique et présent au micro, mon objectif est simple : vous offrir une expérience sur-mesure et garantir votre entière satisfaction.
        </p>
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

<div class="containerChiffres">
    <div class="experience">
        <span class="annee">10</span><br>
        <span class="text">ans d’expériences</span>
    </div>
    <div class="evenements">
        <span class="chiffre">30</span><br>
        <span class="text">évènements organisés</span>
    </div>
    <div class="satisfaction">
        <span class="pourcentage">100%</span><br />
        <span class="text">de clients satisfaits</span>
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


</body>
</html>


<?php
$content = ob_get_clean();
$titre = "A PROPOS";
$headerImage = 'images/Quentin3.jpeg';
require "template.php";
?>