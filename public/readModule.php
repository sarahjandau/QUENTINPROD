<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Module.class.php'; 

Auth::verifyUser();
$modules = Module::getAllModules(); 
?>
<br>
<br>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir les modules</title>

</head>
<body>
    <br><br>
    <a href="../public/createModule.php">Ajouter un module</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($modules as $module): ?>
        <tr>
            <td><?php echo htmlspecialchars($module['id_module']); ?></td>
            <td><?php echo htmlspecialchars($module['nom']); ?></td>
            <td>
                <a href="../public/updateModule.php?id_module=<?php echo htmlspecialchars($module['id_module']); ?>">✏️</a>
                <a href="../public/deleteModule.php?id=<?php echo htmlspecialchars($module['id_module']); ?>">🗑️</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

<?php
$content = ob_get_clean();
$titre = "Voir les modules";
require "../public/templatecrud.php"; 
?>
