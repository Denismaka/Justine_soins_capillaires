<?php
session_start();
include('layouts/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services | Justine Soins Capillaires</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <style>
        :root {
            --primary: #ff8000;
            --secondary: #343a40;
            --light: #f8f9fa;
            --dark: #212529;
        }

        .services-section {
            background-color: var(--dark);
            color: white;
            min-height: 100vh;
            padding: 4rem 0;
        }

        .services-header {
            margin-bottom: 3rem;
            text-align: center;
        }

        .services-title {
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 3rem;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .services-title:after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: var(--primary);
            margin: 1rem auto 0;
        }

        .service-card {
            margin-bottom: 2rem;
            overflow: hidden;
            border-radius: 8px;
            border: none;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
        }

        .service-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(255, 128, 0, 0.2);
        }

        .service-card:hover .service-img {
            transform: scale(1.05);
        }

        .service-caption {
            padding: 1.5rem;
            text-align: center;
        }

        .service-name {
            color: var(--primary);
            font-weight: 600;
            margin-top: 1rem;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .services-title {
                font-size: 2rem;
            }

            .service-img {
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <!-- ############## -->
    <!-- services -->
    <!-- ############## -->
    <section class="services-section">
        <div class="container">
            <div class="services-header">
                <h1 class="services-title">Nos Services Exceptionnels</h1>
                <p class="lead">Découvrez l'excellence de nos prestations sur-mesure</p>
            </div>

            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <img src="/assets/images/Noservices/1.jpg" alt="Décoration capillaire" class="service-img">
                        <div class="service-caption">
                            <h3 class="service-name">Décoration</h3>
                            <i class="fas fa-spa service-icon" style="color: var(--primary); font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <img src="/assets/images/Noservices/2.jpg" alt="Tresses africaines" class="service-img">
                        <div class="service-caption">
                            <h3 class="service-name">Tresses</h3>
                            <i class="fas fa-braids service-icon" style="color: var(--primary); font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <img src="/assets/images/Noservices/3.jpg" alt="Maquillage professionnel" class="service-img">
                        <div class="service-caption">
                            <h3 class="service-name">Make Up</h3>
                            <i class="fas fa-paint-brush service-icon" style="color: var(--primary); font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <img src="/assets/images/Noservices/4.jpg" alt="Habillage capillaire" class="service-img">
                        <div class="service-caption">
                            <h3 class="service-name">Habillage</h3>
                            <i class="fas fa-tshirt service-icon" style="color: var(--primary); font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('layouts/footer.php'); ?>