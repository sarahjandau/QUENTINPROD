<?php
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
        WHERE p.nom LIKE '%Mariage%' 
        GROUP BY p.id_prestation";

$result = $conn->query($sql);

$prestations = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
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

<?php
ob_start();
?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestations Mariage</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

<div class="informationPresta">
    <div class="presentationPresta">
        <h2>FAITES DE VOTRE MARIAGE UNE FETE INOUBLIABLE</h2> 
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
    <h2 class="banderole">NOS PACKS MARIAGE</h2>
</div>

<div class="accordeon">
    <?php if (!empty($prestations)): ?>
        <?php foreach ($prestations as $prest): ?>
            <div class="question">
                <h3><?php echo htmlspecialchars($prest['nom']); ?></h3>
                <span class="toggle-icon">+</span>
            </div>
            <div class="reponse">
                <div class="prestationCardContainer">
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
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucune prestation disponible pour le moment.</p>
    <?php endif; ?>
</div>

<div class="servicecontainer">
    <img src="images/materielDJ2.jpeg" alt="Matériel DJ" class="photomateriel">
    <div class="servicequalitecontainer">
        <h2>UN SERVICE DE QUALITÉ</h2> <br>
        <div class="sonorisation">
            <p>Profitez d'une sonorisation sans limite d'heure et d'un éclairage haut de gamme...</p>
            <h4>Éclairage et effets visuels</h4>
            <p>4 lyres sur totems avec habillage lycra...</p>
        </div>
    </div>
</div>

</body>
</html>

<?php
$content = ob_get_clean();
$titre = "PRESTATIONS MARIAGE";
$headerImage = 'images/mariage.jpg';
require "template.php";
?>
