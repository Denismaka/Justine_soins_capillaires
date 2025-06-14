<?php
session_start();
include('layouts/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Créatif | Justine</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ff8000;
            --dark: #000;
            --light: #fff;
            --gray: #f8f9fa;
        }

        .blog-section {
            background-color: var(--dark);
            color: var(--light);
            padding: 5rem 0;
            min-height: 100vh;
        }

        .blog-title {
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 3rem;
            position: relative;
            text-align: center;
        }

        .blog-title:after {
            content: '';
            display: block;
            width: 150px;
            height: 4px;
            background: var(--primary);
            margin: 1.5rem auto 0;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
            padding: 0 1rem;
        }

        .blog-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 32px rgba(255, 128, 0, 0.1);
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(255, 128, 0, 0.3);
        }

        .blog-img-container {
            height: 250px;
            overflow: hidden;
        }

        .blog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .blog-card:hover .blog-img {
            transform: scale(1.1);
        }

        .blog-content {
            padding: 1.5rem;
        }

        .blog-date {
            color: var(--primary);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .blog-card-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.4rem;
            line-height: 1.3;
        }

        .blog-excerpt {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .read-more {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            color: var(--light);
        }

        .read-more i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .read-more:hover i {
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .blog-img-container {
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <!-- ############## -->
    <!-- Blogsingle -->
    <!-- ############## -->
    <section class="blog-section">
        <div class="container">
            <h1 class="blog-title">Inspirations du Blog</h1>

            <div class="blog-grid">
                <!-- Article 1 -->
                <article class="blog-card">
                    <div class="blog-img-container">
                        <img src="/assets/images/Blog/11.webp" alt="Tendances mode printemps 2025" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">13 Juin 2025</span>
                        <h3 class="blog-card-title">Les nouvelles tendances de la mode urbaine</h3>
                        <p class="blog-excerpt">Découvrez comment intégrer les dernières tendances streetwear dans votre garde-robe quotidienne...</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="blog-card">
                    <div class="blog-img-container">
                        <img src="/assets/images/Blog/2.jpeg" alt="Accessoires mode été" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">10 Juin 2025</span>
                        <h3 class="blog-card-title">Accessoires indispensables pour cet été</h3>
                        <p class="blog-excerpt">Notre sélection des pièces maîtresses qui sublimeront toutes vos tenues estivales...</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="blog-card">
                    <div class="blog-img-container">
                        <img src="/assets/images/Blog/3.webp" alt="Style bohème chic" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">7 Juin 2025</span>
                        <h3 class="blog-card-title">Le retour du style bohème chic</h3>
                        <p class="blog-excerpt">Comment adopter ce look intempérel avec des pièces modernes et des touches vintage...</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="blog-card">
                    <div class="blog-img-container">
                        <img src="/assets/images/Blog/7.webp" alt="Couleurs tendance 2025" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">4 Juin 2025</span>
                        <h3 class="blog-card-title">Palette de couleurs tendance 2025</h3>
                        <p class="blog-excerpt">Les nuances qui domineront les collections cette année et comment les porter avec élégance...</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="blog-card">
                    <div class="blog-img-container">
                        <img src="/assets/images/Blog/5.webp" alt="Mode durable" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">1 Juin 2025</span>
                        <h3 class="blog-card-title">Mode durable : notre engagement</h3>
                        <p class="blog-excerpt">Découvrez comment nous intégrons des pratiques écoresponsables dans notre processus créatif...</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="blog-card">
                    <div class="blog-img-container">
                        <img src="/assets/images/Blog/6.webp" alt="Tenues soirée" class="blog-img">
                    </div>
                    <div class="blog-content">
                        <span class="blog-date">28 Mai 2025</span>
                        <h3 class="blog-card-title">Tenues parfaites pour vos soirées d'été</h3>
                        <p class="blog-excerpt">Notre guide ultime pour briller lors de vos événements estivaux avec des looks mémorables...</p>
                        <a href="#" class="read-more">Lire l'article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('layouts/footer.php'); ?>