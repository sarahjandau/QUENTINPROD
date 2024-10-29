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
    <div class="mentionslegales">
        <h2> Mentions Légales</h2>
        <p>
            1. Présentation du site
            En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi.
            <br>
            Propriétaire du site :
            Nom commercial : MONSIEUR QUENTIN GORGIBUS
            Statut juridique : Entrepreneur Individuel - Affaire personnelle commerçant
            Adresse : 16 RUE CHANZY, 59240 DUNKERQUE
            Numéro de téléphone : 
            Numéro SIREN : 917 759 904
            Numéro SIRET : 917 759 904 00019
            Numéro TVA Intracommunautaire : FR05917759904
            Immatriculation : Immatriculée au Registre du Commerce et des Sociétés de Dunkerque sous le numéro RCS Dunkerque A 917 759 904
            Date de création : 25 juillet 2022
            <br>
        
            Directeur de la publication :
            Quentin Gorgibus – MONSIEUR QUENTIN GORGIBUS

            Design et conception du site :
            Sarah Jandau. 
        </p> <br>
        
        <h3> 2. Hébergement du site </h3>

        <p> L’hébergement de ce site est assuré par la société HOSTINGER INTERNATIONAL LTD, dont le siège social se situe 61 Lordou Vironos Street, 6023 Larnaca, Chypre, 
            joignable par le moyen suivant : https://www.hostinger.fr/contact.
        </p> <br>

        <h3>3. Propriété intellectuelle et contrefaçons </h3>
        <p> MONSIEUR QUENTIN GORGIBUS est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, etc.
            Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : MONSIEUR QUENTIN GORGIBUS.
        </p> <br>

        <h3>4. Limitations de responsabilité </h3>
        <p> 
            Le propriétaire du site ne pourra être tenu responsable des dommages directs et indirects causés au matériel de l’utilisateur lors de l’accès au site [Nom du site], et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées, soit de l’apparition d’un bug ou d’une incompatibilité.

        </p> <br>


        <h3>5. Gestion des données personnelles </h3>
        <p>
            Le site assure à l’utilisateur une collecte et un traitement d’informations personnelles dans le respect de la vie privée conformément au Règlement Général sur la Protection des Données (RGPD) du 27 avril 2016.

        </p> <br>

        <h3>6. Droit applicable et attribution de juridiction  </h3>
        <p>
            Tout litige en relation avec l’utilisation du site quentinprod.fr est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Dunkerque.
        </p> <br>

        <h3>Contact </h3>
        <p>
            Pour tout signalement de contenus ou d’activités illicites, l’utilisateur peut contacter l’éditeur à l’adresse suivante : [Adresse e-mail de contact] ou par courrier recommandé avec accusé de réception adressé à MONSIEUR QUENTIN GORGIBUS à l’adresse précisée ci-dessus.</p>
        </p>


    </div>
    


</body>
</html>

<?php
$content = ob_get_clean();
$titre = "Mentions légales";
$headerImage = 'images/Quentin3.jpeg';
require "template.php";
?>