<?php 
session_start() 
?>; // Démarre la session

<?php
include 'layouts/header.php';

// Vérification que l'ID est présent et est un entier
if (isset($_GET['id_clients']) && is_numeric($_GET['id_clients'])) {
    $id = intval($_GET['id_clients']); // Convertir en entier pour éviter les injections SQL

    // Préparer la requête de suppression
    $sql = "DELETE FROM clients WHERE id_clients = :id_clients";
    $query = $db->prepare($sql);
    
    // Exécuter la requête
    $response = $query->execute(['id_clients' => $id]);
    
    // Vérifier si la suppression a réussi
    if ($response) {
        header("Location: read.php");
        exit(); // Ajout de exit() pour éviter la suite d'exécution
    } else {
        echo "Erreur lors de la suppression du client.";
    }
} else {
    echo "ID du client invalide.";
}
?>
