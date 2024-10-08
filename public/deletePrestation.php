<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Prestation.class.php'; 
require_once dirname(__DIR__) . '/entities/Comprend.class.php'; 
require_once dirname(__DIR__) . '/entities/Contient.class.php'; 

Auth::verifyUser();

if (isset($_POST['id_prestation'])) {
    $id_prestation = $_POST['id_prestation']; 
    
    Comprend::removeModulesFromPrestation($id_prestation);

    Contient::removeExtrasFromPrestation($id_prestation);

    $message = Prestation::deletePrestation($id_prestation);
    echo $message;
}

$prestations = Prestation::getAllPrestations();
?>

<form class="form-container" method="POST">
    <label for="id_prestation">Prestation:</label>
    <select name="id_prestation" required>
        <?php foreach ($prestations as $prestation) : ?>
            <option value="<?php echo htmlspecialchars($prestation['id_prestation']); ?>">
                <?php echo htmlspecialchars($prestation['nom']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer une prestation";
require "../public/templatecrud.php"; 
?>

