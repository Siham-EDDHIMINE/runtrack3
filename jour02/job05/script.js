// Fonction pour mettre à jour la couleur du footer en fonction du pourcentage de scrolling
function updateFooterColor() {
    // Récupération du pourcentage de scrolling
    let scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

    // Calcul des composantes RGB en fonction du pourcentage de scrolling
    let r = Math.round(scrollPercentage * 255);
    let g = Math.round(255 - scrollPercentage * 255);
    let b = 0;

    // Mise à jour de la couleur du footer
    document.querySelector("footer").style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
}

// Ajout d'un écouteur d'événements sur la fenêtre pour mettre à jour la couleur du footer lors du scrolling
window.addEventListener("scroll", updateFooterColor);
