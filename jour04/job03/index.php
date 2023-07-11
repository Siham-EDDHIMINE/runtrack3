<!DOCTYPE html>
<html>
<head>
    <title>Exemple de formulaire de tri</title>
</head>
<body>
    <!-- Création d'un formulaire avec des champs pour l'id, le nom et le type -->
    <form id="filterForm">
        <label for="id">Id :</label>
        <input type="text" id="id" name="id"><br><br>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="type">Type :</label>
        <select id="type" name="type">
            <option value="">--Sélectionner un type--</option>
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
            <option value="type3">Type 3</option>
        </select><br><br>

        <!-- Création d'un bouton pour filtrer les données -->
        <input type="button" id="filterButton" value="Filtrer">
    </form>

    <!-- Création d'une liste pour afficher les résultats -->
    <ul id="results"></ul>

    <script>
        // Sélection des éléments HTML
        let filterForm = document.querySelector("#filterForm");
        let filterButton = document.querySelector("#filterButton");
        let results = document.querySelector("#results");

        // Ajout d'un écouteur d'événements pour filtrer les données lorsque l'utilisateur clique sur le bouton "Filtrer"
        filterButton.addEventListener("click", function() {
            // Récupération des valeurs des champs du formulaire
            let id = filterForm.elements["id"].value;
            let name = filterForm.elements["name"].value;
            let type = filterForm.elements["type"].value;

            // Utilisation de la fonction fetch pour récupérer le contenu du fichier pokemon.json
            fetch("pokemon.json")
                .then(response => response.json())
                .then(data => {
                    // Suppression des anciens résultats
                    results.innerHTML = "";

                    // Parcours des données pour ne conserver que les éléments répondant aux critères sélectionnés
                    for (let i = 0; i < data.length; i++) {
                        if ((id === "" || data[i].id === id) && (name === "" || data[i].name === name) && (type === "" || data[i].type === type)) {
                            // Création d'un élément de liste pour afficher l'élément
                            let li = document.createElement("li");
                            li.textContent = `Id : ${data[i].id}, Nom : ${data[i].name}, Type : ${data[i].type}`;
                            results.appendChild(li);
                        }
                    }
                });
        });
    </script>
</body>
</html>
