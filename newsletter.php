<?php 
// Démarrer la session uniquement si elle n'est pas déjà active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Récupération de l'ID de l'utilisateur
if (isset($_GET['id_user'])) {
    $id_clients = intval($_GET['id_user']);
    $_SESSION['client_id'] = $id_clients;
} else {
    echo "Erreur : ID de l'utilisateur non trouvé.";
    exit;
}

include('functions/newsletter.func.php'); 

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subscribe'])) {
    $email = $_POST['email'];

    // Utilisez l'ID du client depuis la session
    if (isset($_SESSION['client_id'])) {
        $id_clients = $_SESSION['client_id'];
    } else {
        echo "Erreur : ID du client non trouvé.";
        exit;
    }

    try {
        if (subscribeToNewsletter($email, $id_clients)) {
            if (sendNewsletterEmail($email)) {
                echo "Inscription réussie ! Un email de confirmation a été envoyé.";
            } else {
                echo "L'inscription a réussi, mais l'envoi de l'email a échoué.";
            }
        } else {
            echo "Cet email est déjà inscrit.";
        }
    } catch (Exception $e) {
        echo "Une erreur est survenue : " . $e->getMessage();
    }
}
?>

<form action="" method="POST">
  <div class="input-group mb-3">
    <input type="email" name="email" placeholder="Votre email" required />
    <button type="submit" name="subscribe" class="btn">S'abonner</button>
  </div>
</form>
