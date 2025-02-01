<?php
session_start();

if (isset($_POST['submit'])) {
    // Récupération et validation des données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $email = htmlspecialchars(trim($_POST['email'])); // Utiliser htmlspecialchars pour l'email
    $tel = htmlspecialchars(trim($_POST['tel'])); // Assurez-vous que c'est un numéro de téléphone valide
    $date_heure = htmlspecialchars(trim($_POST['date_heure']));
    $getId = intval($_GET['id_clients']); // Assurez-vous que c'est un entier

    // Vérification que les champs obligatoires ne sont pas vides
    if (!empty($nom) && !empty($prenom) && !empty($date_heure)) {
        updateClients($nom, $prenom, $email, $tel, $date_heure, $getId);
    } else {
        echo "Tous les champs ne sont pas remplis";
    }
}

// Fonction pour mettre à jour les informations du client dans la base de données
function updateClients($nom, $prenom, $email, $tel, $date_heure, $getId) {
    global $db;

    $data = [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'tel' => $tel,
        'date_heure' => $date_heure,
        'id_clients' => $getId // Correction ici pour correspondre au bon champ
    ];

    $sql = "UPDATE clients SET nom = :nom, prenom = :prenom, email = :email, tel = :tel, date_heure = :date_heure, created = NOW() 
            WHERE id_clients = :id_clients";
    
    $req = $db->prepare($sql);
    $response = $req->execute($data); 

    if ($response) {
        header("Location: read.php");
        exit(); // Ajout de exit() après header pour éviter la suite d'exécution
    }
}

// Fonction pour récupérer un client spécifique
function clientSingle() {
    global $db;
    $sql = "SELECT * FROM clients WHERE id_clients = :id_clients";
    $req = $db->prepare($sql);
    $req->execute(['id_clients' => intval($_GET['id_clients'])]); 
    
    // Vérifiez si un client a été trouvé
    $result = $req->fetchObject();
    if (!$result) {
        // Gérer le cas où aucun client n'est trouvé
        echo "Client non trouvé.";
        exit();
    }
    return $result;
}

$clients = clientSingle(); // Récupération du client

// Fonction pour récupérer les rendez-vous
function get_rendez_vous() {
    global $db;
    $req = $db->query("SELECT * FROM rendez_vous ORDER BY id_rdv DESC");
    return $req->fetchAll(PDO::FETCH_OBJ); // Récupération de tous les résultats
}

$rendez_vous = get_rendez_vous(); // Récupération des rendez-vous
?>
