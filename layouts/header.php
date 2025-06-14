<?php
// session_start(); // Démarre la session
include 'functions/db.php';

// Vérifie si l'utilisateur est connecté et a le grade 1
if (isset($_SESSION['user_id']) && $_SESSION['grade'] == 1) {
    header("Location: dashboard.php"); // Redirige vers le dashboard
    exit(); // Termine le script
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Justine soins capillaires (JSC)</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/fonts/css/all.min.css" />
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- ############## -->
    <!-- Header -->
    <!-- ############## -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3">
            <div class="container-fluid">
                <a class="navbar fw-bold fs-4 text-decoration-none" style="color: #9B9D9E;" href="index.php">Justine soins capillaires</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#galeries">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#témoignages">Témoignages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#blog">Blog</a>
                        </li>

                        <?php if (isset($_GET['id_user'])) : ?>
                            <?php if ($_SESSION['id_grade'] != 3) : ?>
                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link fw-bold ms-lg-3" href="dashboard.php?id_user=<?= $_SESSION['id_user'] ?>">
                                        <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                                    </a>
                                </li>
                            <?php endif; ?>

                            <li class="nav-item">
                                <span class="nav-link text-white fw-bold d-flex align-items-center">
                                    <i class="fas fa-user-circle me-2"></i>
                                    <?= htmlspecialchars($_SESSION['prenom_user']) ?> <?= htmlspecialchars($_SESSION['nom_user']) ?>
                                </span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="logout.php">
                                    <i class="fas fa-sign-out-alt me-1"></i> Déconnexion
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-light me-2" href="login.php">
                                    <i class="fas fa-sign-in-alt me-1"></i> Connexion
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-danger" href="register.php">
                                    <i class="fas fa-user-plus me-1"></i> Inscription
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <style>
            .navbar {
                transition: all 0.3s ease;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .navbar.scrolled {
                padding: 10px 0;
                background-color: rgba(0, 0, 0, 0.9) !important;
            }

            .nav-link {
                font-weight: 500;
                padding: 8px 15px;
                transition: all 0.3s ease;
            }

            .nav-link:hover {
                color: var(--orange) !important;
            }

            .navbar-brand {
                color: var(--orange) !important;
            }

            @media (max-width: 991.98px) {
                .navbar-collapse {
                    padding: 20px 0;
                    background-color: rgba(0, 0, 0, 0.95);
                }

                .nav-item {
                    margin: 5px 0;
                }
            }
        </style>
    </header>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Effet de rétrécissement du navbar au scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>