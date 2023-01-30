// creation function pour affichage de l'heure

function afficheHeure() {
    let date = new Date();
    let heure = date.getHours();
    let minute = date.getMinutes();
    let seconde = date.getSeconds();
    let jour = date.getDay();
    let mois = date.getMonth();
    let annee = date.getFullYear();

    let horloge = heure + ":" + minute + ":" + seconde;

    document.getElementById("horloge").innerHTML = horloge;

    let clock = setTimeout(afficheHeure, 1000);

}
afficheHeure();