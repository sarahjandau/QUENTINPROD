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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Toute l'actualité du Water-Polo pour les Jeux Olympiques de Paris 2024</title>
</head>
<body>
    <div class="containerCrud">
        <div class="containerMenuCrud"> 
            <div class="menuHeader">
                <img src="images/logoMiniature.svg" alt="Logo Quentin Prod">
            </div>
            <nav class="menuNavigation">
                <h2>Tableau de bord</h2>
                <ul>
                    <li><a href="readEquipes.php#">Prestations</a></li>
                    <li><a href="readJoueurs.php">Modules</a></li>
                    <li><a href="readRencontres.php">Extras</a></li><br>
                    <li><a href="readUser.php">Utilisateurs</a></li>

                </ul>

                <div class="adminSection">
                    <?php if (isset($_SESSION['id_user'])): ?>
                        <a class="buttonCrud" href="/public/logout.php" class="adminButton">Se deconnecter</a>
                    <?php endif; ?>
                
                </div>
            </nav>


        </div>
        <div class="contentCrud">
            <?= $titre ?>
            <?= $content ?>
        </div>

    </div>
</body>
</html>