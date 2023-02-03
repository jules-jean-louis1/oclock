//Burger menu



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

//const button
const lapBtn = document.getElementById('lapBtn');
const timerMilliSec = document.getElementById('timerMilliSec');
const timerSec = document.getElementById('timerSec');
const timerMins = document.getElementById('timerMins');
const timerHrs = document.getElementById('timerHrs');
const startBtn = document.getElementById('startBtn');
const resetBtn = document.getElementById('resetBtn');
const lapRecord = document.getElementById('lapRecord');

let hours = 0;
let minutes = 0;
let seconds = 0;
let miliseconds = 0;

let displayMilisec = miliseconds;
let displaySec = seconds;
let displayMins = minutes;
let displayHours = hours;

let interval = null;

let status = "stopped";

let lapNow = null;

function start() {
    miliseconds++;

    if (miliseconds < 10) displayMilisec = "0" + miliseconds.toString();
    else displayMilisec = miliseconds;

    if (seconds < 10) displaySec = "0" + seconds.toString();
    else displaySec = seconds;

    if (minutes < 10) displayMins = "0" + minutes.toString();
    else displayMins = minutes;

    if (hours < 10) displayHours = "0" + hours.toString();
    else displayHours = hours;

    if (miliseconds / 100 === 1) {
        seconds++;
        miliseconds = 0;

        if (seconds / 60 === 1) {
            minutes++;
            seconds = 0;

            if (minutes / 60 === 1) {
                hours++;
                minutes = 0;
            }
        }
    }



    timerMilisec.innerHTML = displayMilisec;
    timerSec.innerHTML = displaySec;
    timerMins.innerHTML = displayMins;
    timerHrs.innerHTML = displayHours;

}

function startStop() {
    if (status === "stopped") {
        interval = setInterval(start, 10);
        startBtn.innerHTML = "Stop";
        status = "started";
    } else {
        clearInterval(interval);
        startBtn.innerHTML = "Start";
        status = "stopped";
    }
}

function reset() {
    clearInterval(interval);
    miliseconds = 0;
    seconds = 0;
    minutes = 0;
    hours = 0;
    timerMilisec.innerHTML = "00";
    timerSec.innerHTML = "00";
    timerMins.innerHTML = "00";
    timerHrs.innerHTML = "00";
    startBtn.innerHTML = "Start";
    lapRecord.innerHTML = '';
    status = "stopped";
}

function lap() {
    lapNow = `<div class="lap">${hours} : ${minutes} : ${seconds} : ${miliseconds}</div>`;
    lapRecord.innerHTML += lapNow;
}

lapBtn.addEventListener('click', lap);
startBtn.addEventListener('click', startStop);
resetBtn.addEventListener('click', reset);


// Création de la fonction pour le chronomètre avec un bouton pour lancer et arreter le chronomètre
var hoursSelect = document.getElementById("hours");
var minutesSelect = document.getElementById("minutes");
var secondsSelect = document.getElementById("seconds");
var startButton = document.getElementById("startButton");
var stopButton = document.getElementById("stopButton");
var resetButton = document.getElementById("resetButton");
var restartButton = document.getElementById("restartButton");
var timeDisplay = document.getElementById("time");
var targetTime;
var timerInterval;
var totalSeconds;

startButton.addEventListener("click", startTimer);
stopButton.addEventListener("click", stopTimer);
resetButton.addEventListener("click", resetTimer);
restartButton.addEventListener("click", restartTimer);

function startTimer() {
    totalSeconds =
        parseInt(hoursSelect.value) * 60 * 60 +
        parseInt(minutesSelect.value) * 60 +
        parseInt(secondsSelect.value);
    targetTime = new Date().getTime() + totalSeconds * 1000;
    timerInterval = setInterval(updateTimer, 1000);
}

function stopTimer() {
    clearInterval(timerInterval);
}

function resetTimer() {
    clearInterval(timerInterval);
    timeDisplay.textContent = "00:00:00";
    hoursSelect.value = "0";
    minutesSelect.value = "0";
    secondsSelect.value = "0";
}

function restartTimer() {
    clearInterval(timerInterval);
    targetTime = new Date().getTime() + totalSeconds * 1000;
    timerInterval = setInterval(updateTimer, 1000);
}

function updateTimer() {
    var currentTime = new Date().getTime();
    var timeLeft = targetTime - currentTime;

    if (timeLeft <= 0) {
        clearInterval(timerInterval);
        timeDisplay.textContent = "Time's up!";
        return;
    }

    var seconds = Math.floor(timeLeft /1000);
    var minutes = Math.floor(seconds / 60);
    var hours = Math.floor(minutes / 60);

    minutes %= 60;
    seconds %= 60;

    hours = padWithZero(hours);
    minutes = padWithZero(minutes);
    seconds = padWithZero(seconds);

    timeDisplay.textContent = hours + ":" + minutes + ":" + seconds;
}

function padWithZero(time) {
    if (time < 10) {
        return "0" + time;
    }
    return time;
}
