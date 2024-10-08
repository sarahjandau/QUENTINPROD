<?php
require_once dirname(__DIR__) . '/entities/Extra.class.php'; // Assurez-vous que le chemin est correct

ob_start(); // Démarre la mise en mémoire tampon de sortie

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom'], $_POST['prix'])) {
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];

        // Crée un nouvel extra
        $message = Extra::createExtra($nom, $prix);
        echo $message;
    } else {
        echo "Le nom et le prix de l'extra doivent être fournis.";
    }
}
?>

<!-- Formulaire pour ajouter un nouvel extra -->
<form method="POST">
    <label for="nom">Nom de l'Extra:</label>
    <input type="text" name="nom" required>
    
    <label for="prix">Prix de l'Extra:</label>
    <input type="number" name="prix" step="0.01" required> <!-- Utiliser "step" pour des valeurs décimales -->
    
    <input type="submit" value="Ajouter Extra">
</form>

<?php
$content = ob_get_clean(); // Récupère le contenu mis en mémoire tampon
$titre = "Ajouter un Extra"; // Titre de la page
require "../public/templatecrud.php"; // Inclut le modèle
?>
