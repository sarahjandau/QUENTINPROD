<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php
$content = ob_get_clean();
$titre = "Prestation Mariage";
$headerImage = 'images/mariage.jpg';
require "template.php";
?>