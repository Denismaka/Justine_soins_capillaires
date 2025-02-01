<?php 
session_start(); // Démarre la session
include 'functions/db.php'; 

// Vérifie si l'utilisateur est connecté et a le grade 1
if (isset($_SESSION['user_id']) && $_SESSION['grade'] == 1) {
    header("Location: dashboard.php"); // Redirige vers le dashboard
    exit(); // Termine le script
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Justine soins capillaires(JSC)</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/fonts/css/all.min.css" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <!-- ############## -->
    <!-- Header -->
    <!-- ############## -->
    <header>
        <nav>
            <a href="index.php" class="logo"> Justine soins capillaires</a>
            <?php
            if (isset($_GET['id_user'])) {

                if ($_SESSION['id_grade'] == 3) {
            ?>
                    
                <?php
                } else {
                ?>
                    <a id="dashboard" href="dashboard.php?id_user=<?= $_SESSION['id_user'] ?>">Dashboard</a>
            <?php
                }
            }
            ?>
            <ul class="navigation">
                <a href="index.php#home">home</a>
                <a href="index.php#about">a propos</a>
                <a href="index.php#services">services</a>
                <a href="index.php#galeries">galerie</a>
                <a href="index.php#témoignages">témoignages</a>
                <a href="index.php#blog">blog</a>
                <?php
                if (isset($_GET['id_user'])) {
                ?>
                    <li id="deconnexion"><a href="index.php">Deconnexion </a></li>
                    <li id="nom_user">
                        <?php echo $_SESSION['nom_user'] ?>
                        <?php echo $_SESSION['prenom_user'] ?>
                    </li>
                <?php
                } else {
                ?>
                    <li id="dns"><a href="login.php">connexion</a></li>
                    <li id="dns"><a href="register.php">Enregistrement</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>

        <style>
            #nom_user {
                margin-left: 7px;
                margin-top: 15px;
                cursor: pointer;
                color: var(--white);
                font-size: 17px;
                font-weight: 600;
                background: transparent;
                border-radius: 5px;
                transition: 0.2s ease-in-out;
                text-decoration: none;
                text-transform: capitalize;
            }
            #nom_user:hover {
                color: var(--orange);
                transition: 0.2s ease-in-out;
            }
            #deconnexion {
              margin-top: 15px;
            }
            #dashboard {
              margin-left: 300px;
              margin-bottom: 15px;
              list-style: none;
              text-decoration: none;
              color: var(--white);
              font-weight: 600;
            }
            #dashboard:hover {
              color: var(--orange);
            }
            #dns {
              margin-top: 15px;
            }
        </style>
    </header>
</body>
</html>
