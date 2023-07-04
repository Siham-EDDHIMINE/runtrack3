console.log(bisextile(2020)); // Affiche true
console.log(bisextile(2021)); // Affiche false



// Déclaration de la fonction bisextile
function bisextile(année) {
    if ((année % 4 === 0 && année % 100 !== 0) || année % 400 === 0) {
        return true;
    } else {
        return false;
    }
}

