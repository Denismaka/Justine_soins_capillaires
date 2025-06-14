<?php
session_start();
include('layouts/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Capillaire | Tissages, Tresses & Brushing</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ff8000;
            --dark: #000;
            --light: #fff;
            --text-secondary: rgba(255, 255, 255, 0.7);
        }

        .hair-art-section {
            background-color: var(--dark);
            color: var(--light);
            padding: 5rem 0;
            min-height: 100vh;
        }

        .section-title {
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: clamp(2rem, 4vw, 3.5rem);
            margin-bottom: 3rem;
            position: relative;
            text-align: center;
            letter-spacing: 2px;
        }

        .section-title:after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: var(--primary);
            margin: 1.5rem auto 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            padding: 0 1rem;
        }

        .hair-art-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(255, 128, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 350px;
        }

        .hair-art-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .hair-art-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 128, 0, 0.3);
        }

        .hair-art-card:hover .hair-art-img {
            transform: scale(1.05);
        }

        .hair-art-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .hair-art-card:hover .hair-art-overlay {
            opacity: 1;
        }

        .art-technique {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
        }

        .art-duration {
            color: var(--text-secondary);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .art-duration i {
            margin-right: 5px;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .hair-art-card {
                height: 300px;
            }
        }
    </style>
</head>

<body>
    <!-- ############## -->
    <!-- Blog -->
    <!-- ############## -->
    <section class="hair-art-section">
        <div class="container">
            <h1 class="section-title">L'Art du Cheveu</h1>

            <div class="gallery-grid">
                <!-- Tissage 1 -->
                <div class="hair-art-card">
                    <img src="/assets/images/Blog/1.jpg" alt="Tissage africain moderne avec extensions synthétiques" class="hair-art-img">
                    <div class="hair-art-overlay">
                        <h3 class="art-technique">Tissage Ghana</h3>
                        <p class="art-duration"><i class="far fa-clock"></i> Durée : 3h</p>
                    </div>
                </div>

                <!-- Tresse 1 -->
                <div class="hair-art-card">
                    <img src="/assets/images/Blog/2.jpg" alt="Tresses box braids avec perles décoratives" class="hair-art-img">
                    <div class="hair-art-overlay">
                        <h3 class="art-technique">Box Braids</h3>
                        <p class="art-duration"><i class="far fa-clock"></i> Durée : 4h30</p>
                    </div>
                </div>

                <!-- Brushing 1 -->
                <div class="hair-art-card">
                    <img src="/assets/images/Blog/3.jpg" alt="Brushing professionnel sur cheveux afro" class="hair-art-img">
                    <div class="hair-art-overlay">
                        <h3 class="art-technique">Brushing Élégance</h3>
                        <p class="art-duration"><i class="far fa-clock"></i> Durée : 1h15</p>
                    </div>
                </div>

                <!-- Tissage 2 -->
                <div class="hair-art-card">
                    <img src="/assets/images/Blog/4.jpg" alt="Tissage collé avec mèches couleur miel" class="hair-art-img">
                    <div class="hair-art-overlay">
                        <h3 class="art-technique">Tissage Collé</h3>
                        <p class="art-duration"><i class="far fa-clock"></i> Durée : 2h45</p>
                    </div>
                </div>

                <!-- Tresse 2 -->
                <div class="hair-art-card">
                    <img src="/assets/images/Blog/5.jpg" alt="Tresses cornrow avec motif géométrique" class="hair-art-img">
                    <div class="hair-art-overlay">
                        <h3 class="art-technique">Cornrows Artistiques</h3>
                        <p class="art-duration"><i class="far fa-clock"></i> Durée : 3h</p>
                    </div>
                </div>

                <!-- Brushing 2 -->
                <div class="hair-art-card">
                    <img src="/assets/images/Blog/6.jpg" alt="Brushing volumineux avec effet miroir" class="hair-art-img">
                    <div class="hair-art-overlay">
                        <h3 class="art-technique">Brushing Volume</h3>
                        <p class="art-duration"><i class="far fa-clock"></i> Durée : 1h30</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('layouts/footer.php'); ?>