<form action="/functions/newsletter.func.php" method="POST" class="newsletter-form">
    <div class="input-group">
        <input
            type="email"
            name="email"
            placeholder="Votre adresse email"
            class="form-control newsletter-input"
            required
            aria-label="Votre adresse email"
            aria-describedby="newsletter-button">
        <button
            type="submit"
            name="subscribe"
            class="btn btn-primary newsletter-btn"
            id="newsletter-button">
            <span class="btn-text">S'abonner</span>
            <i class="fas fa-paper-plane ms-2"></i>
        </button>
    </div>
    <small class="form-text">En vous abonnant, vous acceptez de recevoir nos actualités et offres spéciales.</small>
</form>

<style>
    .newsletter-form {
        max-width: 500px;
        margin: 0 auto;
    }

    .newsletter-input {
        height: 50px;
        border: 2px solid #ff8000;
        border-right: none;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .newsletter-input:focus {
        box-shadow: 0 0 0 0.25rem rgba(255, 128, 0, 0.25);
        border-color: #ff8000;
    }

    .newsletter-btn {
        height: 50px;
        background-color: #ff8000;
        border-color: #ff8000;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .newsletter-btn:hover {
        background-color: #e67300;
        border-color: #e67300;
        transform: translateY(-2px);
    }

    .form-text {
        display: block;
        margin-top: 0.5rem;
        color: #6c757d;
        font-size: 0.8rem;
    }
</style>