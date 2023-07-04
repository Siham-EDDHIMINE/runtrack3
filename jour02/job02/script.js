function showhide() {
    // Récupération de l'élément ayant comme id "citation"
    let citation = document.getElementById("citation");

    // Vérification si l'élément existe
    if (citation) {
        // Si l'élément existe, on le supprime
        citation.remove();
    } else {
        // Si l'élément n'existe pas, on le crée
        citation = document.createElement("article");
        citation.id = "citation";
        citation.textContent = "L'important n'est pas la chute, mais l'atterrissage.";

        // Ajout de l'élément à la fin du body
        document.body.appendChild(citation);
    }
}
