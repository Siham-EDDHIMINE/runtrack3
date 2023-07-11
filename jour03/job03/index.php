<!DOCTYPE html>
<html>
<head>
    <title>Exemple de taquin</title>
    <style>
        /* Style pour afficher les carreaux côte à côte */
        #container {
            display: flex;
            flex-wrap: wrap;
            width: 306px;
        }
        .tile {
            width: 100px;
            height: 100px;
            margin: 1px;
            text-align: center;
            line-height: 100px;
            font-size: 24px;
        }
        /* Style pour cacher le carreau vide */
        .tile[data-value="0"] {
            background-color: white;
        }
    </style>
</head>
<body>
    <!-- Création d'un conteneur pour afficher les carreaux -->
    <div id="container"></div>

    <!-- Création d'un paragraphe pour afficher le message -->
    <p id="message"></p>

    <!-- Création d'un bouton pour relancer une partie -->
    <button id="restartButton" style="display: none;">Recommencer</button>

    <script>
        // Tableau contenant les valeurs des carreaux
        let tiles = [1, 2, 3, 4, 5, 6, 7, 8, 0];

        // Sélection des éléments HTML
        let container = document.querySelector("#container");
        let message = document.querySelector("#message");
        let restartButton = document.querySelector("#restartButton");

        // Fonction pour mélanger un tableau
        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }

        // Fonction pour obtenir la position d'un carreau dans le tableau
        function getTilePosition(value) {
            for (let i = 0; i < tiles.length; i++) {
                if (tiles[i] === value) {
                    return i;
                }
            }
        }

        // Fonction pour vérifier si un carreau peut être déplacé
        function canMoveTile(tileIndex) {
            let emptyTileIndex = getTilePosition(0);
            if (tileIndex === emptyTileIndex - 1 || tileIndex === emptyTileIndex + 1 || tileIndex === emptyTileIndex - 3 || tileIndex === emptyTileIndex + 3) {
                return true;
            } else {
                return false;
            }
        }

        // Fonction pour déplacer un carreau
        function moveTile(tileIndex) {
            let emptyTileIndex = getTilePosition(0);
            [tiles[tileIndex], tiles[emptyTileIndex]] = [tiles[emptyTileIndex], tiles[tileIndex]];
        }

        // Fonction pour vérifier si le taquin est résolu
        function isSolved() {
            for (let i = 0; i < tiles.length; i++) {
                if (tiles[i] !== i + 1 && i !== tiles.length - 1) {
                    return false;
                }
            }
            return true;
        }

        // Fonction pour afficher les carreaux
        function displayTiles() {
            container.innerHTML = "";
            for (let i = 0; i < tiles.length; i++) {
                let tile = document.createElement("div");
                tile.classList.add("tile");
                tile.dataset.value = tiles[i];
                tile.textContent = tiles[i] !== 0 ? tiles[i] : "";

                if (tiles[i] !== 0) {
                    tile.style.backgroundImage = `url('https://i.imgur.com/${tiles[i]}.png')`;
                    tile.style.backgroundSize = "cover";
                }

                container.appendChild(tile);
            }
        }

        // Fonction pour afficher le message
        function displayMessage() {
            if (isSolved()) {
                message.textContent = "Vous avez gagné";
                message.style.color = "green";
                restartButton.style.display = "inline-block";
            } else {
                message.textContent = "";
                restartButton.style.display = "none";
            }
        }

        // Ajout d'un écouteur d'événements pour relancer une partie lorsque l'utilisateur clique sur le bouton "Recommencer"
        restartButton.addEventListener("click", function() {
            shuffleArray(tiles);
            displayTiles();
            displayMessage();
        });

        // Ajout d'un écouteur d'événements pour déplacer un carreau lorsque l'utilisateur clique dessus
        container.addEventListener("click", function(event) {
            if (event.target.classList.contains("tile")) {
                let clickedTileValue = parseInt(event.target.dataset.value);
                let clickedTileIndex = getTilePosition(clickedTileValue);

                if (canMoveTile(clickedTileIndex)) {
                    moveTile(clickedTileIndex);
                    displayTiles();
                    displayMessage();
                }
            }
        });

        // Affichage initial des carreaux
        shuffleArray(tiles);
        displayTiles();
    </script>
</body>
</html>
