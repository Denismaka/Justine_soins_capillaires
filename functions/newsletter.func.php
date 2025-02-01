<?php
require '../functions/db.php'; // Chemin correct vers db.php
require '../assets/vendor/autoload.php'; // Inclusion de PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Vérifiez que la connexion a réussi
if (!isset($db)) {
    die("Erreur de connexion : " . $db->errorInfo());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Utilisez PDO pour échapper les caractères spéciaux
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Vérifie si l'email est déjà inscrit 
    $checkemail = "SELECT * FROM newsletter WHERE email_client=:email_client";
    $stmt = $db->prepare($checkemail);
    $stmt->bindParam(':email_client', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "Cet email est déjà inscrit.";
    } else {
        // Insère l'email dans la db
        $query = "INSERT INTO newsletter (email_client) VALUES (:email_client)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email_client', $email);

        if ($stmt->execute()) {
            // Configuration de PhpMailer pour l'envoi des emails
            $mail = new PHPMailer(true);
            try {
                // Configuration SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'makadenis370@gmail.com'; // Remplace par ton adresse gmail
                $mail->Password = 'frppvxtymsnmlfps'; // Remplace par ton Mdp ou Mdp d'application gmail
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('from@example.com', 'Newsletter');
                $mail->addAddress($email, 'Newsletter'); // Destinataire
                $mail->Subject = 'Bienvenue à notre Newsletter';
                $mail->Body = "Bonjour, \n\nMerci de vous être inscrit à notre newsletter ! Vous recevrez bientôt nos dernières nouvelles, restez informé des dernières nouvelles et innovations de soins capillaires avec notre newsletter \n\nCordialement, \nL'équipe justine soins";
                // ."
                $mail->send();
                echo "Inscription réussie et email de confirmation envoyé à $email.";
            } catch (Exception $e) {
                echo "Inscription réussie, mais l'email n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
            }
        } else {
            echo "Erreur lors de l'inscription.";
        }
    }
}

// Fermertur de  la conexion (optionnel avec PDO car cla se ft automatiquement à la fin du script)
$db = null;
