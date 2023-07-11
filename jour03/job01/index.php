<!DOCTYPE html>
<html>
<head>
    <title>Exemple de bouton</title>
</head>
<body>
    <!-- Création de deux boutons avec des identifiants uniques -->
    <button id="showButton">Afficher le texte</button>
    <button id="hideButton">Cacher le texte</button>

    <!-- Création d'un paragraphe avec un identifiant unique et un style pour le cacher initialement -->
    <p id="text" style="display: none;">Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.</p>

    <script>
        // Sélection des éléments HTML à l'aide de leur identifiant
        let showButton = document.querySelector("#showButton");
        let hideButton = document.querySelector("#hideButton");
        let text = document.querySelector("#text");

        // Ajout d'un écouteur d'événements pour afficher le texte lorsque l'utilisateur clique sur le bouton "Afficher"
        showButton.addEventListener("click", function() {
            text.style.display = "block";
        });

        // Ajout d'un écouteur d'événements pour cacher le texte lorsque l'utilisateur clique sur le bouton "Cacher"
        hideButton.addEventListener("click", function() {
            text.style.display = "none";
        });
    </script>
</body>
</html>
