<?php
ob_start();
require_once '../dbConnect/dbConnect.php'; 


$db = MySqlConnect::getInstance();
$conn = $db->getPdo();


$sql = "SELECT p.id_prestation, p.nom AS prestation_nom, p.prix AS prestation_prix, 
        GROUP_CONCAT(DISTINCT m.nom) AS modules, 
        GROUP_CONCAT(DISTINCT e.nom) AS extras 
        FROM prestation p 
        LEFT JOIN comprend c ON p.id_prestation = c.id_prestation 
        LEFT JOIN module m ON c.id_module = m.id_module 
        LEFT JOIN contient co ON p.id_prestation = co.id_prestation 
        LEFT JOIN extra e ON co.id_extra = e.id_extra 
        WHERE p.nom = 'Anniversaire' 
        GROUP BY p.id_prestation";

$result = $conn->query($sql);


$prestations = [];
if ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $prestations[] = [
        'id_prestation' => $row['id_prestation'],
        'nom' => $row['prestation_nom'],
        'prix' => $row['prestation_prix'],
        'modules' => !empty($row['modules']) ? explode(',', $row['modules']) : [],
        'extras' => !empty($row['extras']) ? explode(',', $row['extras']) : []
    ];
}


$conn = null;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Quentin Prod - Anniversaire</title>
</head>
<body>

<div class="informationPresta">
    <div class="presentationPresta">
        <h2> UN ANNIVERSAIRE MEMORABLE <br> AVEC UNE AMBIANCE UNIQUE !</h2> 
        <p class="aProposText">  
            Professionnalisme, réactivité et flexibilité sont au cœur de mon service. Mon approche personnalisée me permet de m’adapter à vos envies, que ce soit pour le choix des styles musicaux ou pour l’intégration d’animations comme les jeux. <br> <br>
            Toujours dynamique et présent au micro, mon objectif est simple : vous offrir une expérience sur-mesure et garantir votre entière satisfaction.
        </p>
        <div class="buttonWrapper contact">
            <a href="../public/contact.php" class="aproposbtn">CONTACTEZ-MOI</a>
        </div>
    </div>
</div>

<div class="titrePresta">
    <h2 class="banderole">PRESTATION ANNIVERSAIRE</h2>
</div>

<div class="prestationCardContainer">
    <?php if (!empty($prestations)): ?>
        <?php $prest = $prestations[0];  ?>
        <div class="cards">
            <h3><?php echo htmlspecialchars($prest['nom']); ?></h3>
            <p class="price">A partir de : <strong><?php echo htmlspecialchars($prest['prix']); ?>€</strong></p>
            <h4>Cette prestation comprend :</h4>
            <ul class="serviceList">
                <?php foreach ($prest['modules'] as $module): ?>
                    <li><?php echo htmlspecialchars($module); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="optionsPlus">
            <h4>Options en plus ?</h4>
            <ul class="options-list">
                <?php foreach ($prest['extras'] as $extra): ?>
                    <li><?php echo htmlspecialchars($extra); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else: ?>
        <p>Aucune prestation à afficher.</p>
    <?php endif; ?>
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
