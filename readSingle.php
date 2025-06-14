<?php
session_start();
require('layouts/header.php');
require('functions/viewSingle.func.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Client | Salon de Coiffure</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <style>
        :root {
            --primary: #ff8000;
            --secondary: #343a40;
            --light: #f8f9fa;
            --dark: #212529;
        }

        .profile-section {
            background-color: var(--light);
            min-height: 100vh;
            padding: 5rem 0;
        }

        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .profile-header {
            background: var(--secondary);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .profile-title {
            font-weight: 700;
            margin-bottom: 0;
        }

        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            margin-top: -100px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-body {
            padding: 2rem;
        }

        .info-item {
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1rem;
        }

        .info-label {
            font-weight: 600;
            color: var(--primary);
            display: block;
            margin-bottom: 0.5rem;
        }

        .info-value {
            font-size: 1.1rem;
        }

        .action-btns {
            margin-top: 2rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .btn-edit {
            background: var(--primary);
            color: white;
        }

        .btn-back {
            background: var(--secondary);
            color: white;
        }
    </style>
</head>

<body>

    <!-- ############## -->
    <!-- Profil -->
    <!-- ############## -->
    <section class="profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="profile-card">
                        <div class="profile-header">
                            <h1 class="profile-title">Profil Client</h1>
                        </div>

                        <div class="text-center">
                            <img src="/assets/images/dmk.jpg" alt="Photo de profil" class="profile-img">
                        </div>

                        <div class="profile-body">
                            <div class="info-item">
                                <span class="info-label"><i class="fas fa-user me-2"></i>Nom complet</span>
                                <p class="info-value"><?= htmlspecialchars($clients->prenom) ?> <?= htmlspecialchars($clients->nom) ?></p>
                            </div>

                            <div class="info-item">
                                <span class="info-label"><i class="fas fa-envelope me-2"></i>Email</span>
                                <p class="info-value"><?= htmlspecialchars($clients->emailt) ?></p>
                            </div>

                            <div class="info-item">
                                <span class="info-label"><i class="fas fa-phone me-2"></i>Téléphone</span>
                                <p class="info-value"><?= htmlspecialchars($clients->tel) ?></p>
                            </div>

                            <div class="info-item">
                                <span class="info-label"><i class="fas fa-calendar-alt me-2"></i>Rendez-vous</span>
                                <p class="info-value">#<?= htmlspecialchars($clients->id_rdv) ?></p>
                            </div>

                            <div class="action-btns">
                                <a href="/edit.php?id=<?= $clients->id ?>" class="btn btn-edit btn-lg">
                                    <i class="fas fa-edit me-2"></i> Modifier
                                </a>
                                <a href="/clients.php" class="btn btn-back btn-lg">
                                    <i class="fas fa-arrow-left me-2"></i> Retour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php require('layouts/footer.php'); ?>