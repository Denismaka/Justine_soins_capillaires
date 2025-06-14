<?php
session_start();
require('layouts/header.php');
require('functions/register.func.php');

if (isset($message)) {
    $error = null;
    echo '<div class="alert alert-' . ($error ? 'danger' : 'success') . ' text-center mt-5">' . $message . '</div>';
}
?>

<!-- ############## -->
<!-- Register -->
<!-- ############## -->
<section class="register py-5 bg-dark" id="register">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="section-heading mb-5">
                    <h2 class="text-center text-white">Créer un compte</h2>
                    <div class="text-center mt-3">
                        <p class="text-white-50">Rejoignez notre communauté</p>
                    </div>
                </div>

                <form class="bg-black p-4 p-md-5 rounded shadow" method="POST">
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="nom" class="form-label text-white">Nom</label>
                            <input
                                type="text"
                                id="nom"
                                name="nom_user"
                                class="form-control bg-secondary border-0 py-3 text-white"
                                placeholder="Votre nom"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label for="prenom" class="form-label text-white">Prénom</label>
                            <input
                                type="text"
                                id="prenom"
                                name="prenom_user"
                                class="form-control bg-secondary border-0 py-3 text-white"
                                placeholder="Votre prénom"
                                required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email_user"
                            class="form-control bg-secondary border-0 py-3 text-white"
                            placeholder="exemple@email.com"
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
                        <div class="form-text text-white-50">Minimum 8 caractères</div>
                    </div>

                    <div class="mb-4">
                        <label for="confirm-password" class="form-label text-white">Confirmation</label>
                        <input
                            type="password"
                            id="confirm-password"
                            name="motpass_repeat"
                            class="form-control bg-secondary border-0 py-3 text-white"
                            placeholder="••••••••"
                            required>
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label text-white-50" for="terms">
                            J'accepte les <a href="#" class="text-danger">conditions d'utilisation</a>
                        </label>
                    </div>

                    <button type="submit" name="submit" class="btn btn-danger w-100 py-3 fw-bold">
                        S'inscrire
                    </button>

                    <div class="text-center mt-4">
                        <p class="text-white-50">Déjà inscrit ? <a href="login.php" class="text-danger">Se connecter</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php') ?>