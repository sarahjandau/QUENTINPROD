<?php
ob_start();
require_once dirname(__DIR__). '/entities/Auth.class.php';
require_once dirname(__DIR__). '/entities/User.class.php';

Auth::verifyUser();

if (isset($_POST['id_user'])) {
    $id_user = $_POST['id_user']; 
    $message = User::deleteUser($id_user);
    echo $message;
}

$users = User::getAllUsers();
?>

<form class="form-container" method="POST">
    <label for="id_user">Utilisateur:</label>
    <select name="id_user" required> 
        <?php foreach ($users as $user) : ?>
            <option value="<?php echo htmlspecialchars($user['id_user']); ?>">
                <?php echo htmlspecialchars($user['prenom'] . ' ' . $user['nom']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer un utilisateur";
require "../public/templatecrud.php";
?>