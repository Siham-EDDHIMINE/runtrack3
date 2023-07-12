// Fonction pour vérifier si les mots de passe sont identiques
function checkPasswords() {
    var password = document.getElementById('password');
    var confirm_password = document.getElementById('confirm_password');

    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Les mots de passe ne correspondent pas.");
    } else {
        confirm_password.setCustomValidity('');
    }
}

// Ajout d'un écouteur d'événement pour vérifier les mots de passe à chaque fois que l'utilisateur saisit quelque chose
var password = document.getElementById('password');
var confirm_password = document.getElementById('confirm_password');

if (password && confirm_password) {
    password.onchange = checkPasswords;
    confirm_password.onkeyup = checkPasswords;
}