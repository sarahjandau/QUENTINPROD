<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Extra.class.php'; 

Auth::verifyUser();

$extra = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifie si les champs requis sont présents
    if (isset($_POST['id_extra'], $_POST['nom'], $_POST['prix'])) {
        $id_extra = $_POST['id_extra'];
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];

        // Mise à jour de l'extra
        $message = Extra::updateExtra($id_extra, $nom, $prix);
        echo $message;

        // Récupère les informations de l'extra après la mise à jour
        $extra = Extra::getExtraById($id_extra);
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} elseif (isset($_GET['id_extra'])) {
    // Récupère l'extra à partir de l'ID
    $extra = Extra::getExtraById($_GET['id_extra']);

    if (!$extra) {
        echo "Extra non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID d'extra fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($extra) : ?>
        <form method="POST">
            <input type="hidden" name="id_extra" value="<?php echo htmlspecialchars($extra['id_extra']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($extra['nom']); ?>" required><br>
            <label for="prix">Prix (€):</label>
            <input type="number" step="0.01" name="prix" value="<?php echo htmlspecialchars($extra['prix']); ?>" required><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Extra non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un extra";
require "../public/templateCrud.php"; 
?>
