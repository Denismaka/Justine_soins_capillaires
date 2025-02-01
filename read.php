<?php
session_start(); // Assurez-vous que la session est démarrée
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require('layouts/header.php');
require('functions/read.func.php');

// Récupération des clients
$clients = get_clients(); // Assurez-vous que cette fonction est définie correctement

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin-top: 200px;
            margin-left: 300px;
        }
        table th, td {
            border: 1px solid #000;
            padding: 25px;
            color: white;
            background-color: #000;
            font-weight: 600;
            cursor: pointer;
        }
        table tbody a {
            text-decoration: none;
            text-transform: capitalize;
            font-size: 15px;
            color: white;
        }
    </style>
</head>
<body>
    <?php
    if (isset($message)) {
        echo $message;
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date_heure</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($clients)): ?>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= htmlspecialchars($client->nom) ?></td>
                        <td><?= htmlspecialchars($client->prenom) ?></td>
                        <td><?= htmlspecialchars($client->email) ?></td>
                        <td><?= htmlspecialchars($client->tel) ?></td>
                        <td><?= htmlspecialchars($client->date_heure) ?></td>
                        <td>
                            <a href="readSingle.php?id_clients=<?= $client->id_clients ?>&id_user=<?= $_SESSION['id_user'] ?>">Vue |</a>
                            <?php if ($_SESSION['id_grade'] == 1): ?>
                                <a href="update.php?id_clients=<?= $client->id_clients ?>&id_user=<?= $_SESSION['id_user'] ?>">Mise à jour |</a>
                                <a href="delete.php?id_clients=<?= $client->id_clients ?>&id_user=<?= $_SESSION['id_user'] ?>">Supprimer</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Aucun client trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
