<?php
session_start();
include('layouts/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins Capillaires - Salon de Coiffure</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <style>
        :root {
            --primary: #ff8000;
            --secondary: #000;
            --light: #fff;
            --dark: #1a1a1a;
        }

        .services-section {
            background-color: var(--secondary);
            color: var(--light);
            padding: 5rem 0;
        }

        .section-title {
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 3rem;
            text-transform: uppercase;
            position: relative;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: var(--primary);
            margin: 15px auto;
        }

        .service-card {
            background: var(--dark);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 3rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 128, 0, 0.2);
        }

        .service-img {
            height: 100%;
            object-fit: cover;
        }

        .service-content {
            padding: 2rem;
        }

        .service-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }

        .service-description {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .highlight {
            color: var(--primary);
            font-weight: 600;
        }

        .price-btn {
            background: var(--primary);
            color: var(--light);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .price-btn:hover {
            background: #e67300;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .service-card {
                flex-direction: column;
            }

            .service-img-container,
            .service-content {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>

    <!-- ############## -->
    <!-- soins -->
    <!-- ############## -->
    <section class="services-section" id="soins">
        <div class="container">
            <h1 class="text-center section-title">Nos Soins Capillaires</h1>

            <!-- Coupe de cheveux -->
            <div class="service-card d-flex flex-wrap">
                <div class="service-img-container col-md-6 p-0" style="width: 50%">
                    <img src="/assets/images/Soins capillaires/soins1.jpg" alt="Coupe de cheveux" class="service-img w-100 h-100">
                </div>
                <div class="service-content col-md-6" style="width: 50%">
                    <h3 class="service-title">Coupe de Cheveux</h3>
                    <p class="service-description">
                        <span class="highlight">Description</span>: Une coupe personnalisée adaptée à votre style et à la forme de votre visage.
                        Que vous souhaitiez une coupe classique, moderne ou tendance, nos stylistes vous conseilleront sur le meilleur choix.
                    </p>
                    <button class="btn price-btn">
                        <i class="fas fa-scissors me-2"></i> À partir de 30€
                    </button>
                </div>
            </div>

            <!-- Coloration -->
            <div class="service-card d-flex flex-wrap flex-md-row-reverse">
                <div class="service-img-container col-md-6 p-0" style="width: 50%">
                    <img src="/assets/images/Soins capillaires/soins2.jpg" alt="Coloration capillaire" class="service-img w-100 h-100">
                </div>
                <div class="service-content col-md-6" style="width: 50%">
                    <h3 class="service-title">Coloration Professionnelle</h3>
                    <p class="service-description">
                        <span class="highlight">Description</span>: Transformez votre look avec nos services de coloration premium.
                        Que vous souhaitiez une couleur uniforme, des mèches ou un balayage, nous utilisons des produits professionnels
                        pour un résultat éclatant et durable.
                    </p>
                    <button class="btn price-btn">
                        <i class="fas fa-paint-brush me-2"></i> À partir de 50€
                    </button>
                </div>
            </div>

            <!-- Traitement capillaire -->
            <div class="service-card d-flex flex-wrap">
                <div class="service-img-container col-md-6 p-0" style="width: 50%">
                    <img src="/assets/images/Soins capillaires/soins3.jpg" alt="Traitement capillaire" class="service-img w-100 h-100">
                </div>
                <div class="service-content col-md-6" style="width: 50%">
                    <h3 class="service-title">Traitement Capillaire</h3>
                    <p class="service-description">
                        <span class="highlight">Description</span>: Un soin en profondeur pour revitaliser et hydrater vos cheveux.
                        Ce traitement aide à réparer les cheveux abîmés, à renforcer la brillance naturelle et à améliorer la texture
                        pour des cheveux visiblement plus sains.
                    </p>
                    <button class="btn price-btn">
                        <i class="fas fa-spa me-2"></i> À partir de 40€
                    </button>
                </div>
            </div>

            <!-- Brushing -->
            <div class="service-card d-flex flex-wrap flex-md-row-reverse">
                <div class="service-img-container col-md-6 p-0" style="width: 50%">
                    <img src="/assets/images/Soins capillaires/soins4.jpg" alt="Brushing professionnel" class="service-img w-100 h-100">
                </div>
                <div class="service-content col-md-6" style="width: 50%">
                    <h3 class="service-title">Brushing Professionnel</h3>
                    <p class="service-description">
                        <span class="highlight">Description</span>: Un brushing élégant pour un look sophistiqué et soigné.
                        Idéal pour les occasions spéciales ou pour vous faire plaisir au quotidien. Nos stylistes créent
                        des finitions lisses ou des effets volume selon vos préférences.
                    </p>
                    <button class="btn price-btn">
                        <i class="fas fa-wind me-2"></i> À partir de 25€
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('layouts/footer.php'); ?>