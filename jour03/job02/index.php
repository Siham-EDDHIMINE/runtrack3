<!DOCTYPE html>
<html>
<head>
    <title>Exemple d'arc-en-ciel</title>
    <style>
        /* Style pour afficher les images côte à côte */
        #container {
            display: flex;
        }
        .imageContainer {
            margin: 5px;
        }
        .imageContainer img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <!-- Création d'un bouton pour mélanger les images -->
    <button id="shuffleButton">Mélanger les images</button>

    <!-- Création d'un conteneur pour afficher les images -->
    <div id="container"></div>

    <!-- Création d'un paragraphe pour afficher le message -->
    <p id="message"></p>

    <script>
        // Tableau contenant les URLs des images
        let images = [
            "https://i.imgur.com/1.png",
            "https://i.imgur.com/2.png",
            "https://i.imgur.com/3.png",
            "https://i.imgur.com/4.png",
            "https://i.imgur.com/5.png",
            "https://i.imgur.com/6.png"
        ];

        // Sélection des éléments HTML
        let container = document.querySelector("#container");
        let shuffleButton = document.querySelector("#shuffleButton");
        let message = document.querySelector("#message");

        // Fonction pour mélanger un tableau
        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }

        // Fonction pour vérifier si les images sont dans le bon ordre
        function checkOrder() {
            let imageContainers = document.querySelectorAll(".imageContainer");
            for (let i = 0; i < imageContainers.length; i++) {
                if (imageContainers[i].dataset.order != i) {
                    return false;
                }
            }
            return true;
        }

        // Fonction pour afficher les images
        function displayImages() {
            container.innerHTML = "";
            for (let i = 0; i < images.length; i++) {
                let imageContainer = document.createElement("div");
                imageContainer.classList.add("imageContainer");
                imageContainer.dataset.order = i;

                let image = document.createElement("img");
                image.src = images[i];
                imageContainer.appendChild(image);

                container.appendChild(imageContainer);
            }
        }

        // Fonction pour afficher le message
        function displayMessage() {
            if (checkOrder()) {
                message.textContent = "Vous avez gagné";
                message.style.color = "green";
            } else {
                message.textContent = "Vous avez perdu";
                message.style.color = "red";
            }
        }

        // Ajout d'un écouteur d'événements pour mélanger les images lorsque l'utilisateur clique sur le bouton "Mélanger"
        shuffleButton.addEventListener("click", function() {
            shuffleArray(images);
            displayImages();
            displayMessage();
        });

        // Ajout d'un écouteur d'événements pour déplacer une image au début des conteneurs lorsque l'utilisateur clique dessus
        container.addEventListener("click", function(event) {
            if (event.target.tagName === "IMG") {
                let clickedImageContainer = event.target.parentNode;
                let firstImageContainer = document.querySelector(".imageContainer");

                container.insertBefore(clickedImageContainer, firstImageContainer);
                displayMessage();
            }
        });

        // Affichage initial des images
        displayImages();
    </script>
</body>
</html>
