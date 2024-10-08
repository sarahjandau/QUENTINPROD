<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Module.class.php'; 

Auth::verifyUser();

$module = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id_module'], $_POST['nom'])) {
        $id_module = $_POST['id_module'];
        $nom = $_POST['nom'];

        $message = Module::updateModule($id_module, $nom);
        echo $message;

        $module = Module::getModuleById($id_module);
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} elseif (isset($_GET['id_module'])) {
    // Récupère le module à partir de l'ID
    $module = Module::getModuleById($_GET['id_module']);

    if (!$module) {
        echo "Module non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID de module fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($module) : ?>
        <form method="POST">
            <input type="hidden" name="id_module" value="<?php echo htmlspecialchars($module['id_module']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($module['nom']); ?>" required><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Module non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un module";
require "../public/templateCrud.php"; 
?>
