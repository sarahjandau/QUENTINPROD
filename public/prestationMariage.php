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
    
</body>
</html>

<div class="informationPresta">
    <div class="presentationPresta">
        <h2>FAITES DE VOTRE MARIAGE <br>UNE FETE INOUBLIABLE</h2> 
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
    <h2 class="banderole">NOS PACKS MARIAGE</h2>
</div>

<?php
$content = ob_get_clean();
$titre = "PRESTATION MARIAGE";
$headerImage = 'images/mariage.jpg';
require "template.php";
?>