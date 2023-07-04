// Tableau contenant la séquence du code Konami
let konamiCode = ["ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", 
"ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a"];
// Index de la prochaine touche à vérifier
let konamiIndex = 0;

// Fonction pour vérifier si l'utilisateur a entré le code Konami
function checkKonamiCode(event) {
    // Vérification si la touche enfoncée correspond à la prochaine touche du code Konami
    if (event.key === konamiCode[konamiIndex]) {
        // Incrémentation de l'index pour passer à la prochaine touche
        konamiIndex++;

        // Vérification si toutes les touches du code Konami ont été entrées
        if (konamiIndex === konamiCode.length) {
            // Réinitialisation de l'index
            // Stylisation de la page
            document.body.classList.add("stylise");

        }
    } else {
        // Réinitialisation de l'index si la touche ne correspond pas
        konamiIndex = 0;
    }
}

// Ajout d'un écouteur d'événements sur la fenêtre pour vérifier si l'utilisateur entre le code Konami
window.addEventListener("keydown", checkKonamiCode);
