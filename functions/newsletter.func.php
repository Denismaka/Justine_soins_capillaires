<?php
// Démarrer la session uniquement si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inclure le fichier de connexion à la base de données
require 'db.php';

// Vérifiez si l'ID du client est passé dans l'URL
if (isset($_GET['id_user'])) {
    $id_clients = intval($_GET['id_user']);
    $_SESSION['client_id'] = $id_clients; // Stocke l'ID dans la session
} else {
    echo "Erreur : ID de l'utilisateur non trouvé.";
    exit;
}

// Vérifiez si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitize l'email

    // Vérifiez que l'email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erreur : Email invalide.";
        exit;
    }

    // Appel de la fonction d'inscription à la newsletter
    $result = subscribeToNewsletter($email, $_SESSION['client_id']);

    if ($result === true) {
        if (sendNewsletterEmail($email)) {
            echo "Inscription réussie à la newsletter ! Un email de confirmation a été envoyé.";
        } else {
            echo "Inscription réussie à la newsletter, mais l'envoi de l'email a échoué.";
        }
    } elseif ($result === 'client_not_found') {
        // echo "Erreur : L'ID du client n'existe pas.";
    } elseif ($result === 'email_already_subscribed') {
        echo "Cet email est déjà inscrit.";
    } else {
        echo "Erreur : Une erreur s'est produite lors de l'inscription.";
    }
}

// Fonction d'inscription à la newsletter
function subscribeToNewsletter($email, $id_clients) {
    global $db;

    // Vérifiez si l'ID du client existe dans la table clients
    $sql = "SELECT * FROM clients WHERE id_clients = :id_clients";
    $query = $db->prepare($sql);
    $query->execute(['id_clients' => $id_clients]);

    if ($query->rowCount() === 0) {
        return 'client_not_found'; // Retourne 'client_not_found' si l'ID n'existe pas
    }

    // Vérifiez si l'email est déjà inscrit
    $sql = "SELECT * FROM newsletter WHERE email_client = :email_client";
    $query = $db->prepare($sql);
    $query->execute(['email_client' => $email]);

    if ($query->rowCount() > 0) {
        return 'email_already_subscribed'; // Retourne 'email_already_subscribed' si l'email est déjà inscrit
    }

    // Inscription à la newsletter
    $sql = "INSERT INTO newsletter (email_client, date_inscription, id_clients) 
            VALUES (:email_client, NOW(), :id_clients)";
    $query = $db->prepare($sql);
    $result = $query->execute(['email_client' => $email, 'id_clients' => $id_clients]);

    if ($result) {
        return true; // Retourne true si l'inscription a réussi
    } else {
        return false; // Retourne false en cas d'erreur
    }
}

// Fonction pour envoyer un email de bienvenue
function sendNewsletterEmail($email) {
    $subject = "Bienvenue à la Newsletter";
    $message = "Restez informé des dernières nouvelles et innovations de soins capillaires avec notre newsletter.";
    $headers = "From: jsc123@.com\r\n";

    return mail($email, $subject, $message, $headers);
}
