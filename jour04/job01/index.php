<!DOCTYPE html>
<html>
<head>
    <title>Exemple de Fetch</title>
</head>
<body>
    <!-- Création d'un bouton ayant comme id "button" -->
    <button id="button">Récupérer l'expression</button>

    <script>
        // Sélection du bouton
        let button = document.querySelector("#button");

        // Ajout d'un écouteur d'événements pour récupérer le contenu du fichier expression.txt lorsque l'utilisateur clique sur le bouton
        button.addEventListener("click", function() {
            // Utilisation de la fonction fetch pour récupérer le contenu du fichier expression.txt
            fetch("expression.txt")
                // Traitement de la réponse pour extraire le texte
                .then(response => response.text())
                // Création d'un paragraphe et insertion du texte dans la page
                .then(text => {
                    let paragraph = document.createElement("p");
                    paragraph.textContent = text;
                    document.body.appendChild(paragraph);
                });
        });
    </script>
</body>
</html>
