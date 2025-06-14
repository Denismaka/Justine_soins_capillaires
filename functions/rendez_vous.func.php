<?php
session_start();
// Inclure le fichier de connexion à la base de données
include('db.php'); // Assurez-vous que le chemin est correct

// Traitement du formulaire
$message = ""; // Initialisation de la variable message
if (isset($_POST['submit'])) { // Teste si le formulaire est soumis
    $nom = htmlspecialchars(trim($_POST['nom_user']));
    $prenom = htmlspecialchars(trim($_POST['prenom_user']));
    $email = htmlspecialchars(trim($_POST['email_user']));
    $number = htmlspecialchars(trim($_POST['tel_user']));
    $date = htmlspecialchars(trim($_POST['date']));

    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($number) && !empty($date)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (email_taken($email)) {
                $message = "<font color='red'>Cette adresse email est déjà utilisée !</font>";
            } else {
                userRegister($nom, $prenom, $email, $number, $date);
                $message = "<font color='green'>Rendez-vous enregistré avec succès !</font>";
            }
        } else {
            $message = "<font color='red'>Votre adresse email n'est pas valide !</font>";
        }
    } else {
        $message = "<font color='red'>Tous les champs ne sont pas remplis !</font>";
    }
}

// La fonction qui permet de vérifier si l'email a déjà été utilisé
function email_taken($email)
{
    global $db;

    $e = ['email' => $email]; // Changer 'email_user' en 'email'

    $sql = "SELECT * FROM clients WHERE email = :email"; // Changer 'email_user' en 'email'
    $req = $db->prepare($sql);
    $req->execute($e);
    $free = $req->rowCount();
    return $free > 0; // Renvoie vrai si l'email est déjà pris
}

// La fonction qui permet à l'utilisateur de prendre rendez-vous
function userRegister($nom, $prenom, $email, $number, $date)
{
    global $db;
    $sql = "INSERT INTO clients(nom, prenom, email, tel, date_heure) 
    VALUES(:nom, :prenom, :email, :tel, :date_heure)"; // Changer les noms des colonnes

    $req = $db->prepare($sql);
    $c = [
        'nom'        => $nom, // Changer 'nom_user' en 'nom'
        'prenom'     => $prenom, // Changer 'prenom_user' en 'prenom'
        'email'      => $email, // Changer 'email_user' en 'email'
        'tel'        => $number, // Changer 'tel_user' en 'tel'
        'date_heure' => $date, // Changer 'date_heure' si nécessaire
    ];

    try {
        $req->execute($c);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

// Afficher le message après le traitement du formulaire
echo isset($message) ? $message : '';
