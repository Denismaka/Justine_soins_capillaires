<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('functions/read.func.php');
$clients = get_clients();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Clients | Salon de Coiffure</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <style>
        :root {
            --primary: #ff8000;
            --secondary: #343a40;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            background-color: #f5f5f5;
        }

        .client-management {
            padding: 3rem 0;
        }

        .page-header {
            background: var(--secondary);
            color: white;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .page-title {
            font-weight: 700;
            margin: 0;
        }

        .table-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            overflow-x: auto;
        }

        .table thead {
            background: var(--secondary);
            color: white;
        }

        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        .action-btns .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.85rem;
            margin-right: 0.3rem;
        }

        .btn-view {
            background: #17a2b8;
            color: white;
        }

        .btn-edit {
            background: var(--primary);
            color: white;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        .no-data {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
        }

        .add-client-btn {
            background: var(--primary);
            color: white;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .add-client-btn:hover {
            background: #e67300;
            color: white;
        }
    </style>
</head>

<body>
    <!-- ################## -->
    <!-- client-management -->
    <!-- ################## -->
    <div class="client-management">
        <div class="container">
            <div class="page-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="page-title"><i class="fas fa-users me-2"></i>Gestion des Clients</h1>
                    <a href="create.php" class="btn add-client-btn">
                        <i class="fas fa-plus me-2"></i>Ajouter un Client
                    </a>
                </div>
            </div>

            <?php if (isset($message)): ?>
                <div class="alert alert-info"><?= $message ?></div>
            <?php endif; ?>

            <div class="table-container">
                <?php if (!empty($clients)): ?>
                    <table id="clientsTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date/Heure</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clients as $client): ?>
                                <tr>
                                    <td><?= htmlspecialchars($client->nom) ?></td>
                                    <td><?= htmlspecialchars($client->prenom) ?></td>
                                    <td><?= htmlspecialchars($client->email) ?></td>
                                    <td><?= htmlspecialchars($client->tel) ?></td>
                                    <td><?= date('d/m/Y H:i', strtotime(htmlspecialchars($client->date_heure))) ?></td>
                                    <td class="action-btns">
                                        <a href="readSingle.php?id_clients=<?= $client->id_clients ?>&id_user=<?= $_SESSION['id_user'] ?>"
                                            class="btn btn-view" title="Voir">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <?php if ($_SESSION['id_grade'] == 1): ?>
                                            <a href="update.php?id_clients=<?= $client->id_clients ?>&id_user=<?= $_SESSION['id_user'] ?>"
                                                class="btn btn-edit" title="Modifier">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="delete.php?id_clients=<?= $client->id_clients ?>&id_user=<?= $_SESSION['id_user'] ?>"
                                                class="btn btn-delete" title="Supprimer"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="no-data">
                        <i class="fas fa-user-slash fa-3x mb-3"></i>
                        <h4>Aucun client trouvé</h4>
                        <p>Commencez par ajouter un nouveau client</p>
                        <a href="create.php" class="btn add-client-btn">
                            <i class="fas fa-plus me-2"></i>Ajouter un Client
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#clientsTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/fr-FR.json'
                },
                responsive: true,
                columnDefs: [{
                        responsivePriority: 1,
                        targets: 0
                    }, // Nom
                    {
                        responsivePriority: 2,
                        targets: 5
                    } // Actions
                ]
            });
        });
    </script>
</body>

</html>