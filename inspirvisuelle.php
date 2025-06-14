<?php
session_start();
include('layouts/header.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspiration Visuelle | Justine Créations</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ff8000;
            --dark: #000;
            --light: #fff;
        }

        .gallery-section {
            background-color: var(--dark);
            color: var(--light);
            padding: 5rem 0;
            min-height: 100vh;
        }

        .gallery-title {
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 3rem;
            position: relative;
            text-align: center;
        }

        .gallery-title:after {
            content: '';
            display: block;
            width: 150px;
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

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(255, 128, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .gallery-img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(255, 128, 0, 0.3);
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }

        .caption-title {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }

            .gallery-img {
                height: 300px;
            }
        }
    </style>
</head>

<body>

    <!-- ############## -->
    <!-- Gallery -->
    <!-- ############## -->
    <section class="gallery-section">
        <div class="container">
            <h1 class="gallery-title">Inspiration Visuelle</h1>

            <div class="gallery-grid">
                <!-- Gallery 1 -->
                <div class="gallery-item">
                    <img src="/assets/images/Inspirations visuelles/ivA.jpg" alt="Inspiration créative A" class="gallery-img">
                    <div class="gallery-caption">
                        <h3 class="caption-title">Collection Printemps</h3>
                        <p>Style bohème chic</p>
                    </div>
                </div>

                <!-- Gallery 2 -->
                <div class="gallery-item">
                    <img src="/assets/images/Inspirations visuelles/ivB.jpg" alt="Inspiration créative B" class="gallery-img">
                    <div class="gallery-caption">
                        <h3 class="caption-title">Élégance Urbaine</h3>
                        <p>Modernité et sophistication</p>
                    </div>
                </div>

                <!-- Gallery 3 -->
                <div class="gallery-item">
                    <img src="/assets/images/Inspirations visuelles/ivC.jpg" alt="Inspiration créative C" class="gallery-img">
                    <div class="gallery-caption">
                        <h3 class="caption-title">Nuit Étoilée</h3>
                        <p>Mystère et glamour</p>
                    </div>
                </div>

                <!-- Gallery 4 -->
                <div class="gallery-item">
                    <img src="/assets/images/Inspirations visuelles/ivD.jpg" alt="Inspiration créative D" class="gallery-img">
                    <div class="gallery-caption">
                        <h3 class="caption-title">Renaissance</h3>
                        <p>Inspiration vintage</p>
                    </div>
                </div>

                <!-- Gallery 5 -->
                <div class="gallery-item">
                    <img src="/assets/images/Inspirations visuelles/ivE.jpg" alt="Inspiration créative E" class="gallery-img">
                    <div class="gallery-caption">
                        <h3 class="caption-title">Minéralité</h3>
                        <p>Textures naturelles</p>
                    </div>
                </div>

                <!-- Gallery 6 -->
                <div class="gallery-item">
                    <img src="/assets/images/Inspirations visuelles/ivF.jpg" alt="Inspiration créative F" class="gallery-img">
                    <div class="gallery-caption">
                        <h3 class="caption-title">Avant-Garde</h3>
                        <p>Audace et innovation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php include('layouts/footer.php'); ?>