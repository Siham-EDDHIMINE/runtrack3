// Fonction pour enregistrer les touches du clavier
function keylogger(event) {
    // Récupération de l'élément ayant comme id "keylogger"
    let textarea = document.getElementById("keylogger");

    // Vérification si la touche est une lettre (a-z)
    if (event.key >= "a" && event.key <= "z") {
        // Ajout de la lettre dans le textarea
        textarea.value += event.key;
    }
}

// Ajout d'un écouteur d'événements sur le document
document.addEventListener("keypress", keylogger);
