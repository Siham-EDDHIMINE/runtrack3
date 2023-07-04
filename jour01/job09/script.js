function tri(numbers, order) {
    if (order === "asc") {
        // Tri ascendant
        numbers.sort(function(a, b) {
            return a - b;
        });
    } else if (order === "desc") {
        // Tri descendant
        numbers.sort(function(a, b) {
            return b - a;
        });
    }
    return numbers;
}


let numbers = [3, 1, 4, 2];
console.log(tri(numbers, "asc")); // Affiche [1, 2, 3, 4]
console.log(tri(numbers, "desc")); // Affiche [4, 3, 2, 1]
