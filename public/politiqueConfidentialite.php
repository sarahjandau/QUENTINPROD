<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de confidentialité</title>
</head>
<body>
    <div class="mentionslegales">
        <h2> Politique de confidentialité</h2>

        <h3> Introduction</h3>
        <p>
            Cette politique de confidentialité décrit les pratiques de MONSIEUR QUENTIN GORGIBUS concernant la collecte, l'utilisation et la protection des informations personnelles fournies par les utilisateurs du site, notamment via le formulaire de contact.
        </p> <br>

        <h3> 2. Responsable du Traitement des Données</h3>
        <p>
        Le responsable du traitement des données est MONSIEUR QUENTIN GORGIBUS, dont le siège social est situé au 16 RUE CHANZY, 59240 DUNKERQUE, et qui peut être contacté par e-mail à l’adresse suivante : gorgibusquentin@gmail.com.
        </p>
        
        <h3> 3. Données collectées  </h3>

        <p> Dans le cadre de l’utilisation du formulaire de contact, nous collectons et traitons les données personnelles suivantes :

            Nom et prénom : pour identifier l'utilisateur et faciliter la communication.
            Adresse e-mail : pour répondre aux demandes formulées via le formulaire de contact.
            Numéro de téléphone : pour une prise de contact directe si nécessaire.
            Message : pour comprendre la demande et y répondre de manière adéquate.
        </p> <br>


        <h3>4. Finalités du Traitement des Données</h3>
        <p> Les données collectées sont traitées pour les finalités suivantes :

            Répondre aux questions et demandes des utilisateurs ;
            Assurer le suivi de la relation avec les utilisateurs en cas de besoin ;
            Améliorer nos services en tenant compte des suggestions et demandes des utilisateurs.
        </p> <br>

        <h3>5. Base Légale du Traitement</h3>
        </p>
        Le traitement des données personnelles repose sur le consentement explicite de l’utilisateur, 
        donné au moment de la soumission du formulaire de contact.
        <p>
            

        <h3>6. Destinataires des Données</h3>
        <p> 
            Les données personnelles collectées sont uniquement accessibles par MONSIEUR QUENTIN GORGIBUS et les membres autorisés de 
            son équipe dans le cadre de la gestion des demandes et communications avec les utilisateurs.

        </p> <br>


        <h3>7. Durée de Conservation des Données</h3>
        <p>
            Les données personnelles sont conservées uniquement le temps nécessaire au traitement de la demande de l’utilisateur et 
            pour toute la durée nécessaire au suivi de la relation avec l’utilisateur. Une fois la finalité accomplie, les données sont supprimées, sauf obligation légale de conservation.
        </p> <br>

        <h3>8. Droits des Utilisateurs</h3>
        <p>
            Conformément au Règlement Général sur la Protection des Données (RGPD), les utilisateurs disposent des droits suivants concernant leurs données personnelles :

            Droit d’accès : possibilité de consulter les données personnelles que nous détenons.
            Droit de rectification : possibilité de corriger les informations inexactes ou incomplètes.
            Droit à l’effacement : possibilité de demander la suppression de leurs données personnelles, dans certaines conditions.
            Droit d’opposition : possibilité de s’opposer au traitement de leurs données dans certaines situations.
            Droit à la portabilité : possibilité de recevoir leurs données personnelles dans un format structuré.
            Pour exercer ces droits, l’utilisateur peut contacter MONSIEUR QUENTIN GORGIBUS par e-mail à gorgibusquentin@gmail.com ou par courrier postal à l’adresse suivante : 16 RUE CHANZY, 59240 DUNKERQUE.
        </p> <br>

        <h3>9. Sécurité des Données</h3>
        <p>
            Nous mettons en œuvre les mesures de sécurité appropriées pour protéger les données personnelles contre tout accès, modification, 
            divulgation ou destruction non autorisés.
        </p>

        <h3>10. Cookies </h3>
        <p>
            Le site peut utiliser des cookies pour améliorer l'expérience utilisateur. Un bandeau d’information est affiché lors de la première visite, permettant d'accepter ou de refuser l'utilisation des cookies.

        </p>

        <h3>11. Modification de la Politique de Confidentialité </h3>
        <p> Cette politique de confidentialité peut être mise à jour afin de respecter les exigences légales et réglementaires. Nous recommandons 
            aux utilisateurs de consulter régulièrement cette page pour être informés des éventuelles modifications.
        </p>

        <h3>11. Contact </h3>
        <p>
        Pour toute question relative à cette politique de confidentialité ou pour toute demande concernant leurs données personnelles, les utilisateurs peuvent contacter MONSIEUR QUENTIN GORGIBUS à l’adresse e-mail suivante : georgibusquentin@gmail.com.
        </p>



    </div>
    


</body>
</html>

<?php
$content = ob_get_clean();
$titre = "Politique de confidentialité";
$headerImage = 'images/Quentin3.jpeg';
require "template.php";
?>