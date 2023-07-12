<?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=utilisateurs', 'runtrack3', '123456');

// Vérification si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification si les mots de passe sont identiques
    if ($password == $confirm_password) {
        // Hachage du mot de passe
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Insertion des données dans la base de données
        $stmt = $db->prepare("INSERT INTO utilisateurs (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)");
        $stmt->execute(array(
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $password
        ));

        // Redirection vers la page de connexion
        header('Location: connexion.php');
    } else {
        // Message d'erreur si les mots de passe ne sont pas identiques
        echo "Les mots de passe ne correspondent pas.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inscription</h1>
    <form action="inscription.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>
        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        <input type="submit" name="submit" value="S'inscrire">
    </form>
    <script src="script.js"></script>
</body>
</html>
