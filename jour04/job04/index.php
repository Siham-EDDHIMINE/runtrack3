<!DOCTYPE html>
<html>
<head>
    <title>Exemple de mise à jour d'un tableau</title>
</head>
<body>
    <!-- Création d'un tableau avec des en-têtes pour l'id, le nom, le prénom et l'email -->
    <table id="usersTable">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </table>

    <!-- Création d'un bouton pour mettre à jour le tableau -->
    <button id="updateButton">Update</button>

    <script>
        // Sélection des éléments HTML
        let usersTable = document.querySelector("#usersTable");
        let updateButton = document.querySelector("#updateButton");

        // Fonction pour mettre à jour le tableau
        function updateTable() {
            // Utilisation de la fonction fetch pour récupérer les données des utilisateurs depuis la page users.php
            fetch("users.php")
                .then(response => response.json())
                .then(users => {
                    // Suppression des anciennes lignes du tableau
                    while (usersTable.rows.length > 1) {
                        usersTable.deleteRow(1);
                    }

                    // Ajout des nouvelles lignes au tableau
                    for (let i = 0; i < users.length; i++) {
                        let row = usersTable.insertRow();
                        row.insertCell().textContent = users[i].id;
                        row.insertCell().textContent = users[i].nom;
                        row.insertCell().textContent = users[i].prenom;
                        row.insertCell().textContent = users[i].email;
                    }
                });
        }

        // Ajout d'un écouteur d'événements pour mettre à jour le tableau lorsque l'utilisateur clique sur le bouton "Update"
        updateButton.addEventListener("click", updateTable);

        // Mise à jour initiale du tableau
        updateTable();
    </script>
</body>
</html>

