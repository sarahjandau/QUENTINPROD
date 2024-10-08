<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Extra.class.php'; // Assurez-vous que le chemin est correct

Auth::verifyUser();
$extras = Extra::getAllExtras(); // Récupère tous les extras
?>
<br>
<br>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir les extras</title>
</head>
<body>
    <br><br>
    <a href="../public/createExtra.php">Ajouter un extra</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($extras as $extra): ?>
        <tr>
            <td><?php echo htmlspecialchars($extra['id_extra']); ?></td>
            <td><?php echo htmlspecialchars($extra['nom']); ?></td>
            <td><?php echo htmlspecialchars($extra['prix']); ?> €</td> <!-- Affiche le prix avec le symbole euro -->
            <td>
                <a href="../public/updateExtra.php?id_extra=<?php echo htmlspecialchars($extra['id_extra']); ?>">✏️</a>
                <a href="../public/deleteExtra.php?id=<?php echo htmlspecialchars($extra['id_extra']); ?>">🗑️</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
$titre = "Voir les extras";
require "../public/templatecrud.php"; 
?>
