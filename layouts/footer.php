<!-- ############## -->
<!-- footer -->
<!-- ############## -->
<footer class="footer py-4 bg-dark text-white" id="footer">
    <div class="container">
        <div class="row mt-md-5">
            <!-- colonne Adresse -->
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-danger fw-bold mb-3">Justine soins capillaires</h5>
                <address>
                    Rue de yolo n°7259, B.P. 1248 LIMETE KINSHASA,<br>
                    REPUBLIQUE DEMOCRATIQUE DU CONGO.
                </address>
                <p class="mt-2">
                    <i class="fas fa-phone me-2"></i> +243 997435030<br>
                    <i class="fas fa-envelope me-2"></i> justinesoinscapillaires@gmail.com
                </p>
            </div>
            <!-- colonne Liens -->
            <div class="col-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                <h5 class="text-danger fw-bold mb-3">Liens</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#home" class="text-white text-decoration-none hover-orange">Accueil</a></li>
                    <li class="mb-2"><a href="#about" class="text-white text-decoration-none hover-orange">À propos</a></li>
                    <li class="mb-2"><a href="#services" class="text-white text-decoration-none hover-orange">Services</a></li>
                    <li class="mb-2"><a href="#galeries" class="text-white text-decoration-none hover-orange">Galerie</a></li>
                </ul>
            </div>
            <!-- colonne Services -->
            <div class="col-6 col-md-3 col-lg-2 mb-4 mb-md-0">
                <h5 class="text-danger fw-bold mb-3">Nos Services</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="noservices.php" class="text-white text-decoration-none hover-orange">Décoration</a></li>
                    <li class="mb-2"><a href="noservices.php" class="text-white text-decoration-none hover-orange">Tresses</a></li>
                    <li class="mb-2"><a href="noservices.php" class="text-white text-decoration-none hover-orange">Make up</a></li>
                    <li class="mb-2"><a href="noservices.php" class="text-white text-decoration-none hover-orange">Habillage</a></li>
                </ul>
            </div>
            <!-- colonne Newsletter -->
            <div class="col-md-6 col-lg-5">
                <h5 class="text-danger fw-bold mb-3">Notre Newsletter</h5>
                <p>
                    Restez informé des dernières innovations en soins capillaires avec notre newsletter.
                </p>
                <?php include('newsletter.php') ?>
            </div>
        </div>

        <!-- icônes sociales -->
        <div class="d-flex justify-content-center justify-content-md-start mt-4">
            <div class="socials-icons d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center bg-danger text-white rounded-circle me-3 hover-orange"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center bg-danger text-white rounded-circle me-3 hover-orange"><i class="fab fa-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center bg-danger text-white rounded-circle me-3 hover-orange"><i class="fab fa-youtube"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center bg-danger text-white rounded-circle hover-orange"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- copyright -->
        <div class="text-center mt-4 pt-3 border-top border-secondary">
            <p class="mb-0">&copy; <span id="current-year">2025</span> Copyright <a href="#" class="text-danger text-decoration-none hover-orange">Denis Maka</a>. Tous droits réservés</p>
        </div>
    </div>
</footer>