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


<!-- <div class="styleMusique">
    <div class="rectangle"></div>
    <span class="styleText"
        >Tout style de musique ... Pop • RnB • Dance • Electro • Classic • Hip-Hop • Afro • Année 80
    </span>
</div> -->


<div class="aPropos">
    <img src="public/images/Quentin1.jpeg" alt="" class="photoQuentin">
    <div class="presentation">
        <h2 class="quentinProd">QUENTIN PROD A <br> VOTRE SERVICE</h2> <br>
        <p class="aProposText"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. 
            Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictum.Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Ut id libero in odio bibendum scelerisque. Vivamus venenatis arcu ac magna tincidunt, quis mattis mi dictum.
        </p>
        <div class="buttonWrapper">
            <button class="aproposbtn">EN SAVOIR PLUS</button>
        </div>
    </div>
</div>

<h2> NOS PRESTATIONS </h2>


<div class="cardsContainer">
       
        <div class="card">
            <h3>BAPTEME</h3>
            <h6>A partir de :</h6>
            <div class="prix">600€</div>
            <div class="description">
                <ul>
                    <li>Sonorisation sans limite d’heure</li>
                    <li>Lyre sur totem</li>
                    <li>Gig bar</li>
                    <li>Machine à fumée</li>
                    <li>Deventure en lycra</li>
                    <li>+ 2 options supplémentaires</li>
                </ul>
            </div>
            <button class="voirTout">VOIR TOUT</button>
        </div>

        
        <div class="card">
            <h3>MARIAGE</h3>
            <h6>A partir de :</h6>
            <div class="prix">700€</div>
            <div class="description">
                <ul>
                    <li>Sonorisation sans limite d’heure</li>
                    <li>Lyre sur totem</li>
                    <li>Gig bar</li>
                    <li>Machine à fumée</li>
                    <li>Deventure en lycra</li>
                    <li>+ 4 options supplémentaires</li>
                </ul>
            </div>
            <button class="voirTout">VOIR TOUT LES PACKS</button>
        </div>

       
        <div class="card">
            <h3>ANNIVERSAIRE</h3>
            <h6>A partir de :</h6>
            <div class="prix">500€</div>
            <div class="description">
                <ul>
                    <li>Sonorisation sans limite d’heure</li>
                    <li>Lyre sur totem</li>
                    <li>Gig bar</li>
                    <li>Machine à fumée</li>
                    <li>Deventure en lycra</li>
                    <li>+ 2 options supplémentaires</li>
                </ul>
            </div>
            <button class="voirTout">VOIR TOUT</button>
        </div>
</div>


    

<script src="public/js/style.js"></script> 
</body>
</html>

<?php
$content = ob_get_clean();
$titre = "Transformez vos instants en <br> souvenirs musicaux";
$headerImage = './public/images/header.jpg';
require "public/template.php";
?>
