<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/dbConnect/MyDbConnection.php';
require_once dirname(__DIR__). '/entities/User.class.php';

Auth::verifyUser();

if (isset($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['password'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $message = User::createUser($nom, $prenom, $mail, $password);
    echo $message;
} else {
    echo "Tous les champs du formulaire doivent être remplis.";
}
?>

<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>
        <label for="mail">Email:</label>
        <input type="email" name="mail" required><br> 
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Ajouter utilisateur">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require "../public/templatecrud.php";
?>
