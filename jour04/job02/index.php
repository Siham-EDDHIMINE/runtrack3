<!DOCTYPE html>
<html>
<head>
    <title>Exemple de Fetch</title>
</head>
<body>
    <button id="button">Récupérer l'expression</button>

    <script>
        let button = document.querySelector("#button");

        button.addEventListener("click", function() {
            fetch("expression.txt")
                .then(response => response.text())
                .then(text => {
                    let paragraph = document.createElement("p");
                    paragraph.textContent = text;
                    document.body.appendChild(paragraph);
                });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Exemple de jsonValueKey</title>
</head>
<body>
    <script>
        function jsonValueKey(jsonString, key) {
            let data = JSON.parse(jsonString);
            return data[key];
        }

        // Exemple d'utilisation de la fonction jsonValueKey
        let jsonString = `{
            "name": "La Plateforme_",
            "address": "8 rue d'hozier",
            "city": "Marseille",
            "nb_staff": "11",
            "creation": "2019"
        }`;
        console.log(jsonValueKey(jsonString, "city")); // Affiche "Marseille"
    </script>
</body>
</html>
