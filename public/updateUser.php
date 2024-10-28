<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/User.class.php';

Auth::verifyUser();

$user = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['id_user'], $_POST['nom'], $_POST['prenom'], $_POST['email'])){
        $id_user = $_POST['id_user'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'] ?? null; 

        $message = User::updateUser($id_user, $nom, $prenom, $email, $password);
        echo $message;

        $user = User::getUserById($id_user);
    } else {
        echo "Tous les champs doivent être remplis.";
    }
} elseif (isset($_GET['id_user'])){
    $user = User::getUserById($_GET['id_user']);

    if (!$user){
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID d'utilisateur fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($user) : ?>
        <form method="POST">
            <input type="hidden" name="id_user" value="<?php echo htmlspecialchars($user['id_user']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($user['nom']); ?>" required><br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?php echo htmlspecialchars($user['prenom']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['mail']); ?>" required><br>
            <label for="password">Nouveau mot de passe:</label>
            <input type="password" name="password"><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Utilisateur non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require "../public/templateCrud.php";
?>

