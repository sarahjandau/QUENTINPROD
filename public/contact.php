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


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les données
    $nomPrenom = htmlspecialchars(trim($_POST['nomPrenom']));
    $prestations = htmlspecialchars(trim($_POST['prestations']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Destinataire et sujet de l'e-mail
    $destinataire = "sarah.jandau@gmail.com"; // Remplacez par votre adresse e-mail
    $sujet = "Nouveau message de contact";

    // Corps de l'e-mail
    $corps = "Nom et Prénom: $nomPrenom\n";
    $corps .= "Prestations: $prestations\n";
    $corps .= "E-mail: $email\n";
    $corps .= "Téléphone: $telephone\n";
    $corps .= "Message:\n$message\n";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corps, $headers)) {
        $messageSuccess = "Votre message a été envoyé avec succès!";
    } else {
        $messageError = "Une erreur s'est produite lors de l'envoi de votre message.";
    }
}

if (isset($messageSuccess)) {
    echo "<div class='message' style='color: green;'>$messageSuccess</div>";
}
if (isset($messageError)) {
    echo "<div class='message' style='color: red;'>$messageError</div>";
}
?>



<h2>Formulaire de Contact</h2>


<form action="" method="post">
    <div class="form-group">
        <label for="nomPrenom">Nom et Prénom :</label>
        <input type="text" id="nomPrenom" name="nomPrenom" required>
    </div>
    <div class="form-group">
        <label for="prestations">Prestations :</label>
        <select id="prestations" name="prestations" required>
            <option value="" disabled selected>Choisissez une prestation</option>
            <option value="prestation1">Prestation 1</option>
            <option value="prestation2">Prestation 2</option>
            <option value="prestation3">Prestation 3</option>
            <option value="prestation4">Prestation 4</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>
    </div>
    <div class="form-group">
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>

</body>
</html>
</body>
</html>






<?php
$content = ob_get_clean();
$titre = "CONTACTEZ-NOUS";
$headerImage = 'images/Quentin1.jpg';
require "template.php";
?>