// Fonction pour ajouter 1 au compteur
function addone() {
    // Récupération de l'élément ayant comme id "compteur"
    let compteur = document.getElementById("compteur");

    // Incrémentation du compteur
    compteur.textContent = parseInt(compteur.textContent) + 1;
}

// Ajout d'un écouteur d'événements sur le bouton
document.getElementById("button").addEventListener("click", addone);
