<?php
ob_start();
require_once 'dbConnect/dbConnect.php'; 

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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Quentin Prod</title>
</head>
<body>

<div class="aPropos">
    <img src="public/images/Quentin1.jpeg" alt="" class="photoQuentin">
    <div class="presentation">
        <h2 class="quentinProd">QUENTIN PROD A <br> VOTRE SERVICE</h2> <br>
        <p class="aProposText"> Professionnalisme, réactivité et flexibilité sont au cœur de mon service. Mon approche personnalisée me permet de m’adapter à vos envies, que ce soit pour le choix des styles musicaux ou pour l’intégration d’animations comme les jeux. 
            <br> <br>Toujours dynamique et présent au micro, mon objectif est simple : vous offrir une expérience sur-mesure et garantir votre entière satisfaction.
        </p>
        <div class="buttonWrapper">
            <a href="../public/contact.php" class="aproposbtn">EN SAVOIR PLUS</a>
        </div>

    </div>
</div>

<h2> NOS PRESTATIONS </h2>

<div class="cardsContainer">
    <?php if (!empty($prestations)): ?>
        <?php
        $limit = 0; 
        foreach ($prestations as $prest):
            if ($limit >= 3) break; 
            ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($prest['nom']); ?></h3>
                <h6>A partir de :</h6>
                <div class="prix"><?php echo htmlspecialchars($prest['prix']); ?>€</div>
                <div class="description">
                    <ul>
                        <?php foreach ($prest['modules'] as $module): ?>
                            <li><?php echo htmlspecialchars($module); ?></li>
                        <?php endforeach; ?>
                        <?php foreach ($prest['extras'] as $extra): ?>
                            <li><?php echo htmlspecialchars($extra); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="public/prestationMariage.php">
                    <button class="voirTout">VOIR TOUT</button>
                </a>
            </div>
            <?php
            $limit++; 
        endforeach; ?>
    <?php else: ?>
        <p>Aucune prestation à afficher.</p>
    <?php endif; ?>
</div>

<div class="evenementSpecial">
    <h2> UN EVENEMENT SPECIAL? <br> NOUS FAISONS DES DEVIS PERSONNALISES:</h2>
    <div class="buttonWrapper contact">
        <a href="../public/contact.php" class="aproposbtn">CONTACTEZ-MOI</a>
    </div>

</div>


  <div id="cookieModal" class="modal">
    <div class="modal-content">
      <h2>Utilisation des Cookies</h2>
      <p>Ce site Web utilise des cookies ou des technologies similaires pour améliorer votre expérience de navigation et fournir des recommandations personnalisées. En continuant à utiliser notre site Web, vous acceptez notre politique d'utilisation des cookies.</p>
      <button id="acceptCookies">Accepter</button>
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


