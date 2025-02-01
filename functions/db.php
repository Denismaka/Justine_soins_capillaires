<?php

// Vérifiez si une session est déjà active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$dbhost = 'localhost';
$dbname = 'soins_capillaires';
$dbuser = 'root';
$dbpassword = ''; // Mettez ici votre mot de passe si nécessaire

try {
    $db = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpassword, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>