<!DOCTYPE html>
<html>
<head>
    <title>Exemple de bouton</title>
</head>
<body>
    <button id="showButton">Afficher le texte</button>
    <button id="hideButton">Cacher le texte</button>
    <p id="text" style="display: none;">Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.</p>

    <script>
        let showButton = document.querySelector("#showButton");
        let hideButton = document.querySelector("#hideButton");
        let text = document.querySelector("#text");

        showButton.addEventListener("click", function() {
            text.style.display = "block";
        });

        hideButton.addEventListener("click", function() {
            text.style.display = "none";
        });
    </script>
</body>
</html>
