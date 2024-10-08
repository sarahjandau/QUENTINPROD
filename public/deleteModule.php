<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Module.class.php'; // Assurez-vous que le chemin est correct

// Vérifie que l'utilisateur est connecté
Auth::verifyUser();

// Supprimer un module si l'ID est fourni
if (isset($_POST['id_module'])) {
    $id_module = $_POST['id_module']; 
    $message = Module::deleteModule($id_module);
    echo $message;
}

// Récupération de tous les modules
$modules = Module::getAllModules();
?>

<form class="form-container" method="POST">
    <label for="id_module">Module:</label>
    <select name="id_module" required> 
        <?php foreach ($modules as $module) : ?>
            <option value="<?php echo htmlspecialchars($module['id_module']); ?>">
                <?php echo htmlspecialchars($module['nom']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer un module";
require "../public/templatecrud.php"; // Assurez-vous que le chemin est correct
?>