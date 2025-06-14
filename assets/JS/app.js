const typed = new Typed(".multiple", {
    strings: [
        "Justine Soins Capillaires 🧖‍♀️", // Ajout d'emoji
        "L'excellence capillaire depuis 2020 ✨", // Message plus branding
        "Votre beauté, notre expertise 💇‍♀️", // Nouveau slogan
    ], // Augmentation à 3 phrases cycliques
    typeSpeed: 80, // Légèrement ralenti pour meilleure lisibilité
    backSpeed: 50, // Retour plus lent
    backDelay: 1500, // Délai augmenté
    loop: true,
    showCursor: true, // Curseur visible
    cursorChar: "|", // Style du curseur
});

ScrollReveal({
    reset: false, // Changé à false pour éviter les reset gênants
    distance: "50px", // Distance réduite
    duration: 1800, // Durée ajustée
    delay: 150, // Délai harmonisé
    opacity: 0.1, // Ajout d'effet d'opacité
    easing: "cubic-bezier(0.5, 0, 0, 1)", // Courbe d'animation premium
});

// Hiérarchie révélations :
ScrollReveal().reveal(".container, .heading, h1", {
    origin: "top",
    interval: 100, // Délai entre éléments
});

ScrollReveal().reveal("img, .services-container", {
    origin: "bottom",
    rotate: { x: 20 }, // Effet 3D subtil
});

ScrollReveal().reveal("form, .testimonial", {
    origin: "left",
    scale: 0.9, // Effet de zoom
});

// Délai de charnement pour éviter le CLS
document.addEventListener("DOMContentLoaded", function () {
    setTimeout(initAnimations, 500);
});

function initAnimations() {
    // Vos initialisations ici
}

// Adaptation aux petits écrans
if (window.innerWidth < 768) {
    ScrollReveal().reveal("*", {
        distance: "30px",
        duration: 1000,
    });
}
