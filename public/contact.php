<?php
ob_start();
require '../vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    extract($_POST);

    if (!empty($prestations) && !empty($name) && !empty($email) && !empty($message) && !empty($telephone)) {
        
        if (!preg_match('/^\d{10}$/', $telephone)) {
            echo "Erreur : Le numéro de téléphone doit contenir exactement 10 chiffres.";
            exit; 
        }

        $to = "quentin.prod@outlook.fr";
        $subject = $prestations;

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp-mail.outlook.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'quentin.prod@outlook.fr'; // Votre adresse e-mail
            $mail->Password = 'vfvyncxcrqollsny'; // Votre nouveau mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS
            $mail->Port = 587; // Utilisez le port TLS
            $mail->SMTPDebug = 2; // Niveau de débogage
            $mail->Debugoutput = 'html'; // Format de sortie





            $mail->setFrom($email, $name);
            $mail->addAddress($to);

            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body = "Nom et Prénom: $name\nNuméro de téléphone: $telephone\nE-mail: $email\nMessage:\n$message\n";

            $mail->send();
            
            header('Location: contact.php?success=1');
            exit(); 
        } catch (Exception $e) {
            echo "Erreur : {$mail->ErrorInfo}";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Quentin Prod</title>
</head>
<body>

<h2>Formulaire de Contact</h2>

<div class="containerContact">
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <p style="color: green; font-weight: bold;">Votre message a bien été envoyé. Merci de nous avoir contactés !</p>
    <?php else: ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nom et Prénom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="prestations">Prestations :</label>
                <select id="prestations" name="prestations" required>
                    <option value="" disabled selected>Choisissez une prestation</option>
                    <option value="Prestation Mariage">Mariage</option>
                    <option value="Prestation Bapteme">Bapteme</option>
                    <option value="Prestation Anniversaire">Anniversaire</option>
                    <option value="Autre question">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required pattern="\d{10}" title="Le numéro de téléphone doit contenir 10 chiffres.">
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" name="submit">Envoyer</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>

<?php
$content = ob_get_clean();
$titre = "CONTACTEZ-NOUS";
$headerImage = 'images/header.jpg';
require "template.php";
?>

