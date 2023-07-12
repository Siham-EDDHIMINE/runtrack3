<?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=utilisateurs', 'runtrack3', '123456');

// Vérification si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Requête pour vérifier si l'email existe dans la base de données
    $stmt = $db->prepare("SELECT * FROM utilisateurs WHERE email = :email");
    $stmt->execute(array(':email' => $email));
    $user = $stmt->fetch();

    // Vérification si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($password, $user['password'])) {
        // Démarrage d'une session et stockage des informations de l'utilisateur dans la session
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_prenom'] = $user['prenom'];

        // Redirection vers la page d'accueil
        header('Location: index.php');
    } else {
        // Message d'erreur si l'email ou le mot de passe est incorrect
        echo "Email ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connexion</h1>
    <form action="connexion.php" method="post">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
    <script src="script.js"></script>
</body>
</html>
