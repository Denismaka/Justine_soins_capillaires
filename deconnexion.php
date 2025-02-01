<?php
session_start(); // Démarre la session

// Vider toutes les variables de session
$_SESSION = array();

// Détruire la session
session_destroy();

// Rediriger vers la page d'accueil
header('Location: index.php');
exit(); // Toujours utiliser exit() après header()
?>
