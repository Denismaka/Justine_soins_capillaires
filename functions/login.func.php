<?php
session_start();

if (isset($_POST['submit'])) {
    // Validation rigoureuse
    $email_user = filter_var($_POST['email_user'] ?? '', FILTER_VALIDATE_EMAIL);
    $motpass_user = $_POST['motpass_user'] ?? '';

    if ($email_user && !empty($motpass_user)) {
        require_once 'functions/db.php';

        if (userExists($email_user)) {
            $user = getUser($email_user);

            if ($user && password_verify($motpass_user, $user['motpass_user'])) {
                $_SESSION['user'] = [
                    'id' => $user['id_user'],
                    'name' => $user['nom_user'],
                    'email' => $user['email_user'],
                    'role' => $user['id_grade']
                ];

                if (!headers_sent()) {
                    header('Location: ' . ($user['id_grade'] == 1 ? 'dashboard.php' : 'index.php'));
                    exit();
                }
            }
        }
        $_SESSION['error'] = "Identifiants incorrects";
    } else {
        $_SESSION['error'] = "Tous les champs doivent être valides";
    }
    header('Location: login.php');
    exit();
}

// Fonctions optimisées
function userExists(string $email): bool
{
    global $db;
    $stmt = $db->prepare("SELECT 1 FROM users WHERE email_user = ?");
    $stmt->execute([$email]);
    return (bool)$stmt->fetchColumn();
}

function getUser(string $email): ?array
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE email_user = ?");
    $stmt->execute([$email]);
    return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
}
