<?php
// session_start();
include('functions/db.php');
include('layouts/header.php');
include('functions/rendez_vous.func.php');
?>

<!-- ############## -->
<!-- Rendez-vous -->
<!-- ############## -->
<section class="appointment py-5 bg-dark" id="appointment">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-heading text-center mb-5">
                    <h2 class="text-white">Prendre rendez-vous</h2>
                    <p class="text-white-50 mt-3">Planifiez votre consultation en quelques clics</p>
                </div>

                <form class="bg-black p-4 p-md-5 rounded shadow" method="POST">
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label for="nom" class="form-label text-white">Nom *</label>
                            <input
                                type="text"
                                id="nom"
                                name="nom_user"
                                class="form-control bg-secondary border-0 py-3 text-white"
                                placeholder="Votre nom"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label for="prenom" class="form-label text-white">Prénom *</label>
                            <input
                                type="text"
                                id="prenom"
                                name="prenom_user"
                                class="form-control bg-secondary border-0 py-3 text-white"
                                placeholder="Votre prénom"
                                required>
                        </div>
                    </div>

                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label for="email" class="form-label text-white">Email *</label>
                            <input
                                type="email"
                                id="email"
                                name="email_user"
                                class="form-control bg-secondary border-0 py-3 text-white"
                                placeholder="exemple@email.com"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label for="tel" class="form-label text-white">Téléphone *</label>
                            <input
                                type="tel"
                                id="tel"
                                name="tel_user"
                                class="form-control bg-secondary border-0 py-3 text-white"
                                placeholder="06 12 34 56 78"
                                pattern="[0-9]{10}"
                                required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="date" class="form-label text-white">Date souhaitée *</label>
                        <input
                            type="date"
                            id="date"
                            name="date"
                            class="form-control bg-secondary border-0 py-3 text-white"
                            min="<?= date('Y-m-d') ?>"
                            required>
                        <div class="form-text text-white-50">Disponibilités du lundi au vendredi, 9h-18h</div>
                    </div>

                    <div class="mb-4">
                        <label for="service" class="form-label text-white">Service demandé</label>
                        <select
                            id="service"
                            name="service"
                            class="form-select bg-secondary border-0 py-3 text-white">
                            <option value="consultation">soins initiale</option>
                            <option value="suivi">Coupe de Cheveux</option>
                            <option value="urgence">Coloration Professionnelle</option>
                            <option value="urgence">Traitement Capillaire</option>
                            <option value="urgence">Brushing Professionnel</option>
                            <option value="urgence">Autres...</option>
                        </select>
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="confirmation" required>
                        <label class="form-check-label text-white-50" for="confirmation">
                            Je confirme ces informations *
                        </label>
                    </div>

                    <button type="submit" name="submit" class="btn btn-danger w-100 py-3 fw-bold">
                        <i class="fas fa-calendar-check me-2"></i> Confirmer le rendez-vous
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>