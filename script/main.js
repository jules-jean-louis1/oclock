// creation function pour affichage de l'heure

function afficheHeure() {
    let date = new Date();
    let heure = date.getHours();
    let minute = date.getMinutes();
    let seconde = date.getSeconds();

    let horloge = heure + ":" + minute + ":" + seconde;

    document.getElementById("horloge").innerHTML = horloge;

    let clock = setTimeout(afficheHeure, 1000);

}
afficheHeure();


// Creation de la fonction pour la minuterie avec un bouton pour lancer et arreter la minuterie
const formTmer = document.querySelector('#formMinuterie');
formTmer.addEventListener('submit', (e) => {
    e.preventDefault();
    fetch('index.php')
        .then(response => {
            console.log(response);
        })
}
