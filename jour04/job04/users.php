<?php
// Connexion à la base de données
$db = new mysqli("hostname", "username", "password", "utilisateurs");

// Vérification de la connexion
if ($db->connect_error) {
    die("Erreur de connexion : " . $db->connect_error);
}

// Requête pour récupérer l'ensemble des utilisateurs
$query = "SELECT id, nom, prenom, email FROM utilisateurs";
$result = $db->query($query);

// Création d'un tableau pour stocker les utilisateurs
$users = [];

// Parcours des résultats pour ajouter chaque utilisateur au tableau
while ($row = $result->fetch_assoc()) {
    $users[] = [
        "id" => $row["id"],
        "nom" => $row["nom"],
        "prenom" => $row["prenom"],
        "email" => $row["email"]
    ];
}

// Affichage des utilisateurs au format JSON
header("Content-Type: application/json");
echo json_encode($users);
