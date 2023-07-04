function sommenombrespremiers(a, b) {
    // Fonction pour vérifier si un nombre est premier
    function estPremier(n) {
        if (n <= 1) {
            return false;
        }
        for (let i = 2; i < n; i++) {
            if (n % i === 0) {
                return false;
            }
        }
        return true;
    }

    // Vérification si les deux nombres sont premiers
    if (estPremier(a) && estPremier(b)) {
        return a + b;
    } else {
        return false;
    }
}


console.log(sommenombrespremiers(2, 3)); // Affiche 5
console.log(sommenombrespremiers(4, 5)); // Affiche false
