<?php
require_once dirname(__DIR__) . '/entities/Module.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
        $message = Module::createModule($nom);
        echo $message;
    } else {
        echo "Le nom du module doit être fourni.";
    }
}
?>

<form method="POST">
    <label for="nom">Nom du Module:</label>
    <input type="text" name="nom" required>
    <input type="submit" value="Ajouter Module">
</form>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "../public/templatecrud.php";
?>