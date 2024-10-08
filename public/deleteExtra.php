<?php
ob_start();
require_once dirname(__DIR__) . '/entities/Auth.class.php';
require_once dirname(__DIR__) . '/entities/Extra.class.php'; 

Auth::verifyUser();


if (isset($_POST['id_extra'])) {
    $id_extra = $_POST['id_extra']; 
    $message = Extra::deleteExtra($id_extra);
    echo $message;
}


$extras = Extra::getAllExtras();
?>

<form class="form-container" method="POST">
    <label for="id_extra">Extra:</label>
    <select name="id_extra" required> 
        <?php foreach ($extras as $extra) : ?>
            <option value="<?php echo htmlspecialchars($extra['id_extra']); ?>">
                <?php echo htmlspecialchars($extra['nom']); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Supprimer">
</form>

<?php
$content = ob_get_clean();
$titre = "Supprimer un extra";
require "../public/templatecrud.php"; 
?>
