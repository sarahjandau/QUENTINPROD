<?php
require_once dirname(__DIR__) . '/entities/Extra.class.php'; 

ob_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['nom'], $_POST['prix'])){
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];

        $message = Extra::createExtra($nom, $prix);
        echo $message;
    } else {
        echo "Le nom et le prix de l'extra doivent être fournis.";
    }
}
?>

<form method="POST">
    <label for="nom">Nom de l'Extra:</label>
    <input type="text" name="nom" required>
    
    <label for="prix">Prix de l'Extra:</label>
    <input type="number" name="prix" step="0.01" required> 
    
    <input type="submit" value="Ajouter Extra">
</form>

<?php
$content = ob_get_clean();
$titre = "Ajouter un Extra";
require "../public/templatecrud.php"; 
?>
