<?php
// Inclure les classes nécessaires
require_once dirname(__DIR__) . '/entities/Module.class.php';
require_once dirname(__DIR__) . '/entities/Extra.class.php';
require_once dirname(__DIR__) . '/entities/Prestation.class.php';
require_once dirname(__DIR__) . '/entities/Comprend.class.php'; // Pour associer les modules
require_once dirname(__DIR__) . '/entities/Contient.class.php';  // Pour associer les extras

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez si le nom et le prix sont fournis, et si au moins un module est coché
    if (isset($_POST['nom'], $_POST['prix'], $_POST['modules']) && !empty($_POST['modules'])) {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $modules = $_POST['modules']; 
        $extras = $_POST['extras'] ?? []; 

        // Appel à la méthode pour créer la prestation
        $message = Prestation::createPrestation($nom, $prix);
        echo $message;

        // Récupérer l'ID de la prestation créée
        $id_prestation = MyDbConnection::getInstance()->getPdo()->lastInsertId();

        // Associer les modules à la prestation
        foreach ($modules as $id_module) {
            Comprend::addModuleToPrestation($id_prestation, $id_module);
        }

        // Associer les extras (s'ils existent) à la prestation
        foreach ($extras as $id_extra) {
            Contient::addExtraToPrestation($id_prestation, $id_extra);
        }

        echo "Extra ajoutées avec succès.";
    } else {
        echo "Le nom, le prix et au moins un module doivent être fournis.";
    }
}

// Récupérer tous les modules et extras
$modules = Module::getAllModules();
$extras = Extra::getAllExtras();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Prestation</title>
    <script>
        function validateForm() {
            // Vérifie si au moins un module est coché
            const moduleCheckboxes = document.querySelectorAll('input[name="modules[]"]');
            const isChecked = Array.from(moduleCheckboxes).some(checkbox => checkbox.checked);
            if (!isChecked) {
                alert("Veuillez cocher au moins un module.");
                return false; // Bloque l'envoi du formulaire
            }
            return true; // Autorise l'envoi du formulaire
        }
    </script>
</head>
<body>
    <form method="POST" onsubmit="return validateForm();">
        <label for="nom">Nom de la Prestation:</label>
        <input type="text" name="nom" required><br>

        <label for="prix">Prix:</label>
        <input type="number" name="prix" step="0.01" required><br>

        <label for="modules">Modules (obligatoires):</label>
        <br>
        <?php foreach ($modules as $module) : ?>
            <input type="checkbox" name="modules[]" value="<?php echo htmlspecialchars($module['id_module']); ?>">
            <?php echo htmlspecialchars($module['nom']); ?><br>
        <?php endforeach; ?>

        <br>
        <label for="extras">Extras (facultatifs):</label>
        <?php foreach ($extras as $extra) : ?>
            <input type="checkbox" name="extras[]" value="<?php echo htmlspecialchars($extra['id_extra']); ?>">
            <?php echo htmlspecialchars($extra['nom']); ?><br>
        <?php endforeach; ?>

        <input type="submit" value="Ajouter Prestation">
    </form>
</body>
</html>

<?php
$content = ob_get_clean();
$titre = "Ajouter une Prestation";
require "../public/templatecrud.php";
?>


