function jourtravaille(date) {
    // Tableau contenant les jours fériés de l'année 2020 en France
    let joursFeries = ["2020-01-01", "2020-04-13", "2020-05-01", "2020-05-08", "2020-05-21", "2020-06-01", "2020-07-14", "2020-08-15", "2020-11-01", "2020-11-11", "2020-12-25"];

    // Récupération des informations de la date
    let jour = date.getDate();
    let mois = date.getMonth() + 1;
    let annee = date.getFullYear();
    let jourSemaine = date.getDay();

    // Formatage de la date pour la comparaison avec les jours fériés
    let dateFormatee = annee + "-" + (mois < 10 ? "0" + mois : mois) + "-" + (jour < 10 ? "0" + jour : jour);

    // Vérification si la date est un jour férié
    if (joursFeries.includes(dateFormatee)) {
        console.log(`Le ${jour} ${mois} ${annee} est un jour férié`);
    } else if (jourSemaine === 6 || jourSemaine === 0) { // Vérification si la date est un samedi ou un dimanche
        console.log(`Non, ${jour} ${mois} ${annee} est un week-end`);
    } else {
        console.log(`Oui, ${jour} ${mois} ${annee} est un jour travaillé`);
    }
}

let date = new Date(2020, 4, 8); // 8 mai 2020
jourtravaille(date); // Affiche "Le 8 5 2020 est un jour férié"
