<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Prestation.class.php'; 

Auth::verifyUser(); 
$prestations = Prestation::getAllPrestations(); 
?>
<br>
<br>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir les prestations</title>
</head>
<body>
    <br><br>
    <a href="../public/createPrestation.php">Ajouter une prestation</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Modules</th> 
            <th>Extras</th>  
            <th>Actions</th>
        </tr>
        <?php foreach ($prestations as $prestation): ?>
        <tr>
            <td><?php echo htmlspecialchars($prestation['id_prestation']); ?></td>
            <td><?php echo htmlspecialchars($prestation['nom']); ?></td>
            <td><?php echo htmlspecialchars($prestation['prix']); ?></td>
            <td><?php echo htmlspecialchars($prestation['modules'] ?? 'Aucun'); ?></td>
            <td><?php echo htmlspecialchars($prestation['extras'] ?? 'Aucun'); ?></td>  
            <td>
                <a href="../public/updatePrestation.php?id_prestation=<?php echo htmlspecialchars($prestation['id_prestation']); ?>">✏️</a>
                <a href="../public/deletePrestation.php?id=<?php echo htmlspecialchars($prestation['id_prestation']); ?>">🗑️</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
$titre = "Voir les prestations";
require "../public/templatecrud.php"; 
?>

