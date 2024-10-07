<?php
ob_start();

$titre = "Bienvenue dans votre tableau de bord"; 
?>

<p class="navigationCrud">Naviguez à travers les différentes catégories pour ajouter, supprimer ou modifier.</p>

<?php
$content = ob_get_clean();
require "templateCrud.php";  
?>