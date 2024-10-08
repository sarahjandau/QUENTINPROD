<?php
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Prestation.class.php'; 
require_once dirname(__DIR__) . '/entities/Module.class.php';
require_once dirname(__DIR__) . '/entities/Extra.class.php';
require_once dirname(__DIR__) . '/entities/Comprend.class.php';
require_once dirname(__DIR__) . '/entities/Contient.class.php';

Auth::verifyUser();

$prestation = null;

if (isset($_GET['id_prestation'])) {
    $id_prestation = $_GET['id_prestation'];

    $prestation = Prestation::getPrestationById($id_prestation);

    if (!$prestation) {
        echo "Prestation non trouvée.";
        exit();
    }
} else {
    echo "ID de prestation manquant.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['id_prestation'], $_POST['nom'], $_POST['prix'], $_POST['modules'])) {
        $id_prestation = $_POST['id_prestation'];
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $modules = $_POST['modules']; 
        $extras = $_POST['extras'] ?? []; 

        $message = Prestation::updatePrestation($id_prestation, $nom, $prix);
        echo $message;

        Comprend::removeModulesFromPrestation($id_prestation);

        Contient::removeExtrasFromPrestation($id_prestation);

        foreach ($modules as $id_module) {
            Comprend::addModuleToPrestation($id_prestation, $id_module);
        }

        foreach ($extras as $id_extra) {
            Contient::addExtraToPrestation($id_prestation, $id_extra);
        }

    } else {
        echo "Tous les champs doivent être remplis.";
    }
} else {
    $modules = Comprend::getModulesByPrestationId($id_prestation);
    $extras = Contient::getExtrasByPrestationId($id_prestation);

    if (!is_array($modules)) {
        $modules = [];
    }

    if (!is_array($extras)) {
        $extras = []; 
    }
}
?>

<div class="form-container">
    <?php if ($prestation) : ?>
        <form method="POST">
            <input type="hidden" name="id_prestation" value="<?php echo htmlspecialchars($prestation['id_prestation']); ?>">

            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($prestation['nom']); ?>" required><br>

            <label for="prix">Prix (€):</label>
            <input type="number" step="0.01" name="prix" value="<?php echo htmlspecialchars($prestation['prix']); ?>" required><br>

            <label for="modules">Modules:</label><br>
            <?php foreach (Module::getAllModules() as $module) : ?>
                <input type="checkbox" name="modules[]" value="<?php echo htmlspecialchars($module['id_module']); ?>"
                <?php echo in_array($module['id_module'], array_column($modules, 'id_module')) ? 'checked' : ''; ?>>
                <?php echo htmlspecialchars($module['nom']); ?><br>
            <?php endforeach; ?>
            <br>

            <label for="extras">Extras:</label><br>
            <?php foreach (Extra::getAllExtras() as $extra) : ?>
                <input type="checkbox" name="extras[]" value="<?php echo htmlspecialchars($extra['id_extra']); ?>"
                <?php echo in_array($extra['id_extra'], array_column($extras, 'id_extra')) ? 'checked' : ''; ?>>
                <?php echo htmlspecialchars($extra['nom']); ?><br>
            <?php endforeach; ?>

            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Prestation non trouvée.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier une prestation";
require "../public/templatecrud.php"; 
?>




