<!DOCTYPE html>
<html>
<head>
    <title>Exemple</title>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
</body>
</html>


function afficherjourssemaines() {
    // Création d'un tableau contenant les jours de la semaine
    let jourssemaines = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

    // Boucle for pour parcourir le tableau et afficher chaque jour
    for (let i = 0; i < jourssemaines.length; i++) {
        console.log(jourssemaines[i]);
    }
}
