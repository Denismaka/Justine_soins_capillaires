<?php
session_start(); // Démarre la session

include 'db.php'; // Inclut le fichier de connexion à la base de données

if (isset($_POST['submit'])) { // Teste si le formulaire est soumis 
    $nom = htmlspecialchars(trim($_POST['nom_user']));
    $prenom = htmlspecialchars(trim($_POST['prenom_user']));
    $email = htmlspecialchars(trim($_POST['email_user']));
    $motpass = htmlspecialchars(trim($_POST['motpass_user']));
    $motpass_repeat = htmlspecialchars(trim($_POST['motpass_repeat']));

    $token = token(30);

    if (!empty($nom) && !empty($prenom) && !empty($email) 
        && !empty($motpass) && !empty($motpass_repeat)) {

        $motpasslength = strlen($motpass);
        if ($motpasslength >= 8) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (email_taken($email)) {
                    $_SESSION['message'] = "<font color='red'>Cette adresse email est déjà utilisée !</font>";
                } else {
                    if ($motpass == $motpass_repeat) {
                        $longeurCle = 15;
                        $Cle = "";
                        for ($i = 1; $i < $longeurCle; $i++) {
                            $Cle .= mt_rand(0, 9);
                        }

                        userRegister($nom, $prenom, $email, $motpass, $Cle, $token);
                        $_SESSION['message'] = "<font color='green'>Utilisateur enregistré avec succès !</font>";
                        header("Location: dashboard.php"); // Redirection
                        exit(); // Stoppe l'exécution du script
                    } else {
                        $_SESSION['message'] = "<font color='red'>Les deux mots de passes ne sont pas identiques !</font>";
                    }
                }
            } else {
                $_SESSION['message'] = "<font color='red'>Votre adresse email n'est pas valide !</font>";
            }
        } else {
            $_SESSION['message'] = "<font color='red'>Mot de passe trop court !</font>";
        }
    } else {
        $_SESSION['message'] = "<font color='red'>Tous les champs ne sont pas remplis !</font>";
    }
}

// La fonction qui permet à l'utilisateur de créer son compte
function userRegister($nom, $prenom, $email, $motpass, $Cle, $token) {
    global $db; // Utilise la variable de connexion
    $sql = "INSERT INTO users(nom_user, prenom_user, email_user, motpass_user, cle_user, token_user, created) VALUES(:nom_user, :prenom_user, :email_user, :motpass_user, :cle_user, :token_user, NOW())";
    $req = $db->prepare($sql);
    $c = [
        'nom_user'     => $nom,
        'prenom_user'  => $prenom,
        'email_user'   => $email,
        'motpass_user' => sha1($motpass),
        'cle_user'     => $Cle,
        'token_user'   => $token,
    ];
    $req->execute($c);
}

// La fonction qui permet de vérifier si l'email a déjà été utilisé
function email_taken($email) {
    global $db; // Utilise la variable de connexion
    $e = ['email_user' => $email];
    $sql = "SELECT * FROM users WHERE email_user = :email_user";
    $req = $db->prepare($sql);
    $req->execute($e);
    return $req->rowCount() > 0; // Renvoie vrai si l'email est pris
}

// La fonction qui permet de générer un token pour l'utilisateur créé
function token($length) {
    $chars = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
    return substr(str_shuffle(str_repeat($chars, $length)), 0, $length);
}