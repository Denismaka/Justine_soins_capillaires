<?php
session_start();
include('layouts/header.php');
include('functions/index.func.php');
?>

<!-- ############## -->
<!-- Accueil -->
<!-- ############## -->
<section class="home vh-100 d-flex align-items-center" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-4 fw-bold text-white mb-4">Bienvenue <span class="text-warning multiple"></span></h1>
                <p class="lead text-white mb-5">
                    Découvrez un havre de paix où vos cheveux reçoivent toute l'attention qu'ils méritent.
                    Notre équipe de stylistes passionnées est prête à vous offrir une expérience inégalée.
                </p>
                <a href="rendez_vous.php" class="btn btn-danger btn-lg px-5 py-3">Réservez</a>
            </div>
        </div>
    </div>
</section>

<!-- ############## -->
<!-- À propos -->
<!-- ############## -->
<section class="about py-5 bg-dark" id="about">
    <div class="container py-5">
        <div class="section-heading mb-5">
            <h2 class="text-center text-white">Notre histoire</h2>
        </div>
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <p class="text-white fs-5">
                    Chez <span class="text-warning fw-bold">JSC</span>, nous croyons que chaque client mérite un service personnalisé.
                    Fondé avec l'ambition de fournir des soins capillaires de qualité.
                </p>
            </div>
            <div class="col-md-6">
                <img src="assets/images/Salon/salon.webp" class="img-fluid rounded shadow-lg" alt="Salon JSC">
            </div>
        </div>
    </div>
</section>

<!-- ############## -->
<!-- Services -->
<!-- ############## -->
<section class="services py-5 bg-black" id="services">
    <div class="container py-5">
        <div class="section-heading mb-5">
            <h2 class="text-center text-white">Nos soins capillaires</h2>
        </div>
        <p class="text-white text-center mx-auto mb-5" style="max-width: 800px;">
            Découvrez notre large gamme de services adaptés à tous les types de cheveux.
        </p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 bg-transparent h-100">
                    <img src="assets/images/Soins capillaires/soins1.jpg" class="card-img-top rounded" alt="Service">
                    <div class="card-body text-center">
                        <span class="text-warning fw-bold fs-4">50$</span>
                        <h5 class="text-white mt-2">Brushing</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-transparent h-100">
                    <img src="assets/images/Soins capillaires/soins1.jpg" class="card-img-top rounded" alt="Service">
                    <div class="card-body text-center">
                        <span class="text-warning fw-bold fs-4">50$</span>
                        <h5 class="text-white mt-2">Brushing</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-transparent h-100">
                    <img src="assets/images/Soins capillaires/soins1.jpg" class="card-img-top rounded" alt="Service">
                    <div class="card-body text-center">
                        <span class="text-warning fw-bold fs-4">50$</span>
                        <h5 class="text-white mt-2">Brushing</h5>
                    </div>
                </div>
            </div>
            <!-- Répéter pour les autres services -->
        </div>
        <div class="text-center mt-5">
            <a href="soins.php" class="btn btn-outline-danger px-4 py-2">En savoir plus</a>
        </div>
    </div>
</section>

<!-- ############## -->
<!-- Galerie -->
<!-- ############## -->
<section class="gallery py-5 bg-dark" id="galeries">
    <div class="container py-5">
        <div class="section-heading mb-5">
            <h2 class="text-center text-white">Inspiration visuelle</h2>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <img src="assets/images/Inspirations visuelles/iv1.jpg" class="img-fluid rounded shadow" alt="Galerie">
            </div>
            <div class="col-6 col-md-3">
                <img src="assets/images/Inspirations visuelles/iv1.jpg" class="img-fluid rounded shadow" alt="Galerie">
            </div>
            <div class="col-6 col-md-3">
                <img src="assets/images/Inspirations visuelles/iv1.jpg" class="img-fluid rounded shadow" alt="Galerie">
            </div>
            <div class="col-6 col-md-3">
                <img src="assets/images/Inspirations visuelles/iv1.jpg" class="img-fluid rounded shadow" alt="Galerie">
            </div>
            <!-- Répéter pour les autres images -->
        </div>
        <div class="text-center mt-4">
            <a href="inspirvisuelle.php" class="btn btn-danger px-4 py-2">Voir plus</a>
        </div>
    </div>
</section>

<!-- ############## -->
<!-- Témoignages -->
<!-- ############## -->
<section class="testimonials py-5 bg-black" id="témoignages">
    <div class="container py-5">
        <div class="section-heading mb-5">
            <h2 class="text-center text-white">Témoignages</h2>
            <h4 class="text-center text-warning">Ce que nos clients disent de nous !</h4>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-dark text-white p-3 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/Reviews/avis-01.jpg" class="rounded-circle me-3" width="60" alt="Client">
                        <h5 class="mb-0">Charlotte A</h5>
                    </div>
                    <p class="mb-4">Je suis ravie de ma dernière visite chez JSC!</p>
                    <div class="text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white p-3 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/Reviews/avis-01.jpg" class="rounded-circle me-3" width="60" alt="Client">
                        <h5 class="mb-0">Charlotte A</h5>
                    </div>
                    <p class="mb-4">Je suis ravie de ma dernière visite chez JSC!</p>
                    <div class="text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white p-3 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/images/Reviews/avis-01.jpg" class="rounded-circle me-3" width="60" alt="Client">
                        <h5 class="mb-0">Charlotte A</h5>
                    </div>
                    <p class="mb-4">Je suis ravie de ma dernière visite chez JSC!</p>
                    <div class="text-warning">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <!-- Répéter pour les autres témoignages -->
        </div>
    </div>
</section>

<!-- ############## -->
<!-- Blog -->
<!-- ############## -->
<section class="blog py-5 bg-dark" id="blog">
    <div class="container py-5">
        <div class="section-heading mb-5">
            <h2 class="text-center text-white">Blog</h2>
            <h4 class="text-center text-warning">Conseils et tendances</h4>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 bg-transparent overflow-hidden">
                    <img src="assets/images/Blog/1.jpg" class="card-img-top" alt="Blog">
                    <div class="card-img-overlay bg-dark bg-opacity-75 d-flex flex-column justify-content-center text-center">
                        <h4 class="text-white">Tissage</h4>
                        <a href="blog.php" class="text-danger mt-2"><i class="fas fa-external-link-alt fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-transparent overflow-hidden">
                    <img src="assets/images/Blog/1.jpg" class="card-img-top" alt="Blog">
                    <div class="card-img-overlay bg-dark bg-opacity-75 d-flex flex-column justify-content-center text-center">
                        <h4 class="text-white">Tissage</h4>
                        <a href="blog.php" class="text-danger mt-2"><i class="fas fa-external-link-alt fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-transparent overflow-hidden">
                    <img src="assets/images/Blog/1.jpg" class="card-img-top" alt="Blog">
                    <div class="card-img-overlay bg-dark bg-opacity-75 d-flex flex-column justify-content-center text-center">
                        <h4 class="text-white">Tissage</h4>
                        <a href="blog.php" class="text-danger mt-2"><i class="fas fa-external-link-alt fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <!-- Répéter pour les autres articles -->
        </div>
    </div>
</section>


<!-- ############## -->
<!-- Rendez-vous -->
<!-- ############## -->
<section class="contact py-5 bg-black" id="rendez-vous">
    <div class="container py-5">
        <div class="section-heading mb-5">
            <h2 class="text-center text-white">Prendre rendez-vous</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="bg-dark p-4 rounded">
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control bg-secondary border-0 py-3" placeholder="Nom" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control bg-secondary border-0 py-3" placeholder="Prénom" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control bg-secondary border-0 py-3" placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control bg-secondary border-0 py-3" placeholder="Téléphone" required>
                        </div>
                        <div class="col-12">
                            <input type="date" class="form-control bg-secondary border-0 py-3" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger px-5 py-3">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php') ?>