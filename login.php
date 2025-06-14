<?php
session_start();
require('layouts/header.php');
require('functions/login.func.php');

if (isset($message)) {
    echo '<div class="alert alert-' . ($error ? 'danger' : 'success') . ' text-center">' . $message . '</div>';
}
?>

<!-- ############## -->
<!-- Connexion -->
<!-- ############## -->
<section class="login py-5 bg-dark" id="login">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="section-heading mb-5">
                    <h2 class="text-center text-white">Se connecter</h2>
                    <div class="text-center mt-3">
                        <p class="text-white-50">Accédez à votre espace personnel</p>
                    </div>
                </div>

                <form class="bg-black p-4 p-md-5 rounded shadow" method="POST">
                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Adresse email</label>
                        <input
                            type="email"
                            id="email"
                            name="email_user"
                            class="form-control bg-secondary border-0 py-3 text-white"
                            placeholder="votre@email.com"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Mot de passe</label>
                        <input
                            type="password"
                            id="password"
                            name="motpass_user"
                            class="form-control bg-secondary border-0 py-3 text-white"
                            placeholder="••••••••"
                            required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label text-white-50" for="remember">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="text-danger">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" name="submit" class="btn btn-danger w-100 py-3 fw-bold">
                        Connexion
                    </button>

                    <div class="text-center mt-4">
                        <p class="text-white-50">Pas encore de compte ? <a href="register.php" class="text-danger">S'inscrire</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php') ?>